@extends('admin.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Оформление заказа</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.order.main') }}">Назад</a></li>
              <li class="breadcrumb-item active">Корзина</li>
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
            <form action="{{ route('admin.order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group w-25" hidden>
                    <label>Номер</label>
                    <input type="text" class="form-control" name="user_id" placeholder="user_id" value="{{ auth()->user()->id }}">
                    @error('user_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group w-25" hidden>
                    <textarea class="form-control" name="order_name" readonly style="max-height: 50em;">
                    @foreach(auth()->user()->LikedPosts as $likedPost) {{$likedPost->title}}; &nbsp;
                    @endforeach
                    </textarea>
                    @error('order_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                    {{-- order_qty --}}

                <div class="form-group w-50">
                @foreach(auth()->user()->LikedPosts as $likedPost)
                <td>
                    <img src="{{ asset('storage/' . $likedPost->preview_image) }}" alt="preview_image" class="w-25 mt-2">
                    <p>Товар: {{$likedPost->title}}</p>
                    <p>Стоимость: {{$likedPost->price}}</p>


                <p>
                    @foreach ($puls as $pul)
                    @if ($pul->post_id === $likedPost->id)
                    Количество:    {{ $pul->count }} шт.
                    @endif
                    @endforeach
                </p>

                </td>
                @endforeach
                </div>

                <div class="form-group w-25">
                    <input type="text" class="form-control" name="order_address" placeholder="Адрес" value="{{ old('order_address') }}">
                    @error('order_address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <input type="text" class="form-control" name="order_phone_number" placeholder="Номер телефона" value="{{ old('order_phone_number') }}">
                    @error('order_phone_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <input type="text" class="form-control" name="order_comment" placeholder="Комментарий" value="{{ old('order_comment') }}">
                    @error('order_comment')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group w-25">
                    К оплате:
                    <input type="text" class="form-control w-25" name="order_qty" multiple="multiple" placeholder="К оплате" readonly value={{ $orderQty }}>
                    @error('order_qty')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Заказать">
                </div>
            </form>
            </div>
            <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
