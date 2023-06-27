@extends('layouts.frontend')
@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <style>
.gallery{
    margin:10px,50px;
}
.gallary img{
    transition:1s;
    padding:15px;
    width:200px;
}
.gallery img:hover{
    filter: grayscale(100%);
    transform: scale(1:1);
}

body {
  font-family: "Trirong", serif;
}

.back{
    background-color:#80ced6;
}

        </style>

<div class="back">
<h1 class="font-effect-shadow-multiple text-center p-3">Photo Gallery</h1>
    <div class="gallery">
        <a href="{{ URL('gallary/7.jpg')}}"> <img src="{{ URL('gallary/7.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/8.jpg')}}"> <img src="{{ URL('gallary/8.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/9.jpg')}}"> <img src="{{ URL('gallary/9.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/6.jpg')}}"> <img src="{{ URL('gallary/6.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/1.jpg')}}"> <img src="{{ URL('gallary/1.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/2.jpg')}}"> <img src="{{ URL('gallary/2.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/3.jpg')}}"> <img src="{{ URL('gallary/3.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/4.jpg')}}"> <img src="{{ URL('gallary/4.jpg')}}"width="300" 
     height="300"></a>
        <a href="{{ URL('gallary/5.jpg')}}"> <img src="{{ URL('gallary/5.jpg')}}"width="300" 
     height="300"></a>
 </div>
     @endsection