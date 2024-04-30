@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

            <form action="/" method="POST" class="mt-4 p-4">
                @csrf
                <div class="form-group m-3">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group m-3">
                    <label for="description">Detail</label>
                    <textarea name="detail" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group m-3">
                    <input type="submit" class="btn btn-primary float-end" value="Create">
                </div>
                </div>

            </form>
            </div>
            @foreach($todo as $todos)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body " style="height: 16.7rem">
                            <h5 class="card-title border-bottom">{{ $todos->title }}</h5>
                            <p class="card-text">{{ $todos->detail }}</p>
                        </div>
                            <div class="d-flex justify-content-evenly ">
                                <a href="delete/{{$todos->id}}"><span class="btn btn-danger">Delete</span></a>
                                <form action="edit/{{ $todos->id }}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-warning mb-4" value="Edit">
                                </form>
                            </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection

@section('link')
    {{ $todo->links() }}

@endsection
