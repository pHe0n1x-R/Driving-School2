
@extends('partials.layout') 
@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="card-title"> Import data Example - Student </h2>
    </div>

    <form action="{{route('students.import')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="file"> Upload File </label>
        <input type="file" name="file" id="">
        <button class="btn btn-primary" type="submit">
            Import
        </button>


    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
    </form>


    @endsection