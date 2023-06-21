@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $user->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.user.update', $user->id) }}"method="POST" class="col-4">
                            @csrf
                            @method('PATCH')
                            <input value="{{ $user->name }}" type="text"   class="form-control"name='name'placeholder="Имя пользователя">
                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mt-4">Изменить</button>
                            </div>
                            <div class="form-group ">
                                <select name="role" id="select-form" class="select2 w-50" multiple="multiple"
                                    data-placeholder="Выберите роль">
                                    @foreach ($roles as $id => $item)
                                        <option value="{{ $id }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
