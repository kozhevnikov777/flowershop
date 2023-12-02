@extends('main.main_layout')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>

        {{-- <section class="featured-posts-section">
            <ul>
                @foreach ($categories as $category)
                <li><a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a></li>
                <br>
                @endforeach
            </ul>
        </section> --}}

        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-md-3 landing-blog-post" style="padding-bottom: 55px;" data-aos="fade-right">
                        <img src="{{ 'storage/'.$category->preview_image }}" alt="blog post" width="255px" height="255px" class="blog-post-thumbnail">
                        <p class="blog-post-category" style="height: 59px; margin-bottom: 10px">{{ $category->description }}</p>
                        <h4 class="blog-post-title">{{ $category->title }}</h4>
                        <a href="{{ route('category.post.index', $category->id) }}" class="blog-post-link">Просмотреть</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
    <br>
</main>
@endsection
