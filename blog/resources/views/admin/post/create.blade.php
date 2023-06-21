@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить пост</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <form action="{{ route('admin.post.store') }}"method="POST" class="col-8"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control"name='title'placeholder="Название поста">
                            @error('title')
                                <p>{{ $message }}</p>
                            @enderror
                            <textarea id="summernote" name="content"></textarea>
                            @error('content')
                                <p>{{ $message }}</p>
                            @enderror
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="main_img" type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите картинку</label>
                                </div>
                                @error('main_img')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="preview_img" type="file" class="custom-file-input"
                                        id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите превью</label>
                                    @error('preview_img')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleSelectBorderWidth2">Выберите категорию </label>
                                <select name="category_id" class="custom-select form-control-border border-width-2"
                                    id="exampleSelectBorderWidth2">

                                    @foreach ($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="select-form">Тэги</label>
                            <div class="form-group ">
                                <select name="tag_ids[]" id="select-form" class="select2 w-50" multiple="multiple"
                                    data-placeholder="Выберите тэги">
                                    @foreach ($tags as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mt-4">Добавить</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
    </section>
    </div>
@endsection
