<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталея</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header edica-landing-header">
        {{-- color near carousel pic  --}}
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}"><img src=" {{ asset('assets/images/logokata1.png') }} " alt="Kataleya" width="110px"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.index') }}">Товары</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('records') }}">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">О нас</a>
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
            <div class="edica-landing-header-content">
               <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active" style="list-style-type: none;">
                        <span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; background-color: #d0c2af; margin: 0 9px;"></span>
                    </li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1" style="list-style-type: none;">
                        <span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; background-color: #d0c2af; margin: 0 9px;"></span>
                    </li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2" style="list-style-type: none;">
                        <span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; background-color: #d0c2af; margin: 0 9px;"></span>
                    </li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                       <div class="carousel-item active">
                           <div class="row">
                               <div class="col-md-6 carousel-content-wrapper">
                                   <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Передайте свои чувства цветами</h1>
                                   <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: larger">Что отличает Каталея от других, так это то, что все, что мы делаем, имеет индивидуальный подход. От букетов до подарков, мы поможем вам показать, что вы заботитесь о близких.</p>
                                   <div class="carousel-content-btns">
                                       <a href="{{ route('main.index') }}" class="btn btn-success"> Ассортимент</a>
                                       @auth()
                                       <a href="{{ route('personal.main.main') }}" class="btn btn-secondary">Личный кабинет</a>
                                       @endauth
                                       @guest()
                                       <a href="{{ route('personal.main.main') }}" class="btn btn-secondary">Войти</a>
                                       @endguest
                                    </div>
                               </div>
                               <div class="col-md-6 carousel-img-wrapper mb-5">
                                   <img src=" {{ asset('assets/images/homepage1.jpg') }} " alt="carousel-img" class="img-fluid" width="480px" height="480px">
                               </div>
                           </div>
                       </div>
                       <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 carousel-content-wrapper">
                                    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Найдите подходящий подарок</h1>
                                    <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: larger">Команда Каталея стремится предоставить вам цветы, растения и подарочные корзины высочайшего качества по самой справедливой цене. Каждый клиент очень важен для нас, и мы стремимся уделить максимальное профессиональное внимание каждому заказу. Весь наш персонал стремится обеспечить высочайший уровень обслуживания клиентов.</p>
                                    <div class="carousel-content-btns">
                                       <a href="{{ route('main.index') }}" class="btn btn-success"> Ассортимент</a>
                                       @auth()
                                       <a href="{{ route('personal.main.main') }}" class="btn btn-secondary">Личный кабинет</a>
                                       @endauth
                                       @guest()
                                       <a href="{{ route('personal.main.main') }}" class="btn btn-secondary">Войти</a>
                                       @endguest
                                    </div>
                                </div>
                                <div class="col-md-6 carousel-img-wrapper mb-5 pb-1">
                                    <img src="{{ asset('assets/images/homepage2.jpg') }}" alt="carousel-img" class="img-fluid" width="480px" height="480px">
                                </div>
                            </div>
                       </div>
                       <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 carousel-content-wrapper">
                                    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Доставка с заботой и вниманием</h1>
                                    <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: larger">Каждый наш заказ профессионально оформляется, упаковывается и безопасно доставляется с написанной от руки открыткой... в тот день, когда вам это необходимо.</p>
                                    <div class="carousel-content-btns">
                                       <a href="{{ route('main.index') }}" class="btn btn-success">Ассортимент</a>
                                       @auth()
                                       <a href="{{ route('personal.main.main') }}" class="btn btn-secondary">Личный кабинет</a>
                                       @endauth
                                       @guest()
                                       <a href="{{ route('personal.main.main') }}" class="btn btn-secondary">Войти</a>
                                       @endguest
                                    </div>
                                </div>
                                <div class="col-md-6 carousel-img-wrapper mb-5">
                                    <img src="{{ asset('assets/images/homepage3dop.png') }}" alt="carousel-img" class="img-fluid" width="480px" height="480px">
                                </div>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </header>

    <main>
        <br>
        <br>
        <section class="edica-landing-section edica-landing-services">
            <div class="container">
                {{-- <h4 class="edica-landing-section-subtitle">Service We Offer</h4>
                <h2 class="edica-landing-section-title">What features you will <br> Get from App.</h2> --}}
                <div class="row">
                    <div class="col-md-6 landing-service-card" data-aos="fade-right">
                        <img src="{{ asset('assets/images/w1pic.png') }}" alt="card img" class="img-fluid service-card-img" width="165px">
                        <h4 class="service-card-title">Лучшие по дизайну</h4>
                        <p class="service-card-description">Наша философия дизайна всегда заключалась в создании букетов такого типа, которые мы хотели бы получать сами.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-left">
                        <img src="{{ asset('assets/images/w2pic.png') }}" alt="card img" class="img-fluid service-card-img" width="165px">
                        <h4 class="service-card-title">Фото букета до доставки</h4>
                        <p class="service-card-description"> Мы сделаем фото букета, подарков перед доставкой и отправим вам по адресу электронной почты или через WatsApp, Viber.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-up">
                        <img src="{{ asset('assets/images/w3picnew.png') }}" alt="card img" class="img-fluid service-card-img" width="155px">
                        <h4 class="service-card-title">Доставляем быстро и безопасно</h4>
                        <p class="service-card-description">Мы не просто создаем наши композиции так, чтобы они поражали воображение - мы создаем их так, чтобы они доставлялись прямо к вам или к порогу вашего получателя в лучшем виде.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-up">
                        <br>
                        <img src="{{ asset('assets/images/w4dop.png') }}" alt="card img" class="img-fluid service-card-img" width="125px">
                        <br>
                        <h4 class="service-card-title">Дадим рекомендации по уходу за цветами</h4>
                        <p class="service-card-description">Прежде чем вы получите свой букет, стоит уделить время тому, чтобы узнать, как ухаживать за этими новыми растениями. Хотя многие цветы и растения требуют одинакового ухода, некоторым необходимы уникальные методы. Мы дадим вам инструкции об основах ухода за вашим букетом, чтобы растения дольше радовали глаз.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="edica-landing-section edica-landing-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up-right">
                        <h4 class="edica-landing-section-subtitle-alt">О НАС</h4>
                        <h2 class="edica-landing-section-title">Более 10 лет радуем восхитительными композициями.</h2>
                        <p>Лучшие цветочные композиции столь же уникальны и особенны, как и люди, которым вы хотите их отправить. Наши флористы гарантируют, что каждый раз, когда вы заказываете цветы у Каталея, вы и ваши близкие получаете созданный с любовью праздник природной красоты.</p>
                        <ul class="landing-about-list">
                            <li>Лучшие флористы</li>
                            <li>Уникальные букеты</li>
                            <li>Мы создаем сообщество любителей цветов</li>
                        </ul>
                    </div>
                    <div class="col-md-6 pl-5" data-aos="fade-up-left">
                        <img src="{{ asset('assets/images/florist.png') }}" width="468px" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="edica-landing-section edica-landing-testimonials" data-aos="fade-up">
        <div class="container" style="height: 555px;">
            <div id="edicaLandingTestimonialCarousel" class="carousel slide landing-testimonial-carousel" data-ride="carousel">
                <div class="text-center py-4">
                    <img src="assets/images/quote.svg" alt="quote">
                </div>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <blockquote class="testimonial">
                            <p class="mb-0">“Никогда еще я не был в восторге” </p>
                        </blockquote>
                            <p class="mb-5">Каждый раз, когда я заказываю в Каталея, мои получатели принимают самые удивительные, свежие, искусные, красивые цветы на планете. Ни один другой флорист не сравнится с ними. Доставка осуществляется вовремя. Продуманная упаковка гарантирует свежесть букетов. Цветы великолепны и хранятся долго. Я являюсь постоянным вашим клиентом с самого начала; никогда я не был в восторге.</p>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="testimonial">
                            <p class="mb-0">“Лучше всех ожиданий” </p>
                        </blockquote>
                            <p class="mb-5">Каталея сделала все возможное для моего корпоративного мероприятия. Их организация была не только безупречной, а лучше, чем я просил, но и их команда невероятно оперативно реагировала на мои (многочисленные) просьбы, они работали с моим графиком доставки поздно вечером и очень рано утром и были невероятно гибкими при внесении изменений в последнюю минуту. Мы очень, очень настоятельно рекомендуем их!</p>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="testimonial">
                            <p class="mb-0">“Букет более восхитительный в реальной жизни!”</p>
                        </blockquote>
                            <p class="mb-5">Моя девшука ПОЛЮБИЛА свои цветы и была в восторге от них... она соблюдала инструкцию по уходу, чтобы они оставались красивыми и такими, какими они приехали! Она прислала мне фотографию, и вживую они оказались еще красивее, чем на сайте.</p>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="testimonial">
                            <p class="mb-0">“Лучший выбор для отправки подарка близкому человеку!” </p>
                        </blockquote>
                            <p class="mb-5">Какое облегчение знать, что каждый раз, когда я заказываю цветы, композиция будет потрясающей! Качество и красота цветов - это сочетание, которое соответствует цене. Спасибо вам за все, что вы делаете!</p>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="testimonial">
                            <p class="mb-0">“Обслуживание и результат выше всех похвал!” </p>
                        </blockquote>
                            <p class="mb-5">Моя подруга прислала мне фотографию цветов, которые я ей заказала. И она, и я были очень довольны результатом и вашим обслуживанием. Большое вам спасибо за то, что так профессионально обработали мой заказ.</p>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="0"  class="active">
                        <img src="assets/images/oval-copy-3.png" alt="avatar">
                        <div class="user-details">
                            <h6>Кирилл</h6>
                            <p>Заказ от 17.09.2023</p>
                        </div>
                    </li>
                    <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="1">
                        <img src="assets/images/oval-copy-4.png" alt="avatar">
                        <div class="user-details">
                            <h6>Степан</h6>
                            <p>Заказ от 23.02.2023</p>
                        </div>
                    </li>
                    <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="2">
                        <img src="assets/images/oval.png" alt="avatar">
                        <div class="user-details">
                            <h6>Руслан</h6>
                            <p>Заказ от 09.07.2023</p>
                        </div>

                    </li>
                    <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="3">
                        <img src="assets/images/oval-copy.png" alt="avatar">
                        <div class="user-details">
                            <h6>Андрей</h6>
                            <p>Заказ от 11.11.2023</p>
                        </div>
                    </li>
                    <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="4">
                        <img src="assets/images/oval-copy-2.png" alt="avatar">
                        <div class="user-details">
                            <h6>Дмитрий</h6>
                            <p>Заказ от 14.02.2023</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        </section>

        {{-- Для категорий в товарах --}}
        {{-- <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <h4 class="edica-landing-section-subtitle" data-aos="fade-up">Blog posts</h4>
                <h2 class="edica-landing-section-title" data-aos="fade-up">Check our app latest blog post <br> for more update.</h2>
                <div class="row">
                    <div class="col-md-4 landing-blog-post" data-aos="fade-right">
                        <img src="assets/images/rectangle.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-up">
                        <img src="assets/images/rectangle-copy.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-left">
                        <img src="assets/images/rectangle-copy-2.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                </div>
            </div>
        </section> --}}


    <section class="edica-landing-section edica-landing-clients">
        <div class="container">
            <h4 class="edica-landing-section-subtitle-alt">ОФОРМИТЕ ЗАКАЗ ОНЛАЙН ИЛИ СВЯЖИТЕСЬ С НАМИ УДОБНЫМ ДЛЯ ВАС СПОСОБОМ</h4>
            <div class="partners-wrapper d-flex justify-content-center">
                <img src="{{ asset('assets/images/tgha1.png') }}" width="80" alt="client logo" data-aos="flip-right" data-aos-delay="300" style="margin-right: 59px">
                <img src="{{ asset('assets/images/vka1.png') }}" width="80" alt="client logo" data-aos="flip-right" data-aos-delay="550" style="margin-right: 59px">
                <img src="{{ asset('assets/images/v1bs.png') }}" width="80" alt="client logo" data-aos="flip-right" data-aos-delay="800">
                <img src="{{ asset('assets/images/wapps1.png') }}" width="150" height="80" alt="client logo" data-aos="flip-right" data-aos-delay="1050" style="padding: 0 0 0 0; margin-top: 30px">
                <img src="{{ asset('assets/images/mail1s.png') }}" width="80" height="75" data-aos="flip-right" data-aos-delay="1300" style="margin-top: 33px">
            </div>
        </div>
    </section>

        {{-- класс для стрелок --}}
        {{-- <section class="edica-landing-section edica-landing-blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-1 mb-4 mb-md-0" data-aos="fade-right">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Ассортимент</h2>
                            <a href="#!" class="post-link">Перейти</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-2" data-aos="fade-left">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Ваш личный кабинет</h2>
                            <a href="#!" class="post-link">Перейти</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    </main>
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: 500">КАТАЛЕЯ</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success">Ассортимент</button>
                    <button class="btn btn-success">Личный кабинет</button>
                </div>
                <br>
                <p class="banner-text">Мы обещаем, что отправка и получение наших подарков будет удовольствием.</p>
            </div>
        </div>
    </section>
    <footer class="edica-footer" style="background-image: url({{ asset('assets/images/bckgr.jpeg') }}); background-size: cover;" data-aos="fade-up">
        <div class="container col-md-6" style="background-color: #fff3ee; color: black;">
            <div class="row footer-widget-area pb-0">
                <div class="col-md-3 mt-3">
                    <a href="{{ route('home') }}" class="footer-brand-wrapper">
                        <img src="{{ asset('assets/images/logokata1.png') }}" alt="logo" width="auto" height="auto">
                    </a>
                    <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Мы предлагаем услуги по организации небольших и крупномасштабных мероприятий, букеты онлайн и в магазине, свадебные цветы.
                    </p>
                    <p class="contact-details" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #2e937a; font-size: larger">hello@kataleya.com</p>
                    <p class="contact-details" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #2e937a; font-size: larger">+7 (904) 270-35-56</p>
                    <nav class="footer-social-links">
                        <a href="#!"><i class="fab fa-vk" style="font-size: xx-large; color: slateblue"></i></a>
                        <a href="#!"><i class="fab fa-whatsapp" style="font-size: xx-large; color: springgreen"></i></a>
                        <a href="#!"><i class="fab fa-viber" style="font-size: xx-large; color: blueviolet"></i></a>
                        <a href="#!"><i class="fab fa-telegram" style="font-size: xx-large; color: black"></i></a>
                    </nav>
                </div>
                <div class="col-md-3 mt-5 ml-5">
                    <nav class="footer-nav">
                        <p class="nav-link mb-0"><strong>Ссылки</strong></p>
                        <a href="#!" class="nav-link">Главная</a>
                        <a href="#!" class="nav-link">Ассортимент</a>
                        <a href="#!" class="nav-link">Категории</a>
                        <a href="#!" class="nav-link">Личный кабинет</a>
                    </nav>
                </div>
                <div class="col-md-3 mt-5">
                    <nav class="footer-nav">
                        <p class="nav-link mb-0"><strong>Информация</strong></p>
                        <a href="#!" class="nav-link">Контакты</a>
                        <a href="#!" class="nav-link">Соглашение</a>
                        <a href="#!" class="nav-link">Конфиденциальность</a>
                    </nav>
                </div>
            </div>
            <div class="footer-bottom-content d-flex justify-content-end mt-0 pt-0">
                {{-- <nav class="nav footer-bottom-nav">
                    <a href="#!">Privacy & Policy</a>
                    <a href="#!">Terms</a>
                    <a href="#!">Site Map</a>
                </nav> --}}
                <p class="mb-0" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">© Каталея. <?php echo date('Y'); ?>. Все права защищены.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        AOS.init({
            duration: 2000
        });
      </script>
</body>
</html>
