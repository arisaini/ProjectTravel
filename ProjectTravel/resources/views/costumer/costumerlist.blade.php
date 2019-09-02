@extends('layouts.header')

@section('content')
<div class="container">
<div class="row">
        <div class="col-6">
            <h1>Daftar Semua Costumer</h2>
        </div>
<table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Kode Referal Agent</th>
                <th scope="col">Alamat</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach ($costumer as $cos)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $cos->nama }}</td>
                    <td>{{ $cos->gender }}</td>
                    <td>{{ $cos->kodereferal_agent }}</td>
                    <td>{{ $cos->alamat }}</td>
                    
                </tr>
             @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection