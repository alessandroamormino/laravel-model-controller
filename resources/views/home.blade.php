@extends('layout/main')

@section('content')
<main>
  <h1>Movies</h1>
  <div class="container">
    <div class="row g-3">
      @foreach($movies as $singleMovie)
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$singleMovie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$singleMovie->original_title}}</h6>
              <em class="card-text">{{$singleMovie->nationality}}</em><br>
              <span class="card-text">{{$singleMovie->date}}</span><br>
              <b class="card-text">{{$singleMovie->vote}}</b>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</main>
@endsection