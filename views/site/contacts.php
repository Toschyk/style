<?php

/** @var yii\web\View $this */

$this->title = 'Контакты';
use yii\helpers\Url;
?>

<div class="site-index">
   <div class="header">
        <div class="header_content">
            <div class="logo">
                <a href="<?= Url::to(['site/index']) ?>"><img src="/web/img/logo.jpg" alt="logo"></a>
            </div>
            <div class="nav">
                <a href="<?= Url::to(['site/index']) ?>">Главная</a>
                <a href="<?= Url::to(['site/company']) ?>">О компании</a>
                <a href="<?= Url::to(['site/project']) ?>">Проекты</a>
                <a href="<?= Url::to(['site/contacts']) ?>">Контакты</a>
            </div>
            <div class="adress">
                <p>ул. Калинина 153а</p>
                <p>+74736442</p>
            </div>
        </div>
   </div>
   <div class="content">
        <div class="content_contacts">
            <p>Адрес: ул. Калинина 153А</p>
            <p>Телефон: +7(3823) 770-555</p>
            <div class="graf">
                <p class="padd_top">График Работы:</p>
                <p>пн-пт: 8:00-17:00</p>
                <p>Обед: 12:00-13:00</p>
            </div>
            <p>Приглашаем к сотрудничеству подрядные организации на выполнение электромонтажных, сантехнических, кровельных и отделочных работ!</p>
        </div>
   </div>
</div>