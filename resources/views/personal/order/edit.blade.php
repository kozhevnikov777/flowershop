@extends('personal.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('personal.order.main') }}">Назад</a></li>
              <li class="breadcrumb-item active">Заказы</li>
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
            <form action="{{ route('personal.order.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group w-25">
                    <input type="text" class="form-control" name="order_name" placeholder="Название" value="{{ $order->order_name }}">
                    @error('order_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group w-25">
                    <input type="text" class="form-control" name="order_address" placeholder="Адрес" value="{{ $order->order_address }}">
                    @error('order_address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group w-25">
                    <input type="text" class="form-control" name="order_phone_number" placeholder="Номер телефона" value="{{ $order->order_phone_number }}">
                    @error('order_phone_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group w-25">
                    <input type="text" class="form-control" name="order_comment" placeholder="Комментарий" value="{{ $order->order_comment }}">
                    @error('order_comment')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group w-25">
                    <input type="text" class="form-control" name="user_id" placeholder="user_id" value="{{ $order->user_id }}">
                    @error('user_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Обновить">
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
