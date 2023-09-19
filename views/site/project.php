<?php

/** @var yii\web\View $this */

$this->title = 'Проекты';
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
            </div>
            <div class="adress">
                <p>ул. Калинина 153а</p>
                <p>+74736442</p>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content_project">
            <div class="project">
                <div class="project_item">
                    <img src="/web/img/project_1.png" alt="project_1">
                    <div class="project_adress">
                        <p>ТЦ “Гранд” (ул. Калинина 157А)</p>
                    </div>
                </div>
                <div class="project_item">
                    <img src="/web/img/project_2.png" alt="project_2">
                    <div class="project_adress">
                        <p>Многоэтажный дом (ул. Славского 24)</p>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project_item">
                    <img src="/web/img/project_3.png" alt="project_1">
                    <div class="project_adress">
                        <p>ТЦ “Бум” (ул. Ленинградская 9Б)</p>
                    </div>
                </div>
                <div class="project_item">
                    <img src="/web/img/project_4.png" alt="project_2">
                    <div class="project_adress">
                        <p>ТЦ (ул. Славского 12)</p>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project_item">
                    <img src="/web/img/project_5.png" alt="project_1">
                    <div class="project_adress">
                        <p>Многоэтажный дом (ул.Новый проезд 13)</p>
                    </div>
                </div>
                <div class="project_item">
                    <img src="/web/img/project_6.png" alt="project_2">
                    <div class="project_adress">
                        <p>Многоэтажный дом (ул.Ленина 116)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>