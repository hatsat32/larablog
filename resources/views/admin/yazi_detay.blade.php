@extends('layouts.dashboard')

@section('title', 'Admin Yazı Detay')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="/admin/yazilar/{{ $yazi->id }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="baslik">Başlık</label>
            <input type="text" class="form-control" id="baslik" name="baslik"
              value="{{ $yazi->baslik }}"
            >
          </div>
          <div class="form-group">
            <label for="slug">Slug</label>
            <input disabled class="form-control" id="slug" value="{{ $yazi->slug }}"
            >
          </div>
          <div class="form-group">
            <label for="icerik">İçerik</label>
            <textarea class="form-control" name="icerik" id="icerik" rows="10"
            >{{ $yazi->icerik }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
        </form>

        <hr>

        <form action="/admin/yazilar/{{ $yazi->id }}/sil" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger btn-block">SİL</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
