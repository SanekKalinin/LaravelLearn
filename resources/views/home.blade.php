@extends('layouts.main')

@section('pageTitle')Главная  страница@endsection

@section('content')
<h1>Главная  страница</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi recusandae corporis veniam blanditiis dignissimos minima vel nesciunt omnis consequatur, magni molestias fugit rerum, quibusdam, cumque et necessitatibus provident dicta non?
</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
