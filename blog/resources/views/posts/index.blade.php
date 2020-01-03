<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <a class='btn btn-success my-3 ml-3' href="{{route('posts.create')}}">create Post </a> 
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