@extends('layouts.main')

@section('pageTitle')Контакты@endsection

@section('content')
<h1>Контакты</h1>
@if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} </li>
    @endforeach
</ul>
</div>
@endif

<form action={{ route('contactForm') }} method="POST">
    @csrf
<div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text"  name="name" placeholder="Введите имя" id="name" class="form-control">
</div>

<div class="form-group">
    <label for="email">Введите e-mail</label>
    <input type="text"  name="email" placeholder="Введите e-mail" id="email" class="form-control">
</div>

<div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text"  name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
</div>

<div class="form-group">
    <label for="message">Сообщение</label>
    <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control">
    </textarea>
</div>

<button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
