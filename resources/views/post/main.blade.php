@extends('main.main_layout')

@section('content')
    <main class="blog">

        <h1 class="edica-page-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: 300; text-shadow: -1px -1px 30px white, 1px -1px 30px white, -1px 1px 30px white, 1px 1px 30px white; color: black; background-image: url({{ asset('assets/images/bckgr.jpeg') }}); background-size: cover" data-aos="fade-down">Ассортимент</h1>
        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-md-3 landing-blog-post" data-aos="fade-right">
                        <img src="{{ 'storage/'.$category->preview_image }}" alt="blog post" width="255px" height="255px" class="blog-post-thumbnail">
                        <p class="blog-post-category" style="height: 59px; margin-bottom: 10px">{{ $category->description }}</p>
                        <h4 class="blog-post-title">{{ $category->title }}</h4>
                        <a href="{{ route('category.post.index', $category->id) }}" class="blog-post-link">Просмотреть</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- style="background-color: #fff3ee" --}}
        <section class="edica-landing-section edica-landing-blog" style="background-color: #fff3ee; padding-bottom: 0px; margin-bottom: 55px; padding-top: 19px;">
            <div class="container">
            <h4 class="edica-landing-section-subtitle text-center" style="text-align: center; margin-top: 25px; margin-left: 75px; margin-right: 75px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black; padding-bottom: 25px; padding-top: 25px;" data-aos="fade-up">Перед каждым праздником наши замечательные флористы создают актуальные букеты и подарки, которые хотели бы получать они сами. Они надеются, что вы получите от их композиций столько же радости, сколько и они.</h4>
            @foreach ($posts as $post)
            @if ($post->first_category_id == 3)
            <h2 class="edica-landing-section-title d-flex justify-content-center" style="margin-bottom: 30px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: darkgrey; font-weight: 500;" data-aos="fade-up">{{ $post->first_category->title }}</h2>
            @break
            @endif
            @endforeach
            </div>
            <div class="container">
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($posts as $post)
                    @if ($post->first_category_id == 3)
                    <div class="col-md-4 fetured-post blog-post" style="padding-bottom: 0px; margin-bottom: 55px;" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <img src="{{ 'storage/'.$post->preview_image }}" alt="blog post">
                            </a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="blog-post-category">{{ $post->category->title }}</p>
                            {{-- @auth()
                            <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                @csrf
                                <span>{{ $post->liked_users_count }}</span>
                                <button type="submit" class="border-0 bg-transparent">
                                        <i class="fa{{ auth()->user()->likedPosts->contains($post->id) ? 's' : 'r'}} fa-heart"></i>
                                </button>
                            </form>
                            @endauth
                            @guest()
                            <div>
                                <span>{{ $post->liked_users_count }}</span>
                                <i class="far fa-heart"></i>
                            </div>
                            @endguest --}}
                        </div>
                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </section>
            </div>
        </section>
        <div class="container">

            {{-- <section class="featured-posts-section">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <img src="{{ 'storage/'.$post->preview_image }}" alt="blog post">
                            </a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="blog-post-category">{{ $post->category->title }}</p> --}}


                            {{-- не раскомитить!!!
                                @auth()
                            <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                @csrf
                                <span>{{ $post->liked_users_count }}</span>
                                <button type="submit" class="border-0 bg-transparent">
                                        <i class="fa{{ auth()->user()->likedPosts->contains($post->id) ? 's' : 'r'}} fa-heart"></i>
                                </button>
                            </form>
                            @endauth
                            @guest()
                            <div>
                                <span>{{ $post->liked_users_count }}</span>
                                <i class="far fa-heart"></i>
                            </div>
                            @endguest
                            до сюда --}}

                        {{-- </div>
                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-bottom: 50px;">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section> --}}

            <div class="row">

                {{-- <div class="col-md-4 sidebar" data-aos="fade-right">
                    <div class="widget widget-post-list">
                        <div class="row ml-3">
                        <h4 class="widget-title mt-2 mb-3">Подобрать букет</h4>
                        </div class>
                        <div class="container">
                            <ul>Категории
                                @foreach ($categories as $category)
                                <li><a style="color: black" href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                            <ul>Цвета
                                <li>Красный</li>
                                <li>Зеленый</li>
                                <li>Синий</li>
                            </ul>
                            <ul>Цветы
                                <li>Розы</li>
                                <li>Пионы</li>
                                <li>Ромашки</li>
                                <li>Тюльпаны</li>
                                <li>Гвоздики</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

                <div id="target-element" class="col-md-12">
                    <section>
                        <h4 class="widget-title mt-2 mb-3 text-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: black; font-size: 39px; padding-bottom: 17px; font-weight: 500;" data-aos="fade-up">Наша роскошная коллекция</h4>
                        <p class="text-muted text-center" data-aos="fade-up" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                            Наша роскошная коллекция предлагает вам самые красивые, связанные вручную и индивидуально оформленные цветочные букеты на рынке. Эти потрясающие композиции, отобранные из лучших цветов, только что привезенных от наших поставщиков со всего мира, находятся в совершенно уникальном состоянии.
                        </p>
                        <div class="row blog-post-row">
                            @foreach ($allPosts as $post)
                            <div class="col-md-4 blog-post mt-5" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <a href="{{ route('post.show', $post->id) }}">
                                    <img src="{{ 'storage/'.$post->preview_image }}" alt="blog post">
                                    </a>
                                </div>
                                {{-- <p class="blog-post-category">{{ $post->category->title }}</p> --}}
                                <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $post->title }}</h6>
                                </a>
                                <p class="blog-post-category">{{ $post->description }}</p>
                                <p style="font-size: large">
                                    <strong>{{ number_format($post->price, 0, '.', ' ') }}₽</strong>
                                </p>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="mx-auto" style="margin-bottom: 50px;">
                                {{ $allPosts->appends(['scroll' => 'true'])->links() }}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            if (window.location.href.includes('scroll=true')) {
                if (window.location.href.includes('scroll=true')) {
                    var targetElement = document.getElementById('target-element');
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
                }
            }
        });
    </script>
@endsection
