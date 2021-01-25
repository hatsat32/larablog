@extends('layouts.public')

@section('title', 'LaraBlog')

@section('content_header')
@endsection

@section('content')
  @foreach ($yazilar as $y)
    <div class="card">
      <div class="card-body">
        <a href="/yazi/{{ $y->slug }}">
          <h5 class="card-title">{{ $y->baslik }}</h5>
        </a>

        <p class="card-text">{{ $y->icerik }}</p>
      </div>
    </div>
  @endforeach
@endsection
