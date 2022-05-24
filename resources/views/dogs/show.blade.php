@extends('template.base')
@section('titleName', $titleName)
@section('pageMain')
<section class="show">
    <div class="card">
        <img src="{{$dog->image}}" alt="{{$dog->name}}">
        <h2> {{$dog->name}} </h2>
        <p> {{$dog->description}} </p>
    </div>
</section>

@endsection
