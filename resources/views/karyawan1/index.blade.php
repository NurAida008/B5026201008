@extends('websitepweb.website')
@section('title', 'Data Karyawan')
@section('container')


<a href="/karyawan1/tambah" class="btn btn-warning"> + Tambah Karyawan Baru</a>

<br/>
<br/>

<table class="table table-striped">

<br>
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Pangkat</th>
        <th>Gaji</th>
        <th>Opsi</th>
    </tr>
    @foreach($karyawan1 as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->NIP}}</td>
        <td>{{ $p->Nama}}</td>
        <td>{{ $p->Pangkat }}</td>
        <td>{{ number_format($p->Gaji) }}</td>
        <td>

            <a href="/karyawan1/hapus/{{ $p->NIP }}" class="btn btn-danger">Hapus</a>

        </td>
    </tr>
    @endforeach
</table>

{{$karyawan1-> links()}}

@endsection
