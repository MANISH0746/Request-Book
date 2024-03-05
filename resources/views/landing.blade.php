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

    <!-- HOME -->
    <section id="home" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1>BookShareHub: Connect, share, and borrow books with fellow readers.</h1>
                        <div class="btns">
                            <button class="addBooks">Add Your Books</button>
                            <button class="exploreBooks">Explore Books</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <img class="book_gif" src="/images/bookGif.gif" alt="open-book-gif">
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>Let us introduce</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p>BookShareHub is an online platform where members can easily share their personal book
                            collections, discover new reads recommended by fellow enthusiasts, and borrow books
                            from others.</p>
                        <p>Our user-friendly interface and robust community features make connecting with
                            like-minded readers simple and enjoyable.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="about-image">
                        <img src="images/about-img.jpg" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section id="howitworks" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <div class="about-image">
                        <img src="images/howitworks-img.jpg" class="img-responsive" alt="">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                </div>

                <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>How It Works</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p>Getting started on BookShareHub is easy! Simply create an account, add books to your
                            virtual library, and start exploring the collections of fellow members. When you find
                            a book you'd like to borrow, send a request, and arrange the details with the owner.
                            It's that simple!"</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>Features</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p>Upload Your Library: Users can easily upload details about the books they own.</p>
                        <p>Request Books: Want to borrow a book? Simply browse through other users' libraries and
                            send a request to borrow.</p>
                        <p>Chat: Communicate with other members through our built-in chat
                            feature,arranging book exchanges.</p>
                        <p>Explore Recommendations: Discover new reads based on recommendations from fellow
                            members and curated lists.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="about-image">
                        <img src="images/features-img.jpg" class="img-responsive" alt="">
                    </div>
                </div>

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

    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row contact-form">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Contact us</h2>
                        <span class="line-bar">...</span>
                        <h3 class="contact-form-msg">Have questions or feedback? We'd love to hear from you! Feel
                            free to reach out.</h3>
                    </div>

                </div>

                <div class="col-md-6 col-sm-6">

                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" role="form" action="#" method="post">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Full Name" id="cf-name"
                                name="cf-name" required="">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" id="cf-email"
                                name="cf-email" required="">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf-message"
                                required=""></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12 contact-form-submit">
                            <input type="submit" class="form-control" name="submit" value="Send Message">
                        </div>

                    </form>
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
