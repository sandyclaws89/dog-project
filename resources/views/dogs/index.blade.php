@extends('template.base')
@section('titleName', 'Dog\'s list')
@section('pageMain')
<section class="index">
    <div class="card-container">
    @foreach ($dogs as $dog)
        <div class="card">
            <a href="{{ route('dogs.show', $dog->id)}}">
                <h2> {{$dog->name}} </h2>
            </a>
            <img src="{{$dog->image}}" alt="{{$dog->name}}">

        </div>
    @endforeach
    </div>
    <div class="paginate">
        {{$dogs->links()}}
    </div>
</section>
@endsection
