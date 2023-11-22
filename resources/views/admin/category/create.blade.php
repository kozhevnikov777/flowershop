@extends('admin.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.category.main') }}">Назад</a></li>
              <li class="breadcrumb-item active">Категории</li>
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
            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data" class="w-25">
                @csrf
                <div class="form-group">
                    <label>Название</label>
                    <input type="text" class="form-control" name="title" placeholder="Название категории">
                    @error('title')
                        <div class="text-danger">Это поле необходимо для заполнения</div>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <input type="text" class="form-control" name="description" placeholder="Описание" value="{{ old('description') }}">
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="exampleInputFile">Добавить превью</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="preview_image">
                        <label class="custom-file-label">Выберите изображение</label>
                      </div>
                      <!--
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                      -->
                    </div>
                    @error('preview_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
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
