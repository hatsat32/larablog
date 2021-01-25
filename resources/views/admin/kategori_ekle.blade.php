@extends('layouts.dashboard')

@section('title', 'Admin Kategori Oluştur')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="/admin/kategoriler" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="isim">İsim</label>
            <input type="text" class="form-control" id="isim" name="isim">
          </div>
          <div class="form-group">
            <label for="aciklama">Açıklama</label>
            <input type="text" class="form-control" id="aciklama" name="aciklama">
          </div>
          <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
