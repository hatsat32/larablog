@extends('layouts.dashboard')

@section('title', 'Admin Kategori Oluştur')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="/admin/kullanicilar/{{ $user->id }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">İsim</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
          </div>
          {{-- <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div> --}}
          <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
        </form>

        <hr>

        <form action="/admin/kullanicilar/{{ $user->id }}/sil" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger btn-block">SİL</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="/admin/kullanicilar/{{ $user->id }}/parola" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Parolayı Değiştir</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
