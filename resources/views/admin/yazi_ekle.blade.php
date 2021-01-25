@extends('layouts.dashboard')

@section('title', 'Admin Yazı Oluştur')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="/admin/yazilar" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="isim">Başlık</label>
            <input type="text" class="form-control" id="isim" name="baslik">
          </div>
          <div class="form-group">
            <label for="icerik">İçerik</label>
            <textarea class="form-control" name="icerik" id="icerik" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
