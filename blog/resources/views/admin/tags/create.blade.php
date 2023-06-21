@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить тэг</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.tag.store') }}"method="POST" class="col-4">
                            @csrf
                            <input type="text" class="form-control"name='title'placeholder="Название тэга">
                            @error('title')
                                <p>{{ $message }}</p>
                            @enderror
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mt-4">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
