@extends('personal.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0 mr-2">Заказ номер: {{ $order->id }}</h1>

            {{-- <a href="{{ route('personal.order.edit', $order->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{ route('personal.order.delete', $order->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="border-0 bg-transparent">
                    <i class="fas fa-trash text-danger" role="button"></i>
                </button>
            </form> --}}

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
            <div class="card">
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <tbody>
                      <tr aria-expanded="false">
                        <td>Номер заказа</td>
                        <td>{{ $order->id }}</td>
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
                        <td>Адрес доставки</td>
                        <td>{{ $order->order_address }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Номер телефона</td>
                        <td>{{ $order->order_phone_number }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Комментарий</td>
                        <td>{{ $order->order_comment }}</td>
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

            <div>
                <p style="margin-right: 10px;">Есть вопросы по заказу? <a href="{{ route('records') }}" style="color: #2e937a"> свяжитесь с нами удобным для вас способом</p>
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
