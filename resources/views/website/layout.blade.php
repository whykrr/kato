<!doctype html>
<html lang="en">

<head>
    <base href="{{ url('/') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ url('website/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('website/css/owl.carousel.min.css') }}" rel="stylesheet">

    <title>KATOPLUS</title>
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('website/img/kato-icon-black.png') }}">

    <script src="https://kit.fontawesome.com/0065d13f55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('website/css/custom.css') }}">
</head>

<body>
    <header style="height: 90px">
        <nav class="navbar navbar-expand-xl fixed-top navbar-light bg-white pt-0">
            <div class="container">
                <a class="col-10 col-md-4" href="{{ url('/') }}">
                    <img src="{{ url('website/img/kato-logo-black.png') }}" width="150" height="75"
                        class="d-inline-block align-top" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse col-md-4 navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link mx-md-2" href="{{ url('/') }}">{{ __('website.home') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-md-2" href="#" id="navDropCollection"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('website.collection') }}
                            </a>
                            <ul class="dropdown-menu mx-md-2" aria-labelledby="navDropCollection">
                                <li><a class="dropdown-item" href="#">Vol 7</a></li>
                                <li><a class="dropdown-item" href="#">Raya 2023</a></li>
                                <li><a class="dropdown-item" href="#">Vol 8 . Garden</a></li>
                                <li><a class="dropdown-item" href="#">All Products</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-md-2" href="{{ url('stories') }}">
                                <img src="{{ url('website/img/kata-kato.png') }}" alt="kata KATO" height="25px">
                            </a>
                        </li>
                        <li class="nav-item avenirl-med">
                            <a class="nav-link text-primary mx-md-2"
                                href="{{ url('explore?k=sale') }}">{{ __('website.sale') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse col-md-4 navbarSupportedContent">
                    <div class="d-grid ms-auto">
                        <ul class="navbar-nav ms-xl-auto font-md-s">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navDropCurrency" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    @if (session('currency') != 'usd')
                                        IDR
                                    @else
                                        USD
                                    @endif
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navDropCurrency">
                                    <li><a class="dropdown-item" href="{{ url('currency/idr') }}">IDR</a></li>
                                    <li><a class="dropdown-item" href="{{ url('currency/usd') }}">USD</a></li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navDropLang" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('website.lang') }}</a>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navDropLang">
                                    @if (Config::get('app.locale') == 'en')
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                        <li><a class="dropdown-item" href="{{ url('locale/id') }}">Bahasa Indonesia</a>
                                        </li>
                                    @else
                                        <li><a class="dropdown-item" href="{{ url('locale/en') }}">English</a></li>
                                        <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                                    @endif

                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('cart') }}">{{ __('website.cart') }} (0)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('history') }}">{{ __('website.history_shopping') }}</a>
                            </li>
                            <li class="nav-item avenirl-med">
                                <a class="nav-link" href="{{ url('profile') }}">My Account</a>
                            </li>
                        </ul>
                        <div class="form-inline ms-md-auto">
                            <form action="{{ url('explore') }}" class="my-2 my-lg-0 input-group with-icon">
                                <input class="form-control form-control-sm" type="search" placeholder="Search ..."
                                    aria-label="Search" name="k" autocomplete="off">
                                <button class="btn" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main role="main">
        @yield('content')
    </main>

    <footer class="footer bg-light">
        <div class="mt-4 mt-md-5">
            <div class="container mt-4 mt-md-5">
                <div class="row">
                    <div class="col-4 font-s">
                        <img src="{{ url('website/img/kato-logo-black.png') }}" width="120" height="60"
                            class="d-inline-block align-top" alt="">
                        <a href="#" class="d-block mb-2">Location : Malang, Indonesia</a>

                        <a href="#" class="d-block mt-2">FAQ</a>
                        <a href="#" class="d-block">Customer Care</a>
                        <a href="#" class="d-block mb-2">Instagram</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <p class="text-muted mb-0 font-s">&copy; KATO PLUS</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{ url('website/js/jquery.min.js') }}"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ url('website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('website/js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel#oc-new').owlCarousel({
            loop: false,
            margin: 20,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
        $('.owl-carousel#oc-collection').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
        $('.owl-carousel#oc-best').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5
                },
                1000: {
                    items: 8
                }
            }
        })
    </script>
    @yield('script')
</body>

</html>
