<?php

/** @var yii\web\View $this */

$this->title = 'Компания - СТИЛЬ';
use yii\helpers\Url;
?>
<div class="site-index">
<div class="page">
    <div class="header">
        <div class="header_content">
            <div class="logo">
                <a href="<?= Url::to(['site/index']) ?>"><img src="/web/img/logo.jpg" alt=""></a>
            </div>
            <div class="nav">
                <a href="<?= Url::to(['site/index']) ?>">Главная</a>
                <a href="<?= Url::to(['site/company']) ?>">О компании</a>
                <a href="<?= Url::to(['site/project']) ?>">Проекты</a>
                <a href="<?= Url::to(['site/contacts']) ?>">Контакты</a>
                <a href="<?= Url::to(['site/login']) ?>">Авторизация</a>
                <a href="<?= Url::to(['user/create']) ?>">Регистрация</a>
            </div>
            <div class="adress">
                <p>ул. Калинина 153а</p>
                <p>+74736442</p>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content_main">
            <img src="/web/img/main_img.png" alt="Пример работы">
        </div>
    </div>
</div>
</div>



