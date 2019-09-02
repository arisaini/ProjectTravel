@extends('layouts.header')

@section('content')

<div class="container">
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
    <div class="row">
        <div class="col-6">
            <h1>Pendapatan: {{ Auth::user()->name }}</h1>
        </div>
       
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Dari Agent</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Persen</th>
                <th scope="col">Hasil</th>
                <th scope="col">Masuk Tanggal</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach ($pendapatan as $cos)
                <tr>
                    <th scope="row">-</th>
                    <td>{{$cos->user_id}}</td>
                    <td>{{$cos->nameagent}}</td>
                    <td>{{$cos->ket}}</td>
                    <td>{{$cos->diskon}} %</td>
                    <td>{{number_format($cos->hasil,2,',','.')}}</td>
                    <td>{{$cos->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection