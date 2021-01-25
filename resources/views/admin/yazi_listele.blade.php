@extends('layouts.dashboard')

@section('title', 'Admin Yazı Oluştur')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Yazı listesi</h3>
      </div>
      <div class="card-body table-responsive p-0">
        <div class="m-2">
          <a class="btn btn-primary btn-block" href="/admin/yazilar/ekle">Yazı Ekle</a>
        </div>
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Başlık</th>
              <th>Güncellendi</th>
              <th>Oluşturuldu</th>
              <th>Detay</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($yazilar as $y)
            <tr>
              <td>{{ $y->id }}</td>
              <td>{{ $y->baslik }}</td>
              <td>{{ $y->created_at }}</td>
              <td>{{ $y->updated_at }}</td>
              <td>
                <a href="/admin/yazilar/{{ $y->id }}" class="btn btn-info btn-block">detay</a>
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
