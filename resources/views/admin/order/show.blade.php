@extends('admin.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0 mr-2">{{ $order->order_name }}</h1>
            <a href="{{ route('admin.order.edit', $order->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{ route('admin.order.delete', $order->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="border-0 bg-transparent">
                    <i class="fas fa-trash text-danger" role="button"></i>
                </button>
            </form>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.order.main') }}">Назад</a></li>
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
            <div class="card">
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <tbody>
                      <tr aria-expanded="false">
                        <td>Номер</td>
                        <td>{{ $order->id }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Заказчик</td>
                        <td>
                        @foreach ($users as $user)
                        @if ($order->user_id == $user->id)
                        <a href="{{ route('admin.user.show', $user->id) }}" class="blog-post-permalink">{{ $order->user->name }}
                        @endif
                        @endforeach
                        </td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Дата заказа</td>
                        <td>{{ $order->created_at }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Товар</td>
                        <td>{{ $order->order_name }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Комментарий</td>
                        <td>{{ $order->order_comment }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Адрес</td>
                        <td>{{ $order->order_address }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Номер телефона</td>
                        <td>{{ $order->order_phone_number }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Стоимость</td>
                        <td>{{ $order->order_qty }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
