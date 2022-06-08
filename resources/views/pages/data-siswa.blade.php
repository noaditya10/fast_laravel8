@extends('layouts.main')

@section('content')
<h3>Data Siswa</h3>
<table class="table table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIS</th>
      <th scope="col">Tanggal Lahir</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>Johan Saputra</td>
      <td>1011</td>
      <td>2001-11-22</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Deny Ferdiansyah</td>
      <td>1012</td>
      <td>2003-12-06</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Iqbal Ramadhan</td>
      <td>1013</td>
      <td>2003-06-06</td>
    </tr>
<tr>
      <th scope="row">4</th>
      <td>Rahmat Hidayat</td>
      <td>1014</td>
      <td>2003-05-14</td>
    </tr>
<tr>
      <th scope="row">5</th>
      <td>Azka Junio</td>
      <td>1015</td>
      <td>2003-09-04</td>
    </tr>
  </tbody>
</table>
@endsection