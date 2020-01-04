
@extends('layouts.app')
@section('content')


<br><br><br>
<h3>Update Post</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="/posts/{{$post->id}}">
        <input type='text' hidden name="_token" value='{{csrf_token()}}'>
        <input type='text' hidden name="_method" value='PUT'>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value='{{$post->title}}'>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="content"  row=20 class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">{{$post->content}}
</textarea>
        </div>

     
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

@endsection