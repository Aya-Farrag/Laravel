
@extends('layouts.app')
@section('content')



<h3>Update Post</h3>
{{$post->title}}
{{$post->content}}


<form method="POST" action="/posts/{{$post->id}}">
        <input type='text' hidden name="_token" value='{{csrf_token()}}'>
        <input type='text' hidden name="_method" value='PUT'>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value='{{$post->title}}'>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="content"  row=20 class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder='{{$post->content}}'>
</textarea>
        </div>

     
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

</body>
</html>