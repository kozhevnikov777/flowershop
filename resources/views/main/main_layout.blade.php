<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITnotepad</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.index') }}">Записи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.index') }}">Категории</a>
                        </li>
                        <li class="nav-item">
                            @auth()
                            <a class="nav-link" href="{{ route('personal.main.main') }}">Личный кабинет</a>
                            @endauth
                            @guest()
                            <a class="nav-link" href="{{ route('personal.main.main') }}">Войти</a>
                            @endguest
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    @guest()
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">Войдите или зарегистрируйтесь.</h1>
                <div class="banner-btns-wrapper d-flex justify-content-center">
                    <form action="{{ route('login') }}" >
                        @csrf
                        <input class="btn btn-primary" type="submit" value="Войти">
                    </form>
                    <form action="{{ route('register') }}" >
                        @csrf
                        <input class="btn btn-primary" type="submit" value="Регистрация">
                    </form>
                </div>
                <p class="banner-text">Для добавления или сохранения записей необходимо <br> войти или зарегистрироваться.</p>
            </div>
        </div>
    </section>
    @endguest
    @auth()
    <br>
    <br>
    <br>
    @endauth
    <footer class="edica-footer" data-aos="fade-up">
        <div class="container">
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <a href="/" class="footer-brand-wrapper ">
                        <img src="{{ asset('assets/images/itlogonew.png') }}">
                    </a>
                    <p class="contact-details">message@itnotepad.ru</p>
                    <p class="contact-details">+7 (111) 000-00-00</p>
                    <nav class="footer-social-links">
                        <a href="https://ru-ru.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/?lang=ru"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://m.vk.com/"><i class="fab fa-vk"></i></a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="/" class="nav-link">Главная</a>
                        <a href="/categories" class="nav-link">Категории</a>
                        <a href="https://habr.com/ru/docs/help/rules/" class="nav-link">Правила</a>
                        <a href="https://account.habr.com/info/agreement/" class="nav-link">Соглашение</a>
                        <a href="https://account.habr.com/info/confidential/" class="nav-link">Конфиденциальность</a>
                    </nav>
                </div>
            </div>
            <div class="footer-bottom-content">
                <p class="mb-0">© itnotepad</a> 2023. Все права защищены.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000
        });
      </script>
</body>

</html>
