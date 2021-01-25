@extends('layouts.dashboard')

@section('title', 'Admin Kullanıcılar')

@section('content_header')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kullanıcı listesi</h3>
      </div>
      <div class="card-body table-responsive p-0">
        <div class="m-2">
          <a class="btn btn-primary btn-block" href="/admin/kullanicilar/ekle">Kullanıcı Ekle</a>
        </div>
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>id</th>
              <th>İsim</th>
              <th>Email</th>
              <th>Oluşturuldu</th>
              <th>Güncellendi</th>
              <th>Detay</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kullanicilar as $k)
            <tr>
              <td>{{ $k->id }}</td>
              <td>{{ $k->name }}</td>
              <td>{{ $k->email }}</td>
              <td>{{ $k->created_at }}</td>
              <td>{{ $k->updated_at }}</td>
              <td>
                <a href="/admin/kullanicilar/{{ $k->id }}" class="btn btn-info btn-block">detay</a>
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
