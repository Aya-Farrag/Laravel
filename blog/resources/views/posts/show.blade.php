
@extends('layouts.app')
@section('content')


<h1 class='bg-light mb-0'> post info <hr> </h1> 

<h3 > Title : </h3> 
<p> {{$post->title}} </p>
<h3> Description : </h3> 
<p> {{$post->content}} </p>

@endsection