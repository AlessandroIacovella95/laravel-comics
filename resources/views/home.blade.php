@extends('layouts.app')

@section('main-content')
<section>
    <div class="jumbtron">
        <img src="{{Vite::asset('public\images\jumbotron.jpg')}}" alt="">
    </div>
    <div class="container mt-5">
        <div class="current">
            <span>CURRENT SERIES</span>
        </div>
       <div class="row g-4">
        @foreach($comics as $comic)
        <div class="col-md-2">
            <div class="card_comics">
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
       <div class="button_comics">
          <span>LOAD MORE</span>
      </div>
    </div>
</section>
@endsection
