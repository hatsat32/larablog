@extends('layouts.dashboard')

@section('title', 'Admin Kategori Oluştur')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="/admin/kategoriler/{{ $kategori->id }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="isim">İsim</label>
            <input type="text" class="form-control" id="isim" name="isim"
              value="{{ $kategori->isim }}"
            >
          </div>
          <div class="form-group">
            <label for="aciklama">Açıklama</label>
            <input type="text" class="form-control" id="aciklama" name="aciklama"
              value="{{ $kategori->aciklama }}"
            >
          </div>
          <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
        </form>

        <hr>

        <form action="/admin/kategoriler/{{ $kategori->id }}/sil" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger btn-block">SİL</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
