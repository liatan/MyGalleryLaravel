@extends('general_layout.general')

@section('main_content')
<?php

if (!isset($_SESSION["login"])) {
    if (isset($_SESSION["error_reg"])) {
        unset($_SESSION["error_reg"]);
        echo '<script src="/js/errors_js.js"></script>' ;
    }   
    
?>

<div id="registration_block">
    <h2>Форма регистрации</h2>
    <form id="registration_form" action="{{ route('reg_submit') }}" method="post">
        @csrf
        <fieldset>
            <input type="login" name="login" placeholder="Введите логин" required="required">
            <input type="email" name="email" placeholder="Введите email" required="required">
            <input type="password" name="password" placeholder="Введите пароль" required="required">
            <input type="password" name="password_confirm" placeholder="Повторите пароль" required="required">
            <input type="submit" name="btn_submit_registration" value="Зарегистрироватся!">
        </fieldset>
    </form>
   
</div>


<?php
} else {
?>
<div id="authorized">
    <h2>Вы уже зарегистрированы</h2>
</div>
<?php
} ?>
@endsection