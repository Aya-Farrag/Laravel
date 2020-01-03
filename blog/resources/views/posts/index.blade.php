@extends('layouts.app')

@section('content')
    <br>
    <a class='btn btn-success mt-5  mb-3 ml-3' href="{{route('posts.create')}}">create Post </a> 
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Creted at</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $index => $value)  
    <tr>
    <th scope="row">{{$value['id']}}</th>
        <td>{{$value['title']}}</td>
        <td>{{$value['created_at']->format('y-m-d')}}</td>
        <td><a class='btn btn-info ' href="{{route('posts.show',['post' => $value['id'] ])}}">View </a>
        <a class='btn btn-primary' href="{{route('posts.edit',['post' => $value['id'] ])}}">Edit </a>
        <!-- <a class='btn btn-primary' href="{{route('posts.show',['post' => $value['id'] ])}}">Delete </a> -->
        <form method="post" class="d-inline" action="{{route('posts.destroy',['post' => $value['id'] ])}}"> 
        <input type='text' hidden name="_token" value='{{csrf_token()}}'>
        <input type='text' hidden name="_method" value='DELETE'>
        <button class='btn btn-danger' onclick="return confirm('Are you sure?')" type="submit" >Delete </button>
</form>
      
      </td>
      </tr>
      @endforeach

    </tbody>
  </table>

</body>
</html>