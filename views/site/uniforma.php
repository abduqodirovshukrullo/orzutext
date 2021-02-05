<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Uniforma';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--Main
                    ===================================-->
<div class="pages-info" style="background-image: url('/app/images/lenta.png');">
    <h3 class="pages-info-title wow tada">О компании</h3>
    <ul class="pages-info-menu">
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="">Главная</a></li>
        <li class="pages-info-menu-item"><a class="pages-info-menu-link" href="">О компании</a></li>
    </ul>
</div>

<section class="uniform">
    <div class="container">
        <h3 class="main-title">Кто мы?</h3>
        <div class="contract-in-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores commodi
            delectus nam soluta officia natus tempora omnis dolore architecto tempore sapiente, quae nesciunt
            pariatur itaque facilis id obcaecati impedit iusto?
            Error sint, vel, maiores sequi consequuntur magnam iure sit asperiores ipsum optio corporis aut
            commodi voluptatum eos ex? Consequatur quae sed fugit rerum veritatis eos? Necessitatibus saepe ab
            voluptatum ratione.
            Corporis esse quod ab eligendi deserunt consequatur accusamus cumque laudantium, voluptas, hic
            labore sed omnis itaque officiis ut corrupti distinctio perspiciatis ipsam minus ipsum sapiente
            eveniet non quaerat. Tempore, voluptas?
            Doloribus labore aut laudantium a. Nesciunt distinctio nemo, dolore numquam vel vero dolores sequi
            architecto cupiditate optio vitae fuga dolor aut odit corrupti aspernatur minima doloremque
            assumenda, asperiores iusto nisi!
            Corporis, itaque. Minus quas molestiae doloremque ipsam, aspernatur esse quaerat dolor, odio at
            perspiciatis amet odit maiores laudantium tenetur repellendus eligendi aliquam illo animi dolorem
            aliquid iste mollitia reiciendis. Amet?</div>
    </div>
    <div class="container">
        <div class="counter">
            <div class="counter-block">
                <div class="counter-item">
                    <div class="counter-item-title">8</div>
                    <div class="counter-item-text">Лет опыта работы на рынке</div>
                </div>
                <div class="counter-item">
                    <div class="counter-item-title">800</div>
                    <div class="counter-item-text">Квалифицированных
                        сотрудников</div>
                </div>
                <div class="counter-item">
                    <div class="counter-item-title">100</div>
                    <div class="counter-item-text">Постоянных клиентов</div>
                </div>
                <div class="counter-item">
                    <div class="counter-item-title">300</div>
                    <div class="counter-item-text">Успешных проектов</div>
                </div>
            </div>
        </div>
    </div>
    <div class="factory">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="factory-block">
                        <div class="factory-img">
                            <img src="/app/images/tower.png" alt="">
                        </div>
                        <a href="" class="factory-title">Вязальное производство</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="factory-block">
                        <div class="factory-img">
                            <img src="/app/images/tower.png" alt="">
                        </div>
                        <a href="" class="factory-title">Оборудование по производству воротников</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="factory-block">
                        <div class="factory-img">
                            <img src="/app/images/tower.png" alt="">
                        </div>
                        <a href="" class="factory-title">Оборудование по производству воротников</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sort">
            <h3 class="main-title sort-title">Наши преимущества</h3>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="sort-block">
                        <div class="sort-img">
                            <img src="/app/images/lamp.png" alt="">
                        </div>
                        <a href="" class="factory-title">Вязальное производство</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="sort-block">
                        <div class="sort-img">
                            <img src="/app/images/bantik.png" alt="">
                        </div>
                        <a href="" class="factory-title">Вязальное производство</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="sort-block">
                        <div class="sort-img">
                            <img src="/app/images/catton.png" alt="">
                        </div>
                        <a href="" class="factory-title">Вязальное производство</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="sort-block">
                        <div class="sort-img">
                            <img src="/app/images/clock.png" alt="">
                        </div>
                        <a href="" class="factory-title">Вязальное производство</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="main-uniform">
            <div class="main-title">наши изделия</div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="main-uniform-block">
                        <div class="main-uniform-img" style="background-image: url('/app/images/uniform.png');"></div>
                        <a href="" class="main-uniform-title">Униформа для авиакомпании</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="work">
        <div class="container">
            <h3 class="main-title work-title">как мы работаем</h3>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 work-wrap">
                    <div class="work-block">
                        <div class="work-number">1.</div>
                        <div class="work-block-title">У вас есть поставленная
                            задача?
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 work-wrap">
                    <div class="work-block">
                        <div class="work-number">2.</div>
                        <div class="work-block-title">У вас есть поставленная
                            задача?
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 work-wrap">
                    <div class="work-block">
                        <div class="work-number">3.</div>
                        <div class="work-block-title">У вас есть поставленная
                            задача?
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 work-wrap">
                    <div class="work-block">
                        <div class="work-number">4.</div>
                        <div class="work-block-title">У вас есть поставленная
                            задача?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="partners">
            <h2 class="main-title partners-title">Нам доверяют</h2>
            <div class="partners-block">
                <a href="" class="partners-item">
                    <img src="/app/images/gmuzb.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/tabacco.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/pure-life.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/artel.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/knauf.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/gmuzb.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/tabacco.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/pure-life.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/artel.png" alt="">
                </a>
                <a href="" class="partners-item">
                    <img src="/app/images/knauf.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>