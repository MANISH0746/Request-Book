<!DOCTYPE html>
<html lang="en">

<head>

    <title>Share-A-Book: Connect, Share, Read</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description"
        content="BookShareHub: Connect with fellow readers, share your book collection, and borrow books from others. Discover new reads and chat with like-minded enthusiasts.">
    <meta name="keywords" content="Book sharing,Exchange,Library,Readers,Reading community,Book lovers">
    <meta name="author" content="Manish Gupta">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand">BookShareHub</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#howitworks" class="smoothScroll">How it works</a></li>
                    <li><a href="#features" class="smoothScroll">Features</a></li>
                    <li><a href="#book" class="smoothScroll">Books</a></li>
                    <li><a href="#contact" class="smoothScroll">Contacts</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li class="section-btn">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                        in /</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- BOOKS -->
    <section id="book" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Books</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="book-thumb">
                        <a href="images/work-image1.jpg" class="image-popup">
                            <img src="images/work-image1.jpg" class="img-responsive" alt="Work">

                            <div class="book-info">
                                <h3>Clean &amp; Minimal</h3>
                                <small>Product Design</small>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="book-thumb">
                        <a href="images/work-image2.jpg" class="image-popup">
                            <img src="images/work-image2.jpg" class="img-responsive" alt="Work">

                            <div class="book-info">
                                <h3>Studio Bag</h3>
                                <small>Branding</small>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="book-thumb">
                        <a href="images/work-image3.jpg" class="image-popup">
                            <img src="images/work-image3.jpg" class="img-responsive" alt="Work">

                            <div class="book-info">
                                <h3>Frame Design</h3>
                                <small>Photography</small>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- WORK THUMB -->
                    <div class="book-thumb">
                        <a href="images/work-image4.jpg" class="image-popup">
                            <img src="images/work-image4.jpg" class="img-responsive" alt="Work">

                            <div class="book-info">
                                <h3>Paint Work</h3>
                                <small>Art, Design</small>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-12">
                    <div class="footer-thumb footer-info">
                        <h2>BookShareHub</h2>
                        <p>BookShareHub is dedicated to fostering a global community of book lovers who share,
                            connect, and borrow books to inspire a love of reading and lifelong learning.</p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Company</h2>
                        <ul class="footer-link">
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Services</h2>
                        <ul class="footer-link">
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="footer-thumb">
                        <h2>Find us</h2>
                        <p>Naigaon, <br> Mumbai, Maharashtra</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="footer-bottom">
                        <div class="col-md-6 col-sm-5">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2024 BookShareHub</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-7">
                            <div class="phone-contact">
                                <p>Contact : <span><i class='bx bx-user-circle'></i><a href="#">Admin</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>
