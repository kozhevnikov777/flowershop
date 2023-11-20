@extends('main.main_layout')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" style="color: green" data-aos="fade-down">Ассортимент</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
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
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-bottom: 50px;">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-4 sidebar" data-aos="fade-right">
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
                </div>
                <div class="col-md-8">
                    <section>
                        <h4 class="widget-title mt-2 mb-3" data-aos="fade-up">Наши букеты</h4>
                        <div class="row blog-post-row">
                            @foreach ($randomPosts as $post)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
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
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
