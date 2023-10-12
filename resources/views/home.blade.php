@extends('layouts.app')

@section('main-content')
<section class="contianer mt-5">
   <div class="row g-4">
    @foreach($comics as $comic)
    <div class="col-md-2">
        <div class="card">
            <div class="d-flex justify-content-center">
                <img class="custom-img" src="{{$comic ['thumb'] }}" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <h4>{{$comic ['title'] }}</h4>
            </div>
        </div>
    </div>
    @endforeach
   </div>
</section>
@endsection