@extends('main.main_layout')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
        <section class="featured-posts-section">
            <ul>
                @foreach ($firstcategories as $firstcategory)
                <li><a href="{{ route('firstcategory.post.index', $firstcategory->id) }}">{{ $firstcategory->title }}</a></li>
                <br>
                @endforeach
            </ul>
        </section>
    </div>
    <br>
</main>
@endsection
