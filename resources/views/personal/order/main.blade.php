@extends('personal.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Заказы</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">itnotepad.ru</a></li>
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

            {{-- <div class="col-1 mb-3">
                <a href="{{ route('personal.order.create') }}" class="btn btn-primary">Добавить</a>
            </div> --}}

            <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Все заказы</h3>
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
                        <th>Номер заказа</th>
                        <th>Дата заказа</th>
                        <th>Товар</th>
                        <th colspan="3" class="text-center">Действия</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                      @if($order->user_id == auth()->user()->id)
                      <tr aria-expanded="false">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->order_name }}</td>
                        <td class="text-center"><a href="{{ route('personal.order.show', $order->id) }}"><i class="far fa-eye"></i></a></td>

                        {{-- <td class="text-center"><a href="{{ route('personal.order.edit', $order->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                        <td class="text-center">
                            <form action="{{ route('personal.order.delete', $order->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger" role="button"></i>
                                </button>
                            </form>
                        </td> --}}

                      </tr>
                      @endif
                      @endforeach
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
