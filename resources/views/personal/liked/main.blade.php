@extends('personal.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Корзина</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Каталея</a></li>
              <li class="breadcrumb-item active">На сайт</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Все товары</h3>
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Найти...">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Номер товара</th>
                            <th>Название</th>
                            <th>Количество</th>
                            {{-- <th>old - Количество</th> --}}
                            <th>Изображение</th>
                            <th colspan="2" class="text-center">Действия</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($posts as $post)
                          <tr aria-expanded="false">
                            {{-- <td>
                              @foreach (auth()->user()->LikedPosts as $likedPost) <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                {{ $likedPost->title }} ;
                              @endforeach
                            </td> --}}
                            <td>{{ $post->id }}</td>
                            <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                            <td>
                                @foreach ($puls as $pul)
                                @if ($pul->post_id === $post->id)
                                    {{ $pul->count }}
                                @endif
                                @endforeach
                            </td>
                            {{-- <td>
                                <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                    @csrf
                                    <span>{{ $post->liked_users_count }} шт.</span>
                                    <button type="submit" class="border-0 bg-transparent">
                                            <i class="fa{{ auth()->user()->likedPosts->contains($post->id) ? 's' : 'r'}} fa-plus"></i>
                                    </button>
                                </form>
                            </td> --}}
                            <td>
                                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="w-25">
                            </td>
                            <td class="text-center"><a href="{{ route('post.show', $post->id) }}"><i class="far fa-eye"></i></a></td>
                            <td class="text-center">
                                <form action="{{ route('personal.liked.delete', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="fas fa-trash text-danger" role="button"></i>
                                    </button>
                                </form>
                            </td>

                            {{-- <td>
                              @foreach ($lp as $likedPostDetach)
                                @if($likedPostDetach->user_id == auth()->user()->id)
                                {{ $likedPostDetach->id }}
                                @endif
                              @endforeach
                            </td> --}}

                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                      <div class="col-1 mb-0 mt-3 d-flex justify-content-lg-end">
                        <a href="{{ route('personal.order.create') }}" class="btn btn-success">Заказать</a>
                      </div>

                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
      </div>
    </section>
  <!-- /.content-wrapper -->
  </div>
@endsection
