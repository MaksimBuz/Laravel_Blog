@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{$item->id}}
                                        </td>
                                        <td>
                                            {{$item->title}}
                                        </td>
                                        <td>
                                           <a href="{{route('admin.post.show',$item->id)}}"> <i class="far fa-eye"></i></a>
                                        </td>
                                        <td>
                                           <a href="{{route('admin.post.edit',$item->id)}}"> <i class="fa fa-pen"></i></i></a>
                                            </td>
                                            <td>
                                            <form action="{{route('admin.post.destroy',$item->id)}}" method="POST">
                                                @csrf
                                               @method('delete')
                                               <button type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('admin.post.create') }}"> <button type="button"
                                class="btn btn-primary">Создать</button></a>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
