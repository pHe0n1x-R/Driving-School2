
@include('includes.header')

 @extends('student')

 @section('content')
     


<form action="{{ route('picturestore.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="form-group">
        <label for="exampleFormControlFile1"> Example picture input </label>
        <input type="file" class="form-control-file" name="image">
        <input type="submit" value="UPLOAD">
    </div>
</form>

@endsection

