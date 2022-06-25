<div id="header">
    <div id="site_logo"><a href="/">MyGallery</a></div>
    <ul id="site_navigation">
        <li><a href="/gallery">Галерея</a></li>
        <li><a href="/news">Новости</a></li>
        <li><a href="/random_image">Случайная картинка</a></li>
    </ul>

    <ul id="user_menu">
        <?php
            if (isset($_SESSION["id"])) {
                echo '<p>' . $_SESSION["login"] . '</p>';
                //Если пользователь авторизован, то выводим ссылку Выход
            ?>
        <li>

            <ul>
                <li><a id="profile" href="/user_profile.php">Профиль</a></li>
                <li><a id="download" href="/image_download.php">Загрузка</a></li>
                <li><a id="logout" href="/logout.php">Выход</a></li>
            </ul>
        </li>
    </ul>
    <?php 
            } else {

                echo '<p>Гость</p>';
            ?>
    <ul>
        <li><a href="/registration">Регистрация</a></li>
        <li><a href="/log_on_form.php">Авторизация</a></li>
    </ul>
    </li>
    </ul>
    <?php
            }
            ?>
    <script src="/js/all_js.js"></script>
</div>