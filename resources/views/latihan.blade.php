@extends('layout.template')
@section('title')

@section('content')

    <h1> Latihan 1 </h1>
    <h1> Hasil Deret Bilangan </h1>
    <table border='1' style='width:15%;'>
        <thead>
            <tr>
                <td>Index</td>
                <td>Value</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($deret as $key=>$val)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$val}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>




@endsection