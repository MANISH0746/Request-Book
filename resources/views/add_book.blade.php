@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container p-5">
                <div class="form-wrap">
                    <form id="survey-form" method="POST" action="{{ route('google_search_book') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <h2 class="text-center">Just the book name!!</h2>
                            <h5 class="text-center px-5 py-3">Simply provide the book title, and let us handle the rest of
                                the details about the book for you.</h5>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="book_name" id="name" placeholder="Enter your book name"
                                        class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="">Detail</button>
                        </div>
                    </form>
                    <div class="row">
                            @if (count($bookDetails)>0)
                                <h2>Title: {{ $bookDetails['title'] }}</h2>
                                <p>Sub-title: {{ $bookDetails['subtitle'] }}</p>
                                <p>Page No.: {{ $bookDetails['pageCount'] }}</p>
                                <p>Language: {{ $bookDetails['language'] }}</p>
                                <p>Publisher: {{ $bookDetails['publisher'] }}</p>
                                <p>Published Date: {{ $bookDetails['publishedDate'] }}</p>
                                <p>{{ $bookDetails['language'] }}</p>
                                <p>Authors: {{ implode(', ', $bookDetails['categories']) }}</p>
                                <p>Authors: {{ implode(', ', $bookDetails['authors']) }}</p>
                                <p>Description: {{ $bookDetails['description'] }}</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
