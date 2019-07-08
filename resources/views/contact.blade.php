@extends('layouts.app', ['title' => 'Контакты'])  

@section('content')

@if(session('message'))
<div class='alert alert-success'>
    {{ session('message') }}
</div>
@endif

<form method="POST" action="/contact">
    {{ csrf_field() }}
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label for="Name">Имя: </label>
            <input type="text" class="form-control" id="name" placeholder="Имя" name="name" required>
        </div>
    </div>

    <div class="control-group">
        <div class="form-group  floating-label-form-group controls">
            <label for="email">Email: </label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
    </div>
    <div class="control-group  floating-label-form-group controls">
        <div class="form-group">
            <label for="message">Сообщение: </label>
            <textarea type="text" class="form-control luna-message" id="message" placeholder="Сообщение" name="message" required></textarea>
        </div>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" value="Send">Отправить</button>
    </div>
</form>
@endsection