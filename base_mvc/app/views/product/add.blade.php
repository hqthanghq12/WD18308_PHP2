@extends('layout.main');
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('post-product')}}" method="post">
        <label>Ten</label>
        <input type="text" name="name">
        <label>Gia</label>
        <input type="text" name="price">
        <input type="submit" name="gui" value="Gui">
    </form>
@endsection