<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;

class GoogleBookController extends Controller
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function searchBooks(Request $request)
    {
        $query = $request->input('book_name');
        $response = $this->client->get('https://www.googleapis.com/books/v1/volumes', [
            'query' => [
                'q' => $query,
                'langRestrict' => 'en',
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        $englishBook = null;
        foreach ($data['items'] ?? [] as $book) {
            if (isset($book['volumeInfo']['language']) && $book['volumeInfo']['language'] === 'en') {
                $englishBook = $book;
                break;
            }
        }
        if ($englishBook) {
            $volumeInfo = $englishBook['volumeInfo'];
            $searchInfo = $englishBook['searchInfo'];
            $details = [
                'title' => $volumeInfo['title'] ?? 'N/A',
                'subtitle' => $volumeInfo['subtitle'] ?? 'N/A',
                'categories' => $volumeInfo['categories'] ?? [],
                'language' => $volumeInfo['language'] ?? [],
                'pageCount' => $volumeInfo['pageCount'] ?? [],
                'authors' => $volumeInfo['authors'] ?? [],
                'publisher' => $volumeInfo['publisher'] ?? [],
                'publishedDate' => $volumeInfo['publishedDate'] ?? [],
                'imageLinks' => $volumeInfo['imageLinks'] ?? [],
                'description' => $volumeInfo['description'] ?? 'N/A',
                'textSnippet' => $searchInfo['textSnippet'] ?? 'N/A',
            ];
            return view('add_book', ['bookDetails' => $details]);
        } else {
            return null;
        }
    }
}
