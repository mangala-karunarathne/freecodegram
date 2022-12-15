@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-3 p-5" >
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Vanamo_Logo.svg/2048px-Vanamo_Logo.svg.png"; width="100px" height="100px" alt="Logo">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{$data[0]->title?? "N/A"}}</h1></div>
            <div class="d-flex">
                <div class="p-3"><strong>153</strong> posts</div>
                <div class="p-3"><strong>23K</strong> followers</div>
                <div class="p-3"><strong>212</strong> following</div>
                </div>   
            <div class="pt-1 font-weight-bold">{{$data[0]->title}}</div>
            <div>{{$data[0]->description ?? "N/A"}}</div>
            <div><a href="#">{{$data[0]->url ?? "N/A"}}</a></div>
        </div>
    </div>
    <div class="row" class="pt-4">
        <div class="col-4">
            <img src="/images/1.jpg" alt="Image_IT1" class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="/images/2.jpg" alt="Image_IT2" class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="/images/3.jpg" alt="Image_IT3" class="w-100 h-100">
        </div>
    </div>
</div>
@endsection
  