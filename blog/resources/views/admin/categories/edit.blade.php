@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$category->title}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Изменение категорию</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.category.update',$category->id)}}"method="POST" class="col-4">
                        @csrf
                        @method('PATCH')
                            <input type="text" value="{{$category->title}}" class="form-control"name='title'placeholder="Название категории">
                            @error('title')
                            <p>{{ $message }}</p>
                            @enderror
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mt-4">Изменить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
