@extends('layout.main');
@section('content')
    <table>
        <tr>
            <td>ID</td>
            <td>Nem</td>
            <td>Gia</td>
        </tr>
        @foreach($products as $pro)
        <tr>
            <td>{{$pro->id}}</td>
            <td>Nem</td>
            <td>Gia</td>
        </tr>
        @endforeach
    </table>
@endsection