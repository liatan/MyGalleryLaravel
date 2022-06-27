@extends('general_layout.general')

@section('main_content')

<?php
//Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
//иначе выводим сообщение о том, что он уже авторизован
if (!isset($_SESSION["login"]) && !isset($_SESSION["password"])) {
    if (isset($_SESSION["error_log_on"])) {
        unset($_SESSION["error_log_on"]);
        echo '<script src="/js/errors_js.js"></script>' ;
    }    
?>
<div id="authorization_block">
    <h2>Форма авторизации</h2>
    <form id="authorization_form" action="{{ route('auth_submit') }}" method="post" >
        @csrf
        <fieldset>
            <input type="login" name="login" placeholder="Введите логин" required="required">
            <input type="password" name="password" placeholder="Введите пароль" required="required">
            <input type="submit" name="btn_submit_log_on" value="Войти">
        </fieldset>
    </form>
</div>


<?php
} else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /index.php");
}
?>
@endsection