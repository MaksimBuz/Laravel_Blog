@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $tag->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.tag.update', $tag->id) }}"method="POST" class="col-4">
                            @csrf
                            @method('PATCH')
                            <input type="text" value="{{$tag->title}}" class="form-control"name='title'placeholder="Название тэга">
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
