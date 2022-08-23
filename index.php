<!DOCTYPE html>
<html lang="ru-RU" >
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="PHP, CSS, BOOTSTRAP 5.0">
    <meta name="author" content="Brunnotte Wasaulua ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стажер | задача</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script rel="script" src="index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>

<body>

<!--Header-->
<header class="my-5">
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light justify-content-center align-items-center">
        <div class="container ">
            <a class="navbar-brand text-uppercase fw-bold" href="#home">
                <span class="bg-primary bg-gradient p-1 font-monospace rounded-3 text-white">E-</span> samokat
            </a>
            <a  class="phone text-center w-md-100 w-50" href="tel:+7(978)051-10-50">
                    +7 (978) 051-10-50
            </a>
            <button class="navbar-toggler w-10" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#advantage">Преимушества</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <!-- Home -->
    <section id="home">
        <div class="container-fluid">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/scooter.jpg" class="img-fluid position-relative d-block w-100" alt="..." width="100%">
                        <div class=" row gy-md-0 gy-2 carousel-caption position-absolute top-0 d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <div class="col-12 col-md-7 ps-md-5 text-center ">
                                <p class="ps-md-5 fw-bold fs-2">Купить Электросамокат</p>
                                <p class="ps-md-5 fw-ligh fs-4">Самые выгодные цены у нас</p>
                            </div>
                            <div class="card col-12 col-md-4 offset-md-1" style="width: 25%">
                                <div class="card-body ">
                                    <div class="success-msg">
                                        <?php if(isset($name) && $name!=''){?>
                                            <?=$name; ?>
                                        <?php } ?>
                                        <?php
                                        if(isset($sucmsg) && !empty($sucmsg)){
                                            echo $sucmsg;
                                        } ?>
                                    </div>
                                    <form class="row gy-2" method="post" action="homeForm.php">
                                        <div class="text-start">
                                            <label for="name" class="form-label ">Имя*</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Имя" required>
                                        </div>
                                        <div class="text-start">
                                            <label for="telephone" class="form-label">Телефон*</label>
                                            <input name="tel" type="tel" class="form-control" id="tel" placeholder="+7 978 111 11 11" required>
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                                <label class="form-check-label" for="invalidCheck3">
                                                    Принимаю условия
                                                </label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-primary " type="submit">Отправить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="buy">
                        <img src="/img/buy.jpg" class="img-fluid position-relative d-block w-100" alt="...">
                        <div class=" row gy-md-0 gy-2 carousel-caption d-flex flex-column justify-content-center align-items-center text-center position-absolute top-0 ">
                            <div class=" pt-md-5">
                                <p class=" pe-md-5 fw-bold fs-2">Купить электросамокат</p>
                                <p class="pe-md-5 fw-light fs-4">с доставкой по Севастополю</p>
                                <p>
                                    <button id="btn__custom" class=" btn-success mt-5">
                                        <a href="#" class="text-decoration-none text-white fs-4 " data-bs-toggle="modal"
                                           data-bs-target="#buy-form">Заказать
                                        </a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- Advantages -->
    <section id="advantage" class=" mt-0 pt-5">
        <div class="container-fluid my-1 pt-5">
            <p class="d-block align-self-center text-center pt-md-5 fw-bold fs-3">Преимущества</p>
            <div class="row g-2 g-md-3 mt-3 mx-md-5 mx-1 px-md-5 px-1 py-2 d-flex flex-md-row flex-column flex-wrap align-items-center ">
                <div  class="prem px-md-0 px-2 col-12 col-md-5 ">
                    <img class="logoMaxSize rounded-corners" src="/img/prem.jpg" style="width: 64px; height: 64px;">
                    <p class="txt1 px-3 fs-6 lh-1">
                        <span class="px-1 fs-5">Media heading</span><br/>
                        Cras sit amet nibh libero, in gravida nulla.<br/>
                        Nulla vel metus scelerisque ante sollicitudin.<br/>
                        Cras purus odio, vestibulum.
                    </p>
                </div>
                <div  class=" prem px-md-0 px-2 col-12 col-md-5 offset-md-2 ">
                    <img class="logoMaxSize rounded-corners" src="/img/prem.jpg" style="width: 64px; height: 64px;">
                    <p class="txt1 px-3 fs-6 lh-1">
                        <span class="px-1 fs-5">Media heading</span><br/>
                        Cras sit amet nibh libero, in gravida nulla.<br/>
                        Nulla vel metus scelerisque ante sollicitudin.<br/>
                        Cras purus odio, vestibulum.
                    </p>
                </div>
                <div  class=" prem px-md-0 px-2 col-12 col-md-5 ">
                    <img class="logoMaxSize rounded-corners" src="/img/prem.jpg" style="width: 64px; height: 64px;">
                    <p class="txt1 px-3 fs-6 lh-1">
                        <span class="px-1 fs-5">Media heading</span><br/>
                        Cras sit amet nibh libero, in gravida nulla.<br/>
                        Nulla vel metus scelerisque ante sollicitudin.<br/>
                        Cras purus odio, vestibulum.
                    </p>
                </div>
                <div  class=" prem px-md-0 px-2 col-12 col-md-5 offset-md-2 ">
                    <img class="logoMaxSize rounded-corners" src="/img/prem.jpg" style="width: 64px; height: 64px;">
                    <p class="txt1 px-3 fs-6 lh-1">
                        <span class="px-1 fs-5">Media heading</span><br/>
                        Cras sit amet nibh libero, in gravida nulla.<br/>
                        Nulla vel metus scelerisque ante sollicitudin.<br/>
                        Cras purus odio, vestibulum.
                    </p>
                </div>
            </div>
            <div class="py-5 justify-content-center text-center mb-5">
                <button id="btn__custom" class=" btn-success">
                    <a class="text-decoration-none text-white p-2 fs-4" href="#buy">Заказать</a>
                </button>
            </div>
        </div>
    </section>

    <!-- contacts -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <p class="d-block align-self-center text-center pt-md-5 fw-bold fs-3">Контакты</p>
            <div class="row gy-4 pt-5 d-flex flex-md-row flex-column justify-content-center align-items-center">
                <div class="col-12 col-md-6" id="map">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad38dff3cd76a5bf4c59344072ba501bec448242f67c7902a509f8352d19d4a0e&amp;width=500&amp;height=330&amp;lang=ru_RU&amp;scroll=true">
                    </script>
                </div>
                <div class="col-12 col-md-5 offset-md-1 mt-5">
                    <div class=" d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center">
                            <p>
                                г. Севастополь, ПОР 42Б,<br/>
                                +7 (978) 051 - 10 -50,<br/>
                                <b>info@marketingl.su</b>
                            </p>
                        </div>
                        <div class="text-center">
                            Мессенджеры<br/>
                            <p>
                                <a href="#" class='fab fa-viber'></a>
                                <a href="#" class="fab fa-whatsapp"></a>
                            </p>
                        </div>
                        <div class="message text-center p-3">
                            Номер телефона для мессенджера<br/>
                            +7(978)051-10-50
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Modal -->
<div class=" modal fade" id="buy-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="main-block">
                    <div class="success-msg">
                        <?php if(isset($name) && $name!=''){?>
                            <?=$name; ?>
                        <?php } ?>
                        <?php
                        if(isset($sucmsg) && !empty($sucmsg)){
                            echo $sucmsg;
                        } ?>
                    </div>
                    <h1 class="fw-bold">Заказ</h1>
                    <form action="commandFormHandler.php" method="post">
                        <div class="info">
                            <input class="fname" type="text" name="name" id="fname" placeholder="ФИО" required>
                            <input type="email" name="email" id="fmail" placeholder="Почто" required>
                            <input type="tel" name="tel" id="ftelephone" placeholder="Телефон" required>
                            <input type="text" name="address" placeholder="Адресс" required>
                            <input type="text" name="question" placeholder="Вопрос">
                            <select>
                                <option value="time" disabled selected>Удобное время</option>
                                <option value="10">10:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="15">15:00</option>
                                <option value="18">18:00</option>
                            </select>
                            <select>
                                <option value="type" disabled selected>Тип самоката</option>
                                <option value="Самокат_lg_142">Самокат lg 142</option>
                                <option value="Самокат_sp_042">Самокат sp 042</option>
                                <option value="Самокат_xk_514">Самокат xk 514</option>
                            </select>
                        </div>
                        <p class="mt-4 fs-5">Метод доставки</p>
                        <div class="metod ">
                            <div>
                                <input type="radio" value="Самостояльно" id="radioOne" name="radio-btn__dostavka" checked/>
                                <label for="radioOne" class="radio">Самостояльно</label>
                            </div>
                            <div>
                                <input type="radio" value="Курьер" id="radioTwo" name="radio-btn__dostavka" />
                                <label for="radioTwo" class="radio">Курьер</label>
                            </div>
                        </div>
                        <p class="mt-4 fs-5">Метод платежа</p>
                        <div class="metod">
                            <div>
                                <input type="radio" value="Наличные" id="radioOnes" name="radio-btn__plateja" checked/>
                                <label for="radioOne" class="radio">Наличные</label>
                            </div>
                            <div>
                                <input type="radio" value="Карта" id="radioTwos" name="radio-btn__plateja" />
                                <label for="radioTwo" class="radio">Карта</label>
                            </div>
                        </div>
                        <button class="button">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script>
    let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</body>

</html>