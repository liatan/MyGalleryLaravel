<div id="header">
    <div id="site_logo"><a href="{{ route('homepage') }}">MyGallery</a></div>
    <ul id="site_navigation">
        <li><a href="{{ route('gallery') }}">Галерея</a></li>
        <li><a href="{{ route('news') }}">Новости</a></li>
        <li><a href="{{ route('random_image') }}">Случайная картинка</a></li>
    </ul>

    <ul id="user_menu">
        <?php
            if (isset($_SESSION["id"])) {
                echo '<p>' . $_SESSION["login"] . '</p>';
                //Если пользователь авторизован, то выводим ссылку Выход
            ?>
        <li>

            <ul>
                <li><a id="profile" href="/user_profile">Профиль</a></li>
                <li><a id="download" href="/image_download">Загрузка</a></li>
                <li><a id="logout" href="/logout">Выход</a></li>
            </ul>
        </li>
    </ul>
    <?php 
            } else {

                echo '<p>Гость</p>';
            ?>
    <ul>
        <li><a href="{{ route('registration') }}">Регистрация</a></li>
        <li><a href="{{ route('authorization') }}">Авторизация</a></li>
    </ul>
    </li>
    </ul>
    <?php
    }
    ?>

</div>
