@extends('layouts.dashboard')

@section('title', 'Admin Kategori Oluştur')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kategori listesi</h3>
      </div>
      <div class="card-body table-responsive p-0">
        <div class="m-2">
          <a class="btn btn-primary btn-block" href="/admin/kategoriler/ekle">Kategori Ekle</a>
        </div>
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>id</th>
              <th>isim</th>
              <th>aciklama</th>
              <th>created_at</th>
              <th>updated_at</th>
              <th>Detay</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kategoriler as $k)
            <tr>
              <td>{{ $k->id }}</td>
              <td>{{ $k->isim }}</td>
              <td>{{ $k->aciklama }}</td>
              <td>{{ $k->created_at }}</td>
              <td>{{ $k->updated_at }}</td>
              <td>
                <a href="/admin/kategoriler/{{ $k->id }}" class="btn btn-info btn-block">detay</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
