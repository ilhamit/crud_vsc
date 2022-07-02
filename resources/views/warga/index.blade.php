@extends('layouts.master')

@section('content')
    <div class="container">
        
            <div class="row" style="margin:60px;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>data warga</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('/warga/create') }}" class="btn btn-success btn-sm" title="tambah">
                                + Tambah 
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nik</th>
                                        <th>No KK</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
@php 
    $no = 1;
@endphp
@foreach($warga as $sw)
<tr>
<th scope="sw"> {{ $no++ }}</th>
<td>{{$sw->nama}}</td>
<td>{{$sw->nik}}</td>
<td>{{$sw->no_kk}}</td>
<td>{{$sw->jenis_kelamin}}</td>
<td>{{$sw->alamat}}</td>
<td>{{$sw->ACTION}}</td>
<td>
<div class="btn-group" role="group" aria-label="Basic example">    
                        <a class="btn btn-warning" href="/warga/{{$sw->id}}/edit">Edit</a>
                            <form action="/warga/{{$sw->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" name="submit" value="Delete" onclick="confirm('Sure?')">
                            </form>
                    </div>
                    </td>
                </tr>
        @endforeach
                                    </tbody>
    </table>
        </div>
@endsection