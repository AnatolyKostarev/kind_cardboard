<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добрый картон</title>
    <link rel="shortcut icon" href="img/Header/header-logo-320.png" type="image/x-icon">
    <link rel="stylesheet" href="js/animate.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/_modal.css">
    <link rel="stylesheet" href="css/_menu.css">
    <link rel="stylesheet" href="css/_header.css">
    <link rel="stylesheet" href="css/_main.css">
    <link rel="stylesheet" href="css/_features.css">
    <link rel="stylesheet" href="css/_production.css">
    <link rel="stylesheet" href="css/_order.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/_customers.css">
    <link rel="stylesheet" href="css/_feedback.css">
    <link rel="stylesheet" href="css/_contacts.css">
    <link rel="stylesheet" href="css/_footer.css">
    <link rel="stylesheet" href="css/media.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<?php wp_head(  ); ?>
</head>

<body>

<!--НАЧАЛО БЛОКА  МОДАЛЬНОГО ОКНА OVERLAY-->
<section id="modal">
    <div class="overlay">
        <div class="popup">
            <div class="popup-title">Форма обратной связи</div>
            <!-- /.popup-title -->
            <div class="popup-cross">&times;</div>
            <!-- /.popup-cross -->
            <div class="popup-form">
                <p class="popup-form__title">Получите индивидуальное предложение</p>
                <p class="popup-form__subtitle">на производство и поставку изделий</p>
                    <form id="form" class="popup-form__get" action="mailer/smart.php" method="POST">
                        <label class="popup-form__label" for="tel">Введите ваш номер телефона:</label>
                        <input class="popup__inputphone" id="tel" autocomplete="off" type="tel" name="user__phone" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" required>
                        <button type="submit" class="popup__button">Оставить заявку!</button>
                    </form>
                    <!-- /.popup-form__get -->
                     <span class="popup__minorder">*Минимальный заказ 500шт</span>
            </div>
            <!-- /.popup-form -->
        </div>
        <!-- /.popup -->
    </div>
    <!-- /.overlay-popup -->
</section>

<!--КОНЕЦ БЛОКА  МОДАЛЬНОГО ОКНА OVERLAY-->


<!-- НАЧАЛО БЛОКА MENU-->
    <section class="menu">
        <a name="about"></a>
        <div class="container">
            <nav class="menu-main">
                    <ul class="menu-main__list">
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#about">О компании</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#features">Преимущества</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#products">Производство</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#production">Склад</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#production">Продукция</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#customers">Наши клиенты</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#feedback">Сертификаты</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper" href="#feedback">Отзывы</a></li>
                        <li class="menu-main__item"><a class="menu-main__item__wrapper menu-main__item__wrapper__last" href="#contacts">Контакты</a></li>
                    </ul>
            </nav>
            <nav class="menu-mobile">
                <ul class="menu-mobile__list">
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#about">О Компании</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#features">Преимущества</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#products">Производство</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#production">Склад</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#production">Продукция</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#customers">Наши клиенты</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#feedback">Сертификаты</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#feedback">Отзывы</a></li>
                    <li class="menu-mobile__item"><a class="menu-mobile__item__wrapper" href="#contacts">Контакты</a></li>
                </ul>
        </nav>  
            <div class="header-logo__menu">
                <a href="" class="header-menu__btn"></a>
                <span class="menu-btn__dec"></span>
            </div>
            <!-- /.header-logo__menu -->
        </div>
        <!-- /.container -->
    </section>
<!--КОНЕЦ БЛОКА MENU-->

<!--НАЧАЛО БЛОКА HEADER-->

    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 col-sm-5 col-md-4">
                    <div class="header-logo">
                        <img class="header-logo__icon" src="img/Header/menyu_183.png" alt="Иконка бургер меню">
                        <img class="header-logo__main" src="img/Header/header_logo.png" alt="Логотип добрый картон">
                        <img class="header-logo__mobile" src="img/Header/header-logo-320(1).png" alt="Логотип добрый картон для мобильного">
                    </div>
                    <!-- /.header-logo -->
                </div>
                <!-- /.col-4 -->
                <div class="col-8 col-sm-7 col-md-8">
                    <div class="header-text">
                        <div class="header-text__phone">
                            8 (347) <span class="header-text__phone__number">271-54-28</span>
                        </div>
                        <!-- /.header-phone -->
                        <div class="header-text__phone">
                            8 (937) <span class="header-text__phone__number" >363-30-00</span>
                        </div>
                        <!-- /.header-phone -->
                        <button class="header-text__button">
                            <img class="header-text__icon" src="img/Header/phone_icon.png" alt="Иконка телефон">Заказать звонок
                        </button>
                        <!-- /.header-button -->
                    </div>
                    <!-- /.header-text -->
                </div>
                <!-- /.col-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>

<!--КОНЕЦ БЛОКА HEADER-->

<!--НАЧАЛО БЛОКА MAIN-->

<main>
    <section id="main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="main-img hidden-mobile wow fadeInLeft" data-wow-delay="0.2s">
                        <img class="main-boxes__img" src="img/Main/main-boxes-img.png" alt="Картонные коробки">
                    </div>
                    <!-- /.main-img -->
                </div>
                <!-- /.col-5 -->
                <div class="col-12 col-md-12 col-lg-7">
                    <h1 class="main-text__title wow fadeInRight" data-wow-delay="0.2s">Производство упаковки из<br> гофрокартона</h1>
                    <p class="main-text__subtitle wow fadeInRight" data-wow-delay="0.2s">с доставкой по всей России</p>
                    <div class="main-text">
                        <h3 class="main-text__get">Получите индивидуальное предложение<br>
                        на производство и поставку гофропродукции</h3>
                        <p class="main-text__simple">образцы и упаковка бесплатно!</p>
                        <form id="form" class="main-text__form" action="mailer/smart.php" method="POST">
                            <input name="user__phone" class="main-text__inputphone" autocomplete="off" size="23" placeholder="Введите номер телефона" type="tel" required>
                            <button type="submit" class="main-text__button">Оставить заявку!</button>
                        </form>
                        <!-- /.main-text__form -->
                        <span class="main-text__minorder">*Минимальный заказ 500шт</span>
                    </div>
                    <!-- /.main-text -->
                </div>
                <!-- /.col-7 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

<!--КОНЕЦ БЛОКА MAIN-->

<!--НАЧАЛО БЛОКА FEATURES-->

    <section id="features">
        <div class="container">
            <div class="features-numbers">
                <div class="features-numbers__block">
                    <h2 class="features-number__topic" >5 лет</h2>
                    <p class="features-number__description">На рынке изделий из гофрокартона</p>
                </div>
                <!-- /.features-numbers__block -->
                <div class="features-numbers__block">
                    <h2 class="features-number__topic">до 5 000 000 м<sup class="features-mark">2</sup></h2>
                    <p class="features-number__description">Ежемесячный объем производства<br> гофрокартона</p>
                </div>
                <!-- /.features-numbers__block -->
                <div class="features-numbers__block">
                    <h2 class="features-number__topic">4 000 м<sup class="features-mark">2</sup></h2>
                    <p class="features-number__description">Площадь склада</p>
                </div>
                <!-- /.features-numbers__block -->
            </div>
            <!-- /.features-numbers -->
        <div class="features-cards">
                <div class="features-card__slip wow fadeInUp" data-wow-delay="0.2s">
                    <div class="features-img__left">
                        <img src="img/Feartures/Plant.png" alt="Производство">
                </div>
                <!-- /.features-img__left -->
                        <h4 class="features-item" >Производство</h4>
                        <p class="features-text" >4 технологические линии способны выполнить любой заказ любой сложности</p> 
                </div>
                <!-- /.features-card__slip -->
                <div class="features-card__slip wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-img__left">
                        <img src="img/Feartures/free_simples.png" alt="Бесплатные образцы">
                    </div>
                    <!-- /.features-img__left -->
                        <h4 class="features-item">Бесплатные образцы</h4>
                        <p class="features-text">Бесплатно делаем образцы гофроупаковки - это помогает заранее увидеть упаковку</p> 
                </div>
                <!-- /.features-card__slip -->
                <div class="features-card__slip card__slip wow fadeInUp" data-wow-delay="0.6s">
                    <div class="features-img__left">
                        <img src="img/Feartures/quality.png" alt="Стабильное качество">
                    </div>
                    <!-- /.features-img__left -->
                        <h4 class="features-item">Стабильное качество</h4>
                        <p class="features-text">Собственная лаборатория кон- тролирует качество на каждом этапе производства</p> 
                </div>
                <!-- /.features-card__slip -->
                <div class="features-card__slip card__slip wow fadeInUp" data-wow-delay="0.8s">
                    <div class="features-img__left">
                        <img src="img/Feartures/insure_inventory.png" alt="Страховой запас">
                    </div>
                    <!-- /.features-img__left -->
                        <h4 class="features-item">Страховой запас</h4>
                        <p class="features-text">Можем хранить запас гофро- продукции на своих складах и поставлять его партиями</p> 
                </div>
                <!-- /.features-card__slip -->
                <div class="features-card__slip card__slip wow fadeInUp" data-wow-delay="1s">
                    <div class="features-img__left">
                        <img src="img/Feartures/flex_print.png" alt="Флексопечать">
                    </div>
                    <!-- /.features-img__left -->
                        <h4 class="features-item">Флексопечать</h4>
                        <p class="features-text">Возможно нанесение вашего логотипа, текста или манипуляционных знаков</p> 
                </div>
                <!-- /.features-card__slip -->
                <div class="features-card__slip card__slip wow fadeInUp" data-wow-delay="1.2s">
                    <div class="features-img__left">
                        <img src="img/Feartures/hydro_adds.png" alt="Гидрофобные добавки">
                    </div>
                    <!-- /.features-img__left -->
                        <h4 class="features-item">Гидрофобные добавки</h4>
                        <p class="features-text">На производстве реализована технология, которая позволяет гофрокартону стать прочнее</p> 
                </div>
                <!-- /.features-card__slip -->
            </div>
            <!-- /.features-cards --> 
        </div>
        <!-- /.container -->
    </section>

<!--КОНЕЦ БЛОКА FEATURES-->  

<!--НАЧАЛО БЛОКА PRODUCTION-->

    <section id="production">
        <div class="container">
            <div class="production-text">
                <h2 class="production-text__goods">наша Продукция</h2>
            </div>
            <!-- /.production-text -->

            <div class="production-wraper">
                <div class="production-card">
                    <div class="production-card__img">
                        <img src="img/Production/crimp-box_4_valve.jpg" alt="Гофорокороб 4-х клапанный">
                    </div>
                    <!-- /.production-card__img -->
                    <p class="production-card__text">Гофрокороб 4-х клапанный</p>
                    <div class="production-card__button">
                        <button class="production-button">Подробнее</button>
                        <button class="production-button button-o">Получить расчет</button>
                    </div>
                    <!-- /.roduction-card__button -->  
                </div>
                <!-- /.production-card -->

                <div class="production-card">
                    <div class="production-card__img">
                        <img src="img/Production/crimp_box.jpg" alt="Гофоролоток">
                    </div>
                    <!-- /.production-card__img -->
                    <p class="production-card__text">Гофролоток</p>
                    <div class="production-card__button">              
                        <button class="production-button">Подробнее</button>
                        <button class="production-button button-o">Получить расчет</button>
                    </div>
                    <!-- /.roduction-card__button -->   
                </div>
                <!-- /.production-card -->

                <div class="production-card">
                    <div class="production-card__img">
                        <img src="img/Production/box_self_assembled.jpg" alt="Гофрокороб самосборный (сложная высечка)">
                    </div>
                    <!-- /.production-card__img -->
                    <p class="production-card__text">Гофрокороб самосборный (сложная высечка)</p>
                    <div class="production-card__button">      
                        <button class="production-button">Подробнее</button>
                        <button class="production-button button-o">Получить расчет</button>
                    </div>
                    <!-- /.roduction-card__button --> 
                </div>
                <!-- /.production-card -->

                <div class="production-card">
                    <div class="production-card__img">
                        <img src="img/Production/box_sheet.jpg" alt="Листовой гофрокартон">
                    </div>
                    <!-- /.production-card__img -->
                    <p class="production-card__text">Листовой гофрокартон</p>
                    <div class="production-card__button">      
                        <button class="production-button">Подробнее</button>
                        <button class="production-button button-o">Получить расчет</button>
                    </div>
                    <!-- /.roduction-card__button --> 
                </div>
                <!-- /.production-card -->
            </div>
            <!-- /.production-wraper -->
        </div>
        <!-- /.container -->
    </section>

<!--КОНЕЦ БЛОКА PRODUCTION-->

<!--НАЧАЛО БЛОКА ORDER-->

    <section id="order">
        <div class="container">
            <div class="order-text">
                <p class="order-text__get">Получите индивидуальное предложение</p>
                <p class="order-text__simple">на производство и поставку изделий</p>
                <form id="form" class="order-text__form" action="mailer/smart.php" method="POST">
                    <label class="order-text__label" for="tel1">Введите ваш номер телефона:</label>
                    <input class="order-text__inputphone" id="tel1" autocomplete="off" type="tel" name="user__phone" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" required>
                    <button type="submit" class="order-text__button">Оставить заявку!</button>
                </form>
                <!-- /.order-text__form -->
                <span class="order-text__minorder">*Минимальный заказ 500шт</span>
            </div>
            <!-- /.order-text -->
        </div>
        <!-- /.container -->
    </section>

    <!--НАЧАЛО БЛОКА PRODUCTS-SLIDER-->

    <section id="products">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 order-2 col-md-12 order-md-2 col-lg-7 order-lg-1 col-xl-7 order-xl-1">
                    <div class="products-slider__top">
                        <img src="img/Products-slider/slider_main.jpg" alt="Гофоропродукция">
                        <img src="img/Products-slider/gofro-slider-one.jpg" alt="Гофоропродукция">
                        <img src="img/Products-slider/gofro-slider-two.jpg" alt="Гофоропродукция">
                        <img src="img/Products-slider/gofro-slider-three.jpg" alt="Гофоропродукция">
                        <img src="img/Products-slider/gofro-slider-four.jpg" alt="Гофоропродукция">
                        <img src="img/Products-slider/gofro-slider-five.jpg" alt="Гофоропродукция">
                    </div>
                    <!-- /.products-slider__top -->
                    <div class="products-slider__bottom">
                        <div class="products-slider__item">
                            <img src="img/Products-slider/slider_main.jpg" alt="Гофоропродукция">
                        </div>
                        <!-- /.products-slider__item -->
                        <div class="products-slider__item">
                            <img src="img/Products-slider/gofro-slider-one.jpg" alt="Гофоропродукция">
                        </div>
                        <!-- /.products-slider__item -->
                        <div class="products-slider__item">
                            <img src="img/Products-slider/gofro-slider-two.jpg" alt="Гофоропродукция">
                        </div>
                        <!-- /.products-slider__item -->
                        <div class="products-slider__item">
                            <img src="img/Products-slider/gofro-slider-three.jpg" alt="Гофоропродукция">
                        </div>
                        <!-- /.products-slider__item -->
                        <div class="products-slider__item">
                            <img src="img/Products-slider/gofro-slider-four.jpg" alt="Гофоропродукция">
                        </div>
                        <!-- /.products-slider__item -->
                        <div class="products-slider__item">
                            <img src="img/Products-slider/gofro-slider-five.jpg" alt="Гофоропродукция">
                        </div>
                        <!-- /.products-slider__item -->
                    </div>
                    <!-- /.products-slider__bottom -->
                </div>
                <!-- /.col-7 -->
                <div class="col-12 order-1 col-md-12 order-md-1 col-lg-5 order-lg-2 col-xl-5 order-xl-1">
                    <div class="products-text">
                        <h2 class="products-text__head wow flipInY">Производство</h2>
                        <p class="products-text__description">Современное оборудование позволяет производить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.</p>
                        <p class="products-text__description">Досконально прорабатываем конструкции коробов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.</p>
                        <p class="products-text__description">Возможно нанесение цветной флексопечати на поверхность коробов.</p>
                    </div>
                    <!-- /.products-text -->

                </div>
                <!-- /.col-5 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

     <!--КОНЕЦ БЛОКА PRODUCTS-SLIDER-->

      <!--НАЧАЛО БЛОКА CUSTOMERS-->

    <section id="customers">
        <div class="container">
            <div class="customers-text">
                <h2 class="customers-text__head">Наши клиенты</h2>
            </div>
            <!-- /.customers-text -->
            <div class="customers-wraper">
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/rise_icon_1.png" alt="Восход">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/sterh_icon_2.png" alt="Стерх">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/silversnow_icon_3.png" alt="Серебряный снег">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/avdon_icon_4.png" alt="Авдон">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/chicken_icon_5.png" alt="Турбаслинские бройлеры">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/bash_icecream_icon_6.png" alt="Башкирское мороженое">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/allat_icon_7.png" alt="Аллат">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/alternative_icon_8.png" alt="Альтернатива">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/pavos_icon_9.png" alt="Индюшкин">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/salavatglass_icon_10.png" alt="Салаватстекло">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/milk_farmer_11.png" alt="Молочный фермер">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
                <div class="customers-card">
                    <div class="customers-card__img">
                        <img src="img/Customers/megi_icon_12.png" alt="Меги">
                    </div>
                    <!-- /.customers-card__img --> 
                </div>
                <!-- /.customers-card -->
            </div>
            <!-- /.customers-wraper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.customers -->

    <!--КОНЕЦ БЛОКА CUSTOMERS-->

    <!--НАЧАЛО БЛОКА FEEDBACK-->

    <section id="feedback">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feedback-text">
                        <h2 class="feedback-text__head">Отзывы о сотрудничестве</h2>
                    </div>
                    <!-- /.feedback-text -->
                    <div class="feedback-slider">
                        <div class="feedback-slider_img">
                            <img src="img/Feedback/feedback-img1.png" alt="Отзыв 1">
                        </div>
                        <!-- /.feedback-slider_img -->
                        <div class="feedback-slider_img">
                            <img src="img/Feedback/feedback-img2.png" alt="Отзыв 2">
                        </div>
                        <!-- /.feedback-slider_img -->
                        <div class="feedback-slider_img">
                            <img src="img/Feedback/feedback-img3.png" alt="Отзыв 3">
                        </div>
                        <!-- /.feedback-slider_img -->
                        <div class="feedback-slider_img">
                            <img src="img/Feedback/feedback-img1.png" alt="Отзыв 1">
                        </div>
                        <!-- /.feedback-slider_img -->
                        <div class="feedback-slider_img">
                            <img src="img/Feedback/feedback-img2.png" alt="Отзыв 2">
                        </div>
                        <!-- /.feedback-slider_img -->
                        <div class="feedback-slider_img">
                            <img src="img/Feedback/feedback-img3.png" alt="Отзыв 3">
                        </div>
                        <!-- /.feedback-slider_img -->
                    </div>
                    <!-- /.feedback-slider -->
        
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.feedback -->

    <!--КОНЕЦ БЛОКА FEEDBACK-->

    <!--НАЧАЛО БЛОКА CONTACTS-->

    <section id="contacts">
        <div class="contacts-item">
            <h2 class="contacts-title">контакты</h2>
            <div class="contacts-item__adress">
                <span class="contacts-item__title">Адрес офиса</span>
                <br>
                <span class="contacts-item__subtitle">г. Уфа, Проспект Октября, 46</span>
                <br>
                <span class="contacts-item__title">Адрес склада</span>
                <br>
                <span class="contacts-item__subtitle">г. Уфа, ул. Майкопская, 65/2</span>
            </div>
            <!-- /.contacts-item__adress -->
            <div class="contacts-item__phone">
                <span class="contacts-item__title">Тел. отдела продаж:</span>
                <br>
                <a href="tel:8(347)2715428"><span class="contacts-item__subtitle">8 (347) 271-54-28</span></a>
                <br>
                <a href="tel:8(937)3633000"><span class="contacts-item__subtitle">8 (937) 363-30-00</span></a>
            </div>
            <!-- /.contacts-item__phone -->
            <div class="contacts-item__button">
                <button type="submit" class="contacts-button">Заказать звонок</button>
            </div>
            <!-- /.contacts-item__button -->
            <div class="contacts-item__mail">
                <span class="contacts-item__title">Е-mail</span>
                <br>
                <a href="mailto:urals.karton@gmail.com"><span class="contacts-item__subtitle">urals.karton@gmail.com</span></a>
            </div>
            <!-- /.contacts-item__mail -->
        </div>
        <!-- /.contacts-item -->
        <div class="contacts-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1c5d7ae69cb72d617559afd6072c7289794de00742c8d892124935a71afa173c&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
        <!-- /.contacts-map -->
    </section>
    <!--КОНЕЦ БЛОКА CONTACTS-->
</main>

<footer>
    <section id="footer">
        <p class="footer-text">&copy; www.gofra-ural.ru 2016, все права защищены</p>
    </section> 
</footer>

    <script src="js/wow.min.js"></script>
    <script> 
        new WOW().init();
    </script>
    <script src="js/jquery-3.3.1.min.js/jquery-3.3.1.min.js"></script> <!--Подключение jquery-->
    <script src="slick/slick.min.js"></script> <!--Подключение slick-slider-->
    <!--Инициализация слайдера-->
    <script>
        $(document).ready(function(){
            $('.products-slider__top').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                cssEase: 'linear',
                asNavFor: '.products-slider__bottom',
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            prevArrow:'<div class="slider-arrow slider-arrow_left"></div>',
                            nextArrow:'<div class="slider-arrow slider-arrow_right"></div>'
                        }
                    }
                ]            
            });

            $('.products-slider__bottom').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                prevArrow:'<div class="slider-arrow slider-arrow_left"></div>',
                nextArrow:'<div class="slider-arrow slider-arrow_right"></div>',
                asNavFor: '.products-slider__top',
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1    
                        }
                    }
                ]
            });

            // подключение слайдера с отзывами

            $('.feedback-slider').slick({
                infinite: true,
                arrows: true,
                focusOnSelect: true,
                prevArrow:'<div class="slider-feedback-arrow slider-feedback-arrow_left"></div>',
                nextArrow:'<div class="slider-feedback-arrow slider-feedback-arrow_right"></div>',
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991.98,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 767.98,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]       
            });

        // Анимация гамбургер меню и открытие самого меню на экранах от 768рх

            $(document).ready(function() {
                $('.menu-btn__dec').click(function(event) {
                $('.menu-btn__dec, .menu-mobile').toggleClass('active');
                $('body').toggleClass('lock')
            });
        });
            $(document).ready(function() {
                $('.menu-mobile__item__wrapper').click(function(event) {
                $('.menu-btn__dec, .menu-mobile').removeClass('active');
                $('body').removeClass('lock')
            });
        });
    });
    </script>

    <!--Подключена маска телефона-->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
        jQuery(function($){
        $('.main-text__inputphone, .order-text__inputphone, .popup__inputphone').mask('+7 (999) 999-99-99');
     });
    </script>
    <script src="js/jquery.magnific-popup.js"></script>

        <!-- Открытие/закрытие модального окна -->

    <script>
        $(document).ready(function() {
          $('.header-text__button, .contacts-button').click(function() {
          $('.overlay').slideDown(400); 
            });
        });
        $(document).ready(function() {
          $('.popup-cross').click(function() {
          $('.overlay').slideUp(400);
            });
        });
    </script>

    <!--Почта-->
    <script>
        $('form').submit(function(event) {
            event.preventDefault();
            if ($('.overlay').css("display", "block"))
                $(".overlay").css("display", "none");
            $.ajax({
                type: "POST",
                url: "mailer/smart.php",
                data: $(this).serialize()
                }).done(function() {
                    $(this).find("input").val("");
                    alert("Заявка успешно подана");
                    $("form").trigger("reset");
                });
                return false;
        });
    </script>

</body>
</html>