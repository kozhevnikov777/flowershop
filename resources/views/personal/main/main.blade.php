@extends('personal.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добро пожаловать, {{ auth()->user()->name }}</h1>
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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>Мои заказы</h4>
                <br>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-th-list"></i>
              </div>
              <a href="{{ route('personal.order.main') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Корзина</h4>
                <br>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-heart"></i>
              </div>
              <a href="{{ route('personal.liked.main') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Комментарии<sup style="font-size: 20px"></sup></h4>
                <br>
                <br>
              </div>
              <div class="icon">
                <i class="far fa-comment"></i>
              </div>
              <a href="{{ route('personal.comment.main') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<div class="container">
    <div class="d-flex justify-content-center" style="margin-top: 25px; margin-bottom: 0px;">
        <img src="{{ asset('assets/images/persmain.png') }}" alt="logo" width="1100px" height="auto">
    </div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
