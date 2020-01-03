<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')
@section('content')

<h1>Create Post</h1>
    <form method="POST" action="/posts">
        <input type='text' hidden name="_token" value='{{csrf_token()}}'>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="content"  row=20 class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
</textarea>
        </div>

     
        <button type="submit" class="btn btn-success">Create</button>
      </form>
    
</body>
</html>