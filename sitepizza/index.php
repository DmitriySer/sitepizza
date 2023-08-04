<?
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZA FOR</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/picca.ico?v=1660607436009">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/picca.ico?v=1660607436009">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,300&family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">PIZZA FOR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto row-mb-3 nav nav-pills">
                <li class="nav-item">
                    <a href="#scrollspyHeading3" class="nav-link">Меню</a>
                </li>
                <li class="nav-item">
                    <a href="#scrollspyHeading1" class="nav-link">Обзор</a>
                </li>
                <li class="nav-item">
                    <a href="#scrollspyHeading2" class="nav-link">Местоположение</a>
                </li>
                <li class="nav-item">
                    <a href="#scrollspyHeading4" class="nav-link">Контакты</a>
                </li>
            </ul>

            <? if (isset($_SESSION['user'])) { ?>
                <div class="d-flex">
                    <button class="btn btn-outline-warning me-2"><?= $_SESSION['user'] ?>
                    </button>
                </div>
                <form method="post" action="foo/registation.php">
                    <div class="d-flex">
                        <button class="btn btn-outline-danger me-2" type="submit" name="exit" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Выйти
                        </button>
                    </div>
                </form>
            <? } elseif (isset($_SESSION['err'])) {
                ?>
                    <p style="color: red" class="me-2"><?=$_SESSION['err']?></p>
                <div class="d-flex">
                    <button class="btn btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Личный кабинет
                    </button>
                </div>
                    <?}else{?>
                <div class="d-flex">
                    <button class="btn btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Личный кабинет
                    </button>
                </div>
            <? }
            unset($_SESSION['err']);?>
        </div>
    </div>
</nav>

<!-- --Modal----->
<form action="foo/registation.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Личный кабинет</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-bs-label="close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="inputtext" class="col-sm-2 col-form-label">Логин</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" required placeholder="Логин..." class="form-control"
                                   id="inputtext">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="mail" placeholder="Email..." class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPass" class="col-sm-2 col-form-label">Пароль</label>
                        <div class="col-sm-10">
                            <input type="password" required name="pass" placeholder="Пароль..." class="form-control"
                                   id="inputPass">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="but" class="btn btn-dark" data-bs-dismiss="modal">Регистрация</button>
                    <button type="submit" name="join" class="btn btn-dark" data-bs-dismiss="modal">Вход</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!----Modal--- -->

<main>
    <div class="carousel slide" id="carouselControls" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/pizza1.jpg?v=1660607441604"
                     alt="pizza">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/pizza2.jpg?v=1660607446664"
                     alt="pizza picture">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/pizza3.jpg?v=1660607453572"
                     alt="pizza picture">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/pizza4.jpg?v=1660607460380"
                     alt="pizza picture">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/pizza5.jpg?v=1660607466157"
                     alt="pizza picture">
            </div>
        </div>
        <a class="carousel-control-prev" role="button" href="#carouselControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" role="button" href="#carouselControls" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container my-5 col-sm-12">
        <div class="row">
            <div class="col-md-8">
                <img class="w-100"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/pizzaone.jpg?v=1660607481557"
                     alt="pizza">
            </div>
            <div class="col-md-4 text-center col-sm-12">
                <h2 id="scrollspyHeading1" class="my-5">Обзор</h2>
                <p>Всех приветствуем в нашей знаменитой пиццерии PIZZA FOR! Наш бизнес основан в 2010 году и продолжает
                    держать успех несмотря на все кризисы. Рецепты пиццерии взяты из профессиональных высших школ
                    кулинарии, именно из-за этого они такие волшебные на вкус. Наши золотые повара имеют ни по одному
                    образованию, а все для того что бы готовить лучше и вкуснее всех. Спасибо нашим постоянным клиентам
                    за выбор данного заведения, благодаря вам мы открылись во многих городах РФ. А так же мы каждого
                    клиента ценим и дарим персональный купон на следующее посещение заведения.</p>
            </div>
        </div>
        <h2 class="text-center my-5">Наши секреты приготовления</h2>
        <div class="row">
            <div class="col-md-3">
                <img class="w-100"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/stove.jpg?v=1660607485808"
                     alt="stove">
            </div>
            <div class="col-md-8 col-sm-12 text-center">
                <h4 class="my-3">Печь</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor"
                     class="bi bi-card-text" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <p>Пиццу лучше всего выпекать в специальной печи, позволяющей поддерживать температуру на уровне не ниже
                    350 градусов. Классическое блюдо выпекается в специальной дровяной печи, которая называется
                    Помпейской и имеет форму свода в виде полусферы, также пиццу готовят в подовых и конвекционных
                    печах. Огонь разводится с одной из сторон, поднимаясь вверх, жар от него попадает в фокус сферы и
                    отражается в центр печи на середину пода, нагревая его. Поэтому пицца в такой печи готовится около
                    90 секунд, а в домашних условиях — в предварительно разогретой до 250–275°C духовке примерно за 8–10
                    минут. Такое количество времени позволяет прогреть тесто до корочки, а начинке остаться максимально
                    сочной и вкусной.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img class="w-100 my-4"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/flour.jpg?v=1660607407574"
                     alt="flour">
            </div>
            <div class="col-md-8 col-sm-12 text-center">
                <h4 class="my-3">Мука</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor"
                     class="bi bi-card-text" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <p>Мука для приготовления хлеба или пиццы калибруется по разным категориям: 2, 1, 0 и 00. Каждая из этих
                    категорий отличается прежде всего помолом и качеством изготовления самой муки. Чем меньше помол
                    муки, тем более рассыпчатым, воздушным и мягким будет тесто. Если мы используем крупные помолы
                    (такие, как 2 или 1), их лучше использовать в определенной пропорции с мукой 00 или 0. Потому что
                    иначе тесто получится слегка темным и будет иметь огромное количество клейковины, что может
                    испортить вкус нашего блюда. Для приготовления теста мы берем итальянскую муку из мягких сортов
                    пшеницы, при производстве которой используются ядра пшеничного зерна, с высоким содержанием
                    протеинов и крахмала. Такой тип муки больше всего подходит для долгого «созревания» теста, делает
                    его более легким и полезным. Далее муку тщательно просеиваем, что бы тесто получилось нежным и
                    вкусным. И только после этого начинаем подготавливать её к замесу теста.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img class="w-100 my-4"
                     src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/dough.jpg?v=1660607404139"
                     alt="dough">
            </div>
            <div class="col-md-8 col-sm-12 text-center">
                <h4 class="my-3">Тесто</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor"
                     class="bi bi-card-text" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <p>В первую очередь пицца - простая еда. Ну скажите, откуда у простых людей в старой Италии были яйца
                    или кефир или что еще веселее майонез, который вообще во Франции придумали. Поэтому, забудьте о том,
                    что тесто для пиццы это нечто сложное и замысловатое. Тесто для пиццы – это мука, вода, дрожжи, соль
                    и оливковое масло, которого в Италии в избытке. Температура и влажность воздуха очень сильно влияют
                    на качество пиццы. Каждое утро наш шеф при замешивании теста учитывает эти параметры и изменяет
                    количество муки и дрожжей в рецепте, поэтому приготовление теста – это всегда очень творческий
                    процесс. Как выше было сказано - тесто готовится самостоятельно нашими поварами, а не закупается
                    готовым в магазинах. Для его приготовления в основном нужны лишь мука, яйца, дрожжи и вода, но
                    иногда бывают и дополнительные ингредиенты - все зависит от выбранного рецепта. </p>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12 text-center col-sm-12">
            <h2 id="scrollspyHeading3" class="col">Меню</h2>
        </div>
        </div>
        <div class="list">
            <div class="plantwo">
                <h3>Пепперони</h3>
                <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/ab.jpg?v=1660607377315" width="200px">
                <ul class="letter">
                    <li>Пепперони</li>
                    <li>Моцарелла</li>
                    <li>Красный соус</li>
                    <li>Шампиньоны</li>
                </ul>
                <p class="price"><del>500</del><ins>420руб.</ins></p>
                <a href="mailto:liekomtsieva200015@gmail.com"><button class="cta">Заказать</button></a>
            </div>

            <div class="plantwo">
                <h3>Патриция</h3>
                <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/abc.jpg?v=1660607387783" width="200px">
                <ul class="letter">
                    <li>Толстое тесто</li>
                    <li>Охотничьи колбаски</li>
                    <li>Острый соус</li>
                </ul>
                <p class="price"><del>850</del><ins>700руб.</ins></p>
                <a href="mailto:liekomtsieva200015@gmail.com"><button class="cta">Заказать</button></a>
            </div>
        </div>

        <div class="list">
            <div class="plantwo">
                <h3>Маринара</h3>
                <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/abcd.jpg?v=1660607391938" width="200px">
                <ul class="letter">
                    <li>Вяленые томаты</li>
                    <li>Пармезан</li>
                    <li>Чеснок/Базилик</li>
                </ul>
                <p class="price"><del>550</del><ins>340руб.</ins></p>
                <a href="mailto:liekomtsieva200015@gmail.com"><button class="cta">Заказать</button></a>
            </div>

            <div class="plantwo">
                <h3>Ортолана</h3>
                <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/abg.jpg?v=1660607400749" width="250px">
                <ul class="letter">
                    <li>Баклажан</li>
                    <li>Кобачок</li>
                    <li>Болгарский перец</li>
                    <li>Моцарелла</li>
                </ul>
                <p class="price">450руб.</p>
                <a href="mailto:liekomtsieva200015@gmail.com"><button class="cta">Заказать</button></a>
            </div>
        </div>

        <div class="list">
            <div class="plantwo">
                <h3>Оригон</h3>
                <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/abcde.jpg?v=1660607396237" width="200px">
                <ul class="letter">
                    <li>Моцарелла</li>
                    <li>Базилик</li>
                    <li>Песто</li>
                    <li>Копченая курица</li>
                </ul>
                <p class="price">550руб.</p>
                <a href="mailto:liekomtsieva200015@gmail.com"><button class="cta">Заказать</button></a>
            </div>

            <div class="plantwo">
                <h3>Беверли</h3>
                <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/abb.jpg?v=1660607382421"width="200px">
                <ul class="letter">
                    <li>Курица жареная</li>
                    <li>Соус песто</li>
                    <li>Базилик</li>
                    <li>Камамбер</li>
                </ul>
                <p class="price">600руб.</p>
                <a href="mailto:liekomtsieva200015@gmail.com"><button class="cta">Заказать</button></a>
            </div>
        </div>
        <div class=" d-flex justify-content-center">
            <h2 id="scrollspyHeading2">Где мы находимся?</h2>
            <br>
        </div>
        <div class="d-flex justify-content-center">
            <p>Miami Beach North, 176th, Florida</p>
        </div>
        <div class="d-flex justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3587.9878070650398!2d-80.20576467469418!3d25.93562513096849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ae650786a5f7%3A0x80fba25a4c1d3e5e!2zTlcgMTc2dGggU3QsIE5vcnRoIE1pYW1pIEJlYWNoLCBGTCAzMzE2OSwg0KHQqNCQ!5e0!3m2!1sru!2sru!4v1660499179017!5m2!1sru!2sru"
                    width="300px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>
    </div>
</main>
<footer class="text-center pt-4 my-md-5 pt-md-5 border-top">
    <div>
        <h4 id="scrollspyHeading4">Подписывайтесь на Нас в своих любимых социальных сетях!</h4>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-md">
            <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/VK.png?v=1660607494995"
                 alt="vk.com" width="50px">
            <ul class="list-unstyled text-small">
                <li><a href="" target="_blank" class="link-secondary ">VK</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/inst.png?v=1660607410515"
                 alt="instagram.com" width="50px">
            <ul class="list-unstyled text-small">
                <li><a href="" target="_blank" class="link-secondary">Instagram</a></li>
            </ul>
            <h4>8-999-999-99-99</h4>
        </div>
        <div class="col-6 col-md">
            <img src="https://cdn.glitch.global/fb19c22f-7377-4b04-85ef-8cf5e6de4de4/tg.jpg?v=1660607490570"
                 alt="telegram" width="50px">
            <ul class="list-unstyled text-small">
                <li><a href="" target="_blank" class="link-secondary">Telegram</a></li>
            </ul>
        </div>
    </div>
    <br>
    <div>
        <hr>
        <h7>Ⓒ PIZZA FOR 2023</h7>
    </div>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>
