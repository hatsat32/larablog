@extends('layouts.public')

@section('title', 'LaraBlog')

@section('content_header')
@endsection

@section('content')
  <div class="card">
    <div class="card-body">
      <h1 class="text-center"><b>{{ $yazi->baslik }}</b></h1>
      <p class="card-text">{{ $yazi->icerik }}</p>
    </div>
  </div>
@endsection
