@extends('admin.layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Панель администратора</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$UserData}}</h3>
                <p>Пользователи</p>
              </div>
              <a href="{{route('admin.user.index')}}" class="small-box-footer">Посмотреть <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$PostData}}</h3>
                <p>Посты</p>
              </div>
              <div class="icon">
              </div>
              <a href="{{route('admin.post.index')}}" class="small-box-footer">Посмотреть  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$CategoryData}}</h3>
                <p>Категории</p>
              </div>
              <div class="icon">
              </div>
              <a href="{{route('admin.category.index')}}" class="small-box-footer">Посмотреть<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$TagData}}</h3>
                <p>Тэги</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{route('admin.tag.index')}}" class="small-box-footer">Посмотреть <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection



