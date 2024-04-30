@extends('layouts.app')

<form action="/{{ $todo->id }}/update" method="post" class="mt-4 p-4">
    @csrf
    @method('patch')
    <div class="form-group m-3">
        <label for="name">Title</label>
        <input type="text" class="form-control" value="{{$todo->title}}" name="title">
    </div>
    <div class="form-group m-3">
        <label for="description">Detail</label>
        <textarea class="form-control" name="detail" rows="3"> {{$todo->detail}} </textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Update">
    </div>
</form>
