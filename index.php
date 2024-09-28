<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=380"> -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var isMobile = /Mobi|Android/i.test(navigator.userAgent);
            if (isMobile) {
                var metaViewport = document.createElement('meta');
                metaViewport.name = "viewport";
                metaViewport.content = "width=380";
                document.head.appendChild(metaViewport);
            }
        });
    </script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1428378791175443');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1428378791175443&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <title>Авторський курс Анастасії Унгурян</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const scrollButtons = document.querySelectorAll('.scroll-button');

            scrollButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Отримати другу назву класу
                    const classList = Array.from(button.classList);
                    const targetClass = classList.find(cls => cls.startsWith('target'));

                    if (targetClass) {
                        const targetElement = document.getElementById(targetClass);

                        if (targetElement) {
                            targetElement.scrollIntoView({ behavior: 'smooth' });
                        } else {
                            console.error(`Element with id ${targetClass} not found.`);
                        }
                    } else {
                        console.error(`Target class not found in class list: ${classList}`);
                    }
                });
            });
        });
    </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>  
<?php require 'update-date.php'?>
  <?php require 'way-for-pay/redirect-to-way-for-pay.php'?>
           <form style='display:none' method="post" id="way-for-pay-form" action="https://secure.wayforpay.com/pay">
              <?php foreach ($data as $key => $value):?>
                  <input type="hidden" name="<?php echo $key ?>" value="<?php echo $value ?>">
              <?php endforeach?>
              <button type="submit"></button>
          </form>
    <header>
        <img src="img/10350887 1.svg" alt="" class="right_header_img_top">
        <section class="section_block">
            <div class="head_top">
                <div class="head_top_item scroll-button target1">
                    Як проходить курс
                </div>
                <div class="head_top_item scroll-button target2">
                    Результати та відгуки
                </div>
                <div class="head_top_item scroll-button target3">
                    Часті запитання
                </div>
            </div>
            <div class="header_main">


                <div class="header_main_left">
                    <div class="header_title title">
                        АВТОРСЬКИЙ <br>
                        КУРС <span class="pink_color"> СХУДНЕННЯ</span>
                    </div>
                    <div class="header_left_text">

                        Отримуй доступ по акційній <br>
                        ціні прямо зараз
                    </div>
                    <div class="header_cost_top">
                        790 ГРН
                    </div>
                    <div class="header_cost_bottom">
                        2600 ГРН
                        <div class="header_cost_bottom_line">

                        </div>
                    </div>

                    <div class="left" style="display: flex;">
                        <div class="header_order_block" style="position: relative;">
                            <img src="img/transparent_background_with_isolated_green_leaf_g_1_3_1 1.png" alt=""
                                class="img_header_leaf">
                                <a class="js-pay">
                            <div class="header_button">
                                Отримати зі знижкою
                            </div>
                            </a>
                            <div class="header_lost" style="padding:0">

                                <div class="header_lost_clock">
                                    <div class="header_lost_text">
                                        <img src="img/SportStopwatch.png" alt="">
                                    </div>
                                    <div class="timer">
                                        <p> До підняття цін: <span class="hours">00</span> : <span
                                                class="minutes">00</span> :
                                            <span class="seconds">00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <script>
                    function updateTimer(timer) {
                        const now = new Date();
                        const tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
                        const timeDifference = tomorrow - now;

                        const hours = Math.floor(timeDifference / (1000 * 60 * 60));
                        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                        timer.querySelector('.hours').textContent = String(hours).padStart(2, '0');
                        timer.querySelector('.minutes').textContent = String(minutes).padStart(2, '0');
                        timer.querySelector('.seconds').textContent = String(seconds).padStart(2, '0');
                    }

                    function startTimers() {
                        const timers = document.querySelectorAll('.timer');
                        timers.forEach(timer => {
                            updateTimer(timer);
                            setInterval(() => updateTimer(timer), 1000);
                        });
                    }

                    // Початкове оновлення і запуск таймерів
                    document.addEventListener('DOMContentLoaded', startTimers);
                </script>
                <div class="header_main_right">

                    <div class="header_right_plashka_one header_right_plashka">
                        <div class="plashka_one_img">
                            <img src="img/Group 223.png" alt="">
                        </div>
                        <div class="header_plashka_big_text">
                            100
                        </div>
                        <div class="header_plashka_small_text">
                            Рецептів від <br>
                            нутриціолога <br>
                            у подарунок
                        </div>
                    </div>
                    <div class="header_right_plashka_two header_right_plashka">

                        <div class="header_plashka_big_text">
                            16
                        </div>
                        <div class="header_plashka_small_text">
                            Онлайн тренувань від <br>
                            сертифікованого тренера <br>
                            Анастасії Унгурян
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </header>

    <div class="audience">
        <img src="img/leaf2.png" alt="" class="leaf2">

        <div class="section_title title">
            <span class="pink_color"> ДЛЯ КОГО</span> КУРС
        </div>
        <div class="audience_block">
            <div class="audience_item">
                <div class="audience_item_title">
                    Для всіх, хто хоче
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Схуднути від 3 до 40 кг, набрати мʼязову <br>
                            масу, просушитись та загалом створити<br>
                            тіло своєї мої
                        </li>
                        <li>
                            Підтягнути всі мʼязи тіла, округлити сідниці,<br>
                            позбутись випираючого животика, целюлі<br>
                            та зробити пружною свою шкіру
                        </li>
                        <li>
                            Займатись де і коли тобі зручно - вдома,<br>
                            на вулиці чи в залі, тренування завжди<br>
                            з тобою в твоєму телефоні
                        </li>
                    </ul>
                </div>
                <img src="img/audience1.png" alt="">
            </div>

            <div class="audience_item">
                <div class="audience_item_title">
                    Не прийшов до результату
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Були вже не на 1 марафоні і не було<br>
                            результату, або ж вага потім<br>
                            поверталась ще більше
                        </li>
                        <li>
                            Курс складено таким чином, що<br>
                            результат буде у кожної учасниці,<br>
                            при належному підході
                        </li>
                        <li>
                            Детальне пояснення кожної вправи.<br>
                            Меню в якому більше 100 рецептів<br>
                            для всієї сімʼї. Лекції та прямі ефіри
                        </li>
                    </ul>
                </div>
                <img src="img/audience2.png" alt="">
            </div>

            <div class="audience_item">
                <div class="audience_item_title">
                    Мучить випираючий животик
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Спеціальні вправи для глибоких мʼязів<br>
                            живота, які необхідні для того щоб животик<br>
                            був плоским та не випирав
                        </li>
                        <li>
                            Вправи для мʼязів тазового дна, дуже важливі<br>
                            для жіночого здоровʼя. Послаблені МТД також<br>
                            є однією з причин випираючого живота
                        </li>
                        <li>
                            Лікувальна фізична культура для Вашої<br>
                            постави, адже ми всі маємо постійне<br>
                            навантаження на мʼязи спини
                        </li>
                    </ul>
                </div>
                <img src="img/audience3.png" alt="">

            </div>

            <div class="audience_item" style="position: relative;">
                <img src="img/leaf3.png" alt="" class="leaf3">
                <div class="audience_item_title">
                    Стомився від жорстоких дієт
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Жодних дієт на гречці з водою чи кефірі.<br>
                            Повноцінне збалансоване харчування.<br>
                            Безліч цікавих рецептів
                        </li>
                        <li>
                            Меню складене так, щоб кожний знайшов<br>
                            для себе смачні, цікаві, та водночас<br>
                            прості страви
                        </li>
                        <li>
                            Вам не прийдеться готувати окремо<br>
                            для себе та своєї сімʼї, харчування буде<br>
                            корисним для Ваших рідних
                        </li>
                    </ul>
                </div>
                <img src="img/audience4.png" alt="">
            </div>

        </div>
        <!-- <img src="img/pink_back_top.png" class="pink_back_top_img" alt=""> -->
    </div>

    <div class="course" style="position: relative;">
        <img src="img/line2.png" class="line2" alt="">
        <img src="img/pink_back_course.png" alt="" class="pink_back_course">
        <div class="course_title title" id="target1">
            ЯК ПРОХОДИТЬ КУРС
        </div>
        <div class="course_block">
            <div class="course_item">
                <div class="coursur_item_img_top coursur_item_img_top1">
                    <img src="img/course1.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block" >
                    <div class="course_item_title">
                        <span class="pink_color">Довічний доступ до чату</span>
                    </div>
                    <div class="course_item_text">
                        Надаємо відповіді на питання в чаті <br>
                        спілкування та ділимось результатами одна <br>
                        з одною + своїми кулінарними шедеврами
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item">
                <div class="coursur_item_img_top coursur_item_img_top2">
                    <img src="img/course2.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">Тренування по 40-50 хвилин</span>
                    </div>
                    <div class="course_item_text">
                    Відео зручні для перегляду, гарно <br>
змонтовані + з розминками та паузами <br>
між вправами
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item">
                <div class="coursur_item_img_top coursur_item_img_top3">
                    <img src="img/course3.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">Все в 1 зручному місці</span>
                    </div>
                    <div class="course_item_text">
                    Всі навчальні матеріали знаходять в боті, <br>
яким дуже зручно користуватись
<br> <br>

                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item">
                <div class="coursur_item_img_top coursur_item_img_top4">
                    <img src="img/course4.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">Доступ до курсу 60 днів</span>
                    </div>
                    <div class="course_item_text">
                    Доступ 60 днів до 16 тренувань! Тренування <br>
в зручному форматі «повторюй за мною» <br>
З детальним поясненням кожної вправи!
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item">
                <div class="coursur_item_img_top coursur_item_img_top5">
                    <img src="img/course5.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">+ 29 допоміжних відео уроків!</span>
                    </div>
                    <div class="course_item_text">
                    Вправи для початківців ЛФК, для укріплення <br>
МТД, поперечного м'язу живота, стрейчинг <br>
та вправи при діастазі
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item">
                <div class="coursur_item_img_top coursur_item_img_top6">
                    <img src="img/course6.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">100 рецептів + гайд по целюліту </span>
                    
                    </div>
                    <div class="course_item_text">
                    Смачне та збалансоване меню, включає <br>
в себе більше 100 рецептів! Всі навчальні <br>
матеріали знаходять в боті
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
          
        </div>
    </div>

    <div class="after_course">
        <!-- <img src="img/pink_back_bottom.png" class="pink_back_bottom_img" alt=""> -->

        <div class="after_title title">
            <span class="pink_color"> ПІСЛЯ КУРСУ </span> ВИ
        </div>
        <img src="img/girl_circle2.png" alt="" class="after_img">
        <div class="after_block">

            <div class="after_text_first_row">
                <div class="after_left">
                    Отримаєте здорове та спортивне <br>
                    тіло на все життя, завдяки новим <br>
                    правильним звичкам
                </div>
                <div class="after_right" style="position: relative;">
                    <img src="img/leaf4.png" alt="" class="leaf4">
                    Округлите свої сіднички та <br>
                    нарешті відчуєте на тренуваннях <br>
                    мʼязи сідниць, а не ніг
                </div>
            </div>
            <div class="after_text_second_row">
                <div class="after_left">
                    Покращите своє загальне <br>
                    самопочуття та станете <br>
                    енергійніше та продуктивніше
                </div>
                <div class="after_right">
                    Позбудетесь надлишкової <br>
                    ваги, забудете про целюліт <br>
                    та дряблість тіла!
                </div>
            </div>
            <div class="after_text_third_row">
                <div class="after_left">
                    Зрозумієте, що здорова їжа <br>
                    це смачно та різноманітно! <br>
                    І жодних голодувань
                </div>
                <div class="after_right">
                    Підвищите самооцінку та <br>
                    будете більше подобатись <br>
                    собі та дзеркалі
                </div>
            </div>
        </div>
        <div class="after_button" style="position: relative;">
            <img src="img/leaf5.png" alt="" class="leaf5">
            <a class="js-pay">
            <div class="header_button">
                Отримати зі знижкою
            </div>
            </a>
            <div class="header_lost">
                <div class="header_lost_text">
                    <img src="img/SportStopwatch.png" alt="">
                    <div class="timer">
                        <p> До підняття цін: <span class="hours">00</span> : <span class="minutes">00</span> : <span
                                class="seconds">00</span>
                        </p>
                    </div>
                </div>
                <div class="header_lost_clock">

                </div>
            </div>
        </div>
    </div>

    <div class="authors">
        <img src="img/line3.png" alt="" class="line3">
        <div class="autors_title title">
            ПРО <span class="pink_color"> АВТОРІВ</span>
        </div>
        <div class="authors_block">
            <div class="authors_left">
                <div class="authors_photo" style="position: relative;">
                    <img src="img/leaf6.png" alt="" class="leaf6">
                    <img src="img/author_girl.png" alt="">
                </div>
                <div class="authors_text_block">
                    <div class="authors_subtitle">
                        Анастасія <br>
                        Унгурян
                    </div>
                    <ul class="authors_text">
                        <li class="li_authors1">
                            <img src="img/auth1.png" alt="">
                            <p>
                                Сертифікований <br>
                                фітнес тренер
                            </p>
                        </li>
                        <li class="li_authors2">
                            <img src="img/auth2.png" alt="">
                            <p>
                                Покращила фігури <br>
                                більше 10.000 дівчат
                            </p>
                        </li>
                        <li class="li_authors3">
                            <img src="img/auth3.png" alt="">
                            <p>
                                Мама, яка знає все <br>
                                на власному досвіді
                            </p>
                        </li>
                        <li class="li_authors4">
                            <img src="img/auth4.png" alt="">
                            <p>
                                Треную дівчат <br>
                                зі всього світу
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="authors_right">
                <div class="authors_photo">
                    <img src="img/author_man.png" style="width: 272px;" alt="">
                </div>
                <div class="authors_text_block">
                    <div class="authors_subtitle">
                        Олександр <br>
                        Унгурян
                    </div>
                    <ul class="authors_text">
                        <li class="li_authors1">
                            <img src="img/auth5.png" alt="">
                            <p>
                                Сертифікований <br>
                                нутриціолог
                            </p>
                        </li>
                        <li class="li_authors2">
                            <img src="img/auth6.png" alt="">
                            <p>
                                Дозволяю їсти багато, <br>
                                при цьому ви худнете
                            </p>
                        </li>
                        <li class="li_authors3">
                            <img src="img/auth7.png" alt="">
                            <p>
                                Мої учениці скинули <br>
                                41237 кг
                            </p>
                        </li>
                        <li class="li_authors4">
                            <img src="img/auth8.png" alt="">
                            <p>
                                Працюю з членами <br>
                                олімпійської збірної
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="result" id="target2">
        <div class="result_title title">
            <span class="pink_color"> РЕЗУЛЬТАТИ</span> ДІВЧАТ
        </div>
        <div class="result_block" style="position: relative;">
            <img src="img/leaf7.png" alt="" class="leaf7">
            <img src="img/leaf8.png" alt="" class="leaf8">

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="img/res/IMG_0619.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0620.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0621.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0641.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0642.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0643.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0653.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0990.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0738.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0991.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="img/res/IMG_0992.jpg" alt=""></div>

                    <!-- Додайте стільки слайдів, скільки потрібно -->
                </div>

            </div>
            <!-- Якщо вам потрібні стрілки навігації -->

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <div class="swiper-pagination"></div>
            <style>
                .swiper-pagination-bullet-active {
                    background: #FF4DF7;
                }

                .swiper-button-next {
                    right: 27%;
                    /* Зміщення правої стрілки */
                }

                .swiper-button-prev {
                    left: 27%;
                    /* Зміщення лівої стрілки */
                }

                .swiper-pagination {
                    bottom: -25px !important;
                }

                .swiper-button-next,
                .swiper-button-prev {
                    color: #000;
                }

                .swiper-container {
                    width: 34%;
                    height: auto;
                    overflow: hidden;
                    border-radius: 30px;
                    position: relative;
                }

                .swiper-slide {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 18px;
                    color: #fff;
                    background: #333;
                    border-radius: 10px;
                }

                .swiper-pagination {
                    position: absolute;
                    text-align: center;
                    transition: .3s opacity;
                    transform: translate3d(0, 0, 0);
                    z-index: 10;
                }

                .swiper-pagination-bullet {
                    width: 8px;
                    height: 8px;
                    display: inline-block;
                    border-radius: 100%;
                    background: rgba(0, 0, 0, 0.2);
                }

                .swiper-pagination-bullet-active {
                    background: #FF4DF7;
                }
            </style>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var swiper = new Swiper('.swiper-container', {
                        loop: true, // Безкінечний цикл
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        // autoplay: {
                        //     delay: 2500,
                        //     disableOnInteraction: false,
                        // },
                        // Інші налаштування
                    });
                });
            </script>
        </div>
    </div>

    <div class="revies">
        <div class="revies_title title">
            <span class="pink_color"> ВІДГУКИ </span> УЧАСНИЦЬ
        </div>
        <div class="revies_block">
            <div class="revies_item">
                <img src="img/rev1.svg" alt="">
            </div>
            <div class="revies_item revies_item_center">
                <img src="img/rev2.svg" alt="">
            </div>
            <div class="revies_item">
                <img src="img/rev3.svg" alt="">
            </div>
        </div>
    </div>

    <div class="video" style="position: relative;">
        <img src="img/line4.png" alt="" class="line4">
        <img src="img/line3.svg" alt="" class="line5">
        <img src="img/pink_back_video.png" alt="" class="back_video_pink">
        <div class="video_title title">
            ВІДЕО ВІДГУК
        </div>
        <video class="video_block" controls="" poster="img/poster.jpg" src="IMG_6892.MP4"></video>
    </div>

    <div class="questions" id="target3">
        <div class="questions_title title" style="position: relative;">
            <span class="pink_color">ЗАПИТАННЯ</span> ВІД УЧНІВ
            <img src="img/leaf9.png" alt="" class="leaf9">
        </div>
        <div class="quest_block">

            <div class="quest_left">

                <img src="img/quest_left.png" style="border-radius: 24px;" alt="">
            </div>
            <div class="quest_right">
                <div class="quest_top">

                    <div id="accordiontwo" class="accordiontwo">
                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Що після оплати? </div>
                            <div class="accordiontwo__body collapse" style="">
                                <div class="accordiontwo__content">
                                    Вам надходить запрошення на пошту! Будь ласка,перевіряйте пошту протягом 1 години
                                </div>
                            </div>
                        </div>
                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Коли старт марафону? </div>
                            <div class="accordiontwo__body">
                                <div class="accordiontwo__content">
                                    Усі матеріали уже є на каналі,а також є детальна інструкція по проходженню марафону
                                    + я та дієтолог завжди є на звʼязку і готові відповісти на усі питання
                                </div>
                            </div>
                        </div>

                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Який необхідний інвентар? </div>
                            <div class="accordiontwo__body">
                                <div class="accordiontwo__content">
                                    Найголовніше це Ваше бажання! <br>
                                    Коврик (можна замінити рушником) Резинки Гантелі (можна замінити бутилками з водою )
                                    Кухонна вага (можна замінити мірним стаканом, або виміряти в ложках)

                                </div>
                            </div>
                        </div>
                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Якщо я не вмію рахувати калорії? </div>
                            <div class="accordiontwo__body">
                                <div class="accordiontwo__content">
                                    У нашому меню вже все є пораховано! Але якщо Ви хочете харчуватись за своїм
                                    планом,то наш дієтолог завжди на звʼязкуі допоможе якомога простіше пояснити цей
                                    процес
                                </div>
                            </div>
                        </div>
                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Не виходить оплата на сайті? </div>
                            <div class="accordiontwo__body">
                                <div class="accordiontwo__content">
                                    Можете написати в особисті повідомлення @anastasia.ungurian
                                </div>
                            </div>
                        </div>
                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Чи можна на гв на марафон? </div>
                            <div class="accordiontwo__body">
                                <div class="accordiontwo__content">
                                    Так! У нас багато дівчаток займаються на гв! Програма тренувань повністю безпечна, а
                                    меню збалансоване та поживне, тому це лише плюс на гв
                                </div>
                            </div>
                        </div>
                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Чи можна після пологів? </div>
                            <div class="accordiontwo__body">
                                <div class="accordiontwo__content">
                                    Якщо лікар Вам дозволив відновити тренування ,то навіть потрібно! Т,К у марафоні є
                                    багато вправ, які корисні для відновлення після пологів (при діастазі ,МТД,глибокі
                                    мʼязи живота)
                                </div>
                            </div>
                        </div>

                        <div class="accordiontwo__item">
                            <div class="accordiontwo__header">
                                Чи можу я зменшити діастаз?
                            </div>
                            <div class="accordiontwo__body">
                                <div class="accordiontwo__content">
                                    Так! Читайте відгуки наших дівчат

                                </div>
                            </div>
                        </div>
                    </div>


                    <style>
                        .accordiontwo__item {
                            margin-bottom: 1rem;

                            width: 550px;

                        }

                        /* .accordiontwo__item_show {
                            margin-bottom: 0.5rem;
                            border-radius: 0.25rem;
                            box-shadow: -3px 4px 1px 1px #f36e31;
                            border: 1px solid #fa5407;
                        } */

                        .accordiontwo__header {

                            font-size: 21px;
                            border-bottom: 1px solid #d3d3d3;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            padding: 12px;
                            color: #000;
                            font-weight: 500;

                            cursor: pointer;
                            transition: background-color 0.2s ease-out;
                        }

                        .accordiontwo__header::after {
                            flex-shrink: 0;
                            width: 1.25rem;
                            height: 1.25rem;
                            margin-left: auto;
                            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FF67F8'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
                            background-repeat: no-repeat;
                            background-size: 1.25rem;
                            content: "";
                            transform: rotate(90deg);

                            transition: transform 0.2s ease-out;
                        }

                        .accordiontwo__item_show .accordiontwo__header::after,
                        .accordiontwo__item_slidedown .accordiontwo__header::after {
                            transform: rotate(0deg);
                            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");

                        }

                        .accordiontwo__header:hover {
                            background-color: #FF4DF7;
                            color: #fff;
                        }



                        .accordiontwo__content {
                            padding: 1.75rem 1.5rem;
                            background: #fff;
                            border-bottom-right-radius: 0.25rem;
                            border-bottom-left-radius: 0.25rem;
                        }

                        .accordiontwo__item:not(.accordiontwo__item_show) .accordiontwo__body {
                            display: none;
                        }

                        .accordiontwo__content {
                            font-size: 20px;
                        }
                    </style>
                    <script>
                        class Itcaccordiontwo {
                            constructor(target, config) {
                                this._el = typeof target === 'string' ? document.querySelector(target) : target;
                                const defaultConfig = {
                                    alwaysOpen: true,
                                    duration: 350
                                };
                                this._config = Object.assign(defaultConfig, config);
                                this.addEventListener();
                            }
                            addEventListener() {
                                this._el.addEventListener('click', (e) => {
                                    const elHeader = e.target.closest('.accordiontwo__header');
                                    if (!elHeader) {
                                        return;
                                    }
                                    if (!this._config.alwaysOpen) {
                                        const elOpenItem = this._el.querySelector('.accordiontwo__item_show');
                                        if (elOpenItem) {
                                            elOpenItem !== elHeader.parentElement ? this.toggle(elOpenItem) : null;
                                        }
                                    }
                                    this.toggle(elHeader.parentElement);
                                });
                            }
                            show(el) {
                                const elBody = el.querySelector('.accordiontwo__body');
                                if (elBody.classList.contains('collapsing') || el.classList.contains('accordiontwo__item_show')) {
                                    return;
                                }
                                elBody.style['display'] = 'block';
                                const height = elBody.offsetHeight;
                                elBody.style['height'] = 0;
                                elBody.style['overflow'] = 'hidden';
                                elBody.style['transition'] = `height ${this._config.duration}ms ease`;
                                elBody.classList.add('collapsing');
                                el.classList.add('accordiontwo__item_slidedown');
                                elBody.offsetHeight;
                                elBody.style['height'] = `${height}px`;
                                window.setTimeout(() => {
                                    elBody.classList.remove('collapsing');
                                    el.classList.remove('accordiontwo__item_slidedown');
                                    elBody.classList.add('collapse');
                                    el.classList.add('accordiontwo__item_show');
                                    elBody.style['display'] = '';
                                    elBody.style['height'] = '';
                                    elBody.style['transition'] = '';
                                    elBody.style['overflow'] = '';
                                }, this._config.duration);
                            }
                            hide(el) {
                                const elBody = el.querySelector('.accordiontwo__body');
                                if (elBody.classList.contains('collapsing') || !el.classList.contains('accordiontwo__item_show')) {
                                    return;
                                }
                                elBody.style['height'] = `${elBody.offsetHeight}px`;
                                elBody.offsetHeight;
                                elBody.style['display'] = 'block';
                                elBody.style['height'] = 0;
                                elBody.style['overflow'] = 'hidden';
                                elBody.style['transition'] = `height ${this._config.duration}ms ease`;
                                elBody.classList.remove('collapse');
                                el.classList.remove('accordiontwo__item_show');
                                elBody.classList.add('collapsing');
                                window.setTimeout(() => {
                                    elBody.classList.remove('collapsing');
                                    elBody.classList.add('collapse');
                                    elBody.style['display'] = '';
                                    elBody.style['height'] = '';
                                    elBody.style['transition'] = '';
                                    elBody.style['overflow'] = '';
                                }, this._config.duration);
                            }
                            toggle(el) {
                                el.classList.contains('accordiontwo__item_show') ? this.hide(el) : this.show(el);
                            }
                        }
                    </script>
                    <script>
                        new Itcaccordiontwo(document.querySelector('.accordiontwo'), {
                            alwaysOpen: true
                        });
                    </script>
                </div>
                <div class="quest_bottom" style="position: relative;">
                    <img src="img/leaf10.png" alt="" class="leaf10">
                    <div class="quest_title_bottom title">
                        ОТРИМУЙ ДОСТУП <br>
                        ПО АКЦІЙНІ ЦІНІ <br>
                        ПРЯМО ЗАРАЗ
                    </div>
                    <div class="left" style="display: flex;">
                        <div class="header_order_block" style="position: relative;">
                        <a class="js-pay">
                            <div class="header_button">
                                Отримати зі знижкою
                            </div>
                            </a>
                            <div class="header_lost" style="padding: 0;">

                                <div class="header_lost_clock">
                                    <div class="header_lost_text">
                                        <img src="img/SportStopwatch.png" alt="">
                                    </div>
                                    <div class="timer">
                                        <p> До підняття цін: <span class="hours">00</span> : <span
                                                class="minutes">00</span> :
                                            <span class="seconds">00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer_top">
            <a href="https://docs.google.com/document/d/10WHFwWRodZ1ATVSzyav0BfulFKH0Lf2lLakXN90bI9w/edit#heading=h.soibqh7r9wpo"
                class="policy"> Політика конфіденційності</a>
            <a href="https://docs.google.com/document/d/13NQNhVKJlf4rMbaa7jTTH8rgA-02jcPNm1FdEQr2D3k/edit#heading=h.b9lg4am2yywd"
                class="offerta"> Публічна оферта</a>
            <p>
                (C)2024 усі права захищено
            </p>
        </div>
        <div class="footer_bottom">
            <p>
                ФОП Унгурян Анастасія Артурівна <br>
                ЄДРПОУ 3507409520 <br>
                anastasiaungurian@gmail.com
            </p>
        </div>
    </footer>

















    <div class="header_tel">
        <img src="img/top_img_girl_tel_2.png" alt="" class="img_header_leaf">

        <div class="header_tel_top">
            <div class="header_tel_top_item scroll-button target4">Як проходить курс</div>
            <div class="header_tel_top_item scroll-button target5">Результати та відгуки</div>
            <div class="header_tel_top_item scroll-button target6">Часті запитання</div>
        </div>
        <div class="header_tel_bottom">
            <div class="header_title title">
                АВТОРСЬКИЙ <br>
                КУРС <span class="pink_color"> СХУДНЕННЯ</span>
                <img src="img/elem/leaf1.png" alt="" class="leaf1_tel elem_tel">
            </div>
            <div class="header_left_text">

                Отримуй доступ по акційній <br>
                ціні прямо зараз
            </div>
            <div class="header_cost_top">
                790 ГРН
            </div>
            <div class="header_cost_bottom">
                2600 ГРН
                <div class="header_cost_bottom_line">

                </div>
                <img src="img/elem/line_tel1.svg" alt="" class="line_tel1 elem_tel">
            </div>




            <div class="header_main_right">

                <div class="header_right_plashka_one header_right_plashka">
                    <div class="plashka_one_img">
                        <img src="img/Group 223.png" alt="">
                    </div>
                    <div class="header_plashka_big_text">
                        100
                    </div>
                    <div class="header_plashka_small_text">
                        Рецептів від <br>
                        нутриціолога <br>
                        у подарунок
                    </div>
                </div>
                <div class="header_right_plashka_two header_right_plashka">
                    <img src="img/elem/leaf_tel2.png" alt="" class="leaf_tel2 elem_tel">
                    <div class="header_plashka_big_text">
                        16
                    </div>
                    <div class="header_plashka_small_text">
                        Онлайн тренувань від <br>
                        сертифікованого тренера <br>
                        Анастасії Унгурян
                    </div>
                </div>

            </div>

          
            <div class="left" style="display: flex;">
                <div class="header_order_block" style="position: relative;">
                <a class="js-pay">
                    <div class="header_button">
                        Отримати зі знижкою
                    </div>
                    </a>
                    <div class="header_lost">

                        <div class="header_lost_clock">
                            <div class="header_lost_text">
                                <img src="img/SportStopwatch.png" alt="">
                            </div>
                            <div class="timer">
                                <p> До підняття цін: <span class="hours">00</span> : <span class="minutes">00</span> :
                                    <span class="seconds">00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="audience_tel">


        <div class="section_title title">
            <span class="pink_color"> ДЛЯ КОГО</span> КУРС
        </div>
        <div class="audience_block">
            <div class="audience_item">
                <img src="img/elem/leaf_tel3.png" alt="" class="leaf_tel3 elem_tel">
                <div class="audience_item_title">
                    Для всіх, хто хоче
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Схуднути від 3 до 40 кг, набрати мʼязову
                            масу, просушитись та загалом створити
                            тіло своєї мої
                        </li>
                        <li>
                            Підтягнути всі мʼязи тіла, округлити сідниці,
                            позбутись випираючого животика, целюлі
                            та зробити пружною свою шкіру
                        </li>
                        <li>
                            Займатись де і коли тобі зручно - вдома,
                            на вулиці чи в залі, тренування завжди
                            з тобою в твоєму телефоні
                        </li>
                    </ul>
                </div>
                <img src="img/audience1.png" alt="">
            </div>

            <div class="audience_item">
            <img src="img/elem/leaf_tel4.png" alt="" class="leaf_tel4 elem_tel">
                <div class="audience_item_title">
                    Не прийшов до результату
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Були вже не на 1 марафоні і не було
                            результату, або ж вага потім
                            поверталась ще більше
                        </li>
                        <li>
                            Курс складено таким чином, що
                            результат буде у кожної учасниці,
                            при належному підході
                        </li>
                        <li>
                            Детальне пояснення кожної вправи.
                            Меню в якому більше 100 рецептів
                            для всієї сімʼї. Лекції та прямі ефіри
                        </li>
                    </ul>
                </div>
                <img src="img/audience2.png" alt="">
            </div>

            <div class="audience_item">
            <img src="img/elem/leaf_tel5.png" alt="" class="leaf_tel5 elem_tel">
                <div class="audience_item_title">
                    Мучить випираючий животик
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Спеціальні вправи для глибоких мʼязів
                            живота, які необхідні для того щоб животик
                            був плоским та не випирав
                        </li>
                        <li>
                            Вправи для мʼязів тазового дна, дуже важливі
                            для жіночого здоровʼя. Послаблені МТД також
                            є однією з причин випираючого живота
                        </li>
                        <li>
                            Лікувальна фізична культура для Вашої
                            постави, адже ми всі маємо постійне
                            навантаження на мʼязи спини
                        </li>
                    </ul>
                </div>
                <img src="img/audience3.png" alt="">
            </div>

            <div class="audience_item" style="position: relative;">
                <!-- <img src="img/leaf3.png" alt="" class="leaf3"> -->
                <div class="audience_item_title">
                    Стомився від жорстоких дієт
                </div>
                <div class="audience_item_text">
                    <ul class="audience_item_text_item">
                        <li>
                            Жодних дієт на гречці з водою чи кефірі.
                            Повноцінне збалансоване харчування.
                            Безліч цікавих рецептів
                        </li>
                        <li>
                            Меню складене так, щоб кожний знайшов
                            для себе смачні, цікаві, та водночас
                            прості страви
                        </li>
                        <li>
                            Вам не прийдеться готувати окремо
                            для себе та своєї сімʼї, харчування буде
                            корисним для Ваших рідних
                        </li>
                    </ul>
                </div>
                <img src="img/audience4.png" alt="">
            </div>

        </div>
        <!-- <img src="img/pink_back_top.png" class="pink_back_top_img" alt=""> -->
    </div>

    

    <div class="course_tel" style="position: relative;">
        <!-- <img src="img/line2.png" class="line2" alt=""> -->
         <img src="img/elem/line_tel2.png" alt="" class="line_tel2 elem_tel">
        <img src="img/course_pink_back_tel.png" alt="" class="pink_back_course">
        <div class="course_title title" id="target4">
            ЯК ПРОХОДИТЬ <br> КУРС
        </div>
        <div class="course_block">
            <div class="course_item" style="padding:0 0 53px">
                <div class="coursur_item_img_top coursur_item_img_top1">
                    <img src="img/course1.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">Довічний доступ до чату</span>
                    </div>
                    <div class="course_item_text">
                        Надаємо відповіді на питання в чаті <br>
                        спілкування та ділимось результатами одна <br>
                        з одною + своїми кулінарними шедеврами
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item" style="padding:0 0 93px">
                <div class="coursur_item_img_top coursur_item_img_top2">
                    <img src="img/course2.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">Тренування по 40-50 хвилин</span>
                    </div>
                    <div class="course_item_text">
                    Відео зручні для перегляду, гарно <br>
змонтовані + з розминками та паузами <br>
між вправами
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item" style="padding:0 0 35px">
                <div class="coursur_item_img_top coursur_item_img_top3">
                    <img src="img/course3.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">Все в 1 зручному місці</span>
                    </div>
                    <div class="course_item_text">
                    Всі навчальні матеріали знаходять в боті, <br>
яким дуже зручно користуватись <br> <br>

                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item" style="padding:0 0 72px">
                <div class="coursur_item_img_top coursur_item_img_top4">
                    <img src="img/course4.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">Доступ до курсу 60 днів</span>
                    </div>
                    <div class="course_item_text">
                    Доступ 60 днів до 16 тренувань! Тренування <br>
в зручному форматі «повторюй за мною» <br>
З детальним поясненням кожної вправи! <br>
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item" style="padding:0 0 57px">
                <div class="coursur_item_img_top coursur_item_img_top5">
                    <img src="img/course5.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">+ 29 допоміжних відео уроків!</span>
                    </div>
                    <div class="course_item_text">
                    Вправи для початківців ЛФК, для укріплення <br>
МТД, поперечного м'язу живота, стрейчинг <br>
та вправи при діастазі 
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>
            <div class="course_item">
                <div class="coursur_item_img_top coursur_item_img_top6">
                    <img src="img/course6.png" alt="">
                </div>
                <div class="course_item_img">
                    <img src="img/course_white_plashka.png" alt="">
                </div>
                <div class="course_item_block">
                    <div class="course_item_title">
                        <span class="pink_color">100 рецептів + гайд по целюліту </span>
                    </div>
                    <div class="course_item_text">
                    Смачне та збалансоване меню, включає <br>
в себе більше 100 рецептів! Всі навчальні <br>
матеріали знаходять в боті
                    </div>
                </div>
                <div class="shadow_course_plashka">
                    <img src="img/shadow_course_plashka.png" alt="">
                </div>
            </div>

        </div>
    </div>



    <div class="after_course_tel">
    <img src="img/elem/leaf_tel6.png" alt="" class="leaf_tel6 elem_tel">
        <div class="after_course_title_tel title">
            <span class="pink_color">ПІСЛЯ КУРСУ</span> ВИ
        </div>
        <img src="img/girl_circle3.png" alt="" class="after_course_img_tel">
        <div class="after_course_block_tel">
            <div class="after_course_text_tel">
                <p>Покращите своє загальне самопочуття
                    та станете енергійніше та продуктивніше</p>
                <img src="Vector 30.png" alt="">
                <p>Зрозумієте, що здорова їжа це смачно
                    та різноманітно! І жодних голодувань</p>
                <img src="Vector 30.png" alt="">
                <p>Отримаєте здорове та спортивне тіло
                    на все життя, завдяки правильним звичкам</p>
                <img src="Vector 30.png" alt="">
                <p>Позбудетесь надлишкової ваги,
                    забудете про целюліт та дряблість тіла!</p>
                <img src="Vector 30.png" alt="">
                <p>Підвищите самооцінку та будете
                    більше подобатись собі та дзеркалі</p>
                <img src="Vector 30.png" alt="">
                <p>Округлите сіднички та нарешті відчуєте
                    на тренуваннях мʼязи сідниць, а не ніг</p>
            </div>
        </div>
        <div class="after_button" style="position: relative;">
        <img src="img/elem/leaf_tel7.png" alt="" class="leaf_tel7 elem_tel">
        <a class="js-pay">
            <div class="header_button header_button2">
                Отримати зі знижкою
            </div>
            </a>
            <div class="header_lost">
                <div class="header_lost_text">
                    <img src="img/SportStopwatch.png" alt="">
                    <div class="timer">
                        <p> До підняття цін: <span class="hours">00</span> : <span class="minutes">00</span> : <span
                                class="seconds">00</span>
                        </p>
                    </div>
                </div>
                <div class="header_lost_clock">

                </div>
            </div>
        </div>
    </div>



    <div class="authors_tel" style="position:relative">
    <img src="img/elem/line_tel3.png" alt="" class="line_tel3 elem_tel">
        <div class="autors_title title">
            ПРО <span class="pink_color"> АВТОРІВ</span>
        </div>
        <div class="authors_block">
            <div class="authors_left">
                <div class="authors_photo" style="position: relative;">
                    <img src="img/author_girl.png" alt="">
                </div>
                <div class="authors_text_block">
                    <div class="authors_subtitle">
                        Анастасія <br>
                        Унгурян
                    </div>
                    <ul class="authors_text">
                        <li class="li_authors1">
                            <img src="img/auth1.png" alt="">
                            <p>
                                Сертифікований <br>
                                фітнес тренер
                            </p>
                        </li>
                        <li class="li_authors2">
                            <img src="img/auth2.png" alt="">
                            <p>
                                Покращила фігури <br>
                                більше 10.000 дівчат
                            </p>
                        </li>
                        <li class="li_authors3">
                            <img src="img/auth3.png" alt="">
                            <p>
                                Мама, яка знає все <br>
                                на власному досвіді
                            </p>
                        </li>
                        <li class="li_authors4">
                            <img src="img/auth4.png" alt="">
                            <p>
                                Треную дівчат <br>
                                зі всього світу
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="authors_right">
                <div class="authors_photo">
                    <img src="img/author_man.png" alt="">
                </div>
                <div class="authors_text_block">
                <img src="img/elem/leaf_tel8.png" alt="" class="leaf_tel8 elem_tel">
                    <div class="authors_subtitle">
                        Олександр <br>
                        Унгурян
                    </div>
                    <ul class="authors_text">
                        <li class="li_authors1">
                            <img src="img/auth5.png" alt="">
                            <p>
                                Сертифікований <br>
                                нутриціолог
                            </p>
                        </li>
                        <li class="li_authors2">
                            <img src="img/auth6.png" alt="">
                            <p>
                                Дозволяю їсти багато, <br>
                                при цьому ви худнете
                            </p>
                        </li>
                        <li class="li_authors3">
                            <img src="img/auth7.png" alt="">
                            <p>
                                Мої учениці скинули <br>
                                41237 кг
                            </p>
                        </li>
                        <li class="li_authors4">
                            <img src="img/auth8.png" alt="">
                            <p>
                                Працюю з членами <br>
                                олімпійської збірної
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="result_title result_title_tel title" id="target5">
        <span class="pink_color"> РЕЗУЛЬТАТИ</span> <br> ДІВЧАТ
    </div>
    <div class="result_block2" style="position: relative;">


        <div class="swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/res/IMG_0619.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0620.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0621.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0641.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0642.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0643.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0653.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0990.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0738.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0991.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/res/IMG_0992.jpg" alt=""></div>

                <!-- Додайте стільки слайдів, скільки потрібно -->
            </div>

        </div>
        <!-- Якщо вам потрібні стрілки навігації -->

        <div class="swiper-button-next2">
            <img src="img/arrow_right_tel.png" alt="">
        </div>
        <div class="swiper-button-prev2">
            <img src="img/arrow_left_tel.png" alt="">
        </div>

        <div class="swiper-pagination2"></div>
        <style>
            .swiper-pagination-bullet-active {
                background: #FF4DF7;
            }

            .swiper-button-next2 {
                right: 2%;
                /* Зміщення правої стрілки */
            }

            .swiper-button-prev2 {
                left: 2%;
                /* Зміщення лівої стрілки */
            }

            .swiper-pagination2 {
                bottom: -25px !important;
            }

            .swiper-button-next2,
            .swiper-button-prev2 {
                color: #000;
            }

            .swiper-container2 {
                width: 77%;
                height: auto;
                overflow: hidden;
                border-radius: 10px;

                margin: 0 auto;
            }

            .swiper-slide {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 18px;
                color: #fff;
                background: #333;
                border-radius: 10px;
            }

            .swiper-pagination2 {
                position: absolute;
                text-align: center;
                transition: .3s opacity;
                transform: translate3d(0, 0, 0);
                z-index: 10;
            }

            .swiper-pagination-bullet {
                width: 8px;
                height: 8px;
                display: inline-block;
                border-radius: 100%;
                background: rgba(0, 0, 0, 0.2);
            }

            .swiper-pagination-bullet-active {
                background: #FF4DF7;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper('.swiper-container2', {
                    loop: true, // Безкінечний цикл
                    pagination: {
                        el: '.swiper-pagination2',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next2',
                        prevEl: '.swiper-button-prev2',
                    },
                    // autoplay: {
                    //     delay: 2500,
                    //     disableOnInteraction: false,
                    // },
                    // Інші налаштування
                });
            });
        </script>
    </div>



    <div class="revies_tel" style="position:relative">
    <img src="img/elem/leaf_tel9.png" alt="" class="leaf_tel9 elem_tel">
    <img src="img/elem/line_tel4.png" alt="" class="line_tel4 elem_tel">

        <div class="revies_title title">
            <span class="pink_color"> ВІДГУКИ </span> <br> УЧАСНИЦЬ
        </div>
        <div class="result_block3" style="position: relative;">


            <div class="swiper-container3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: none;"><img src="img/revtel1.png" alt=""></div>
                    <div class="swiper-slide" style="background: none;"><img src="img/revtel2.png" alt=""></div>
                    <div class="swiper-slide" style="background: none;"><img src="img/revtel3.png" alt=""></div>

                    <!-- Додайте стільки слайдів, скільки потрібно -->
                </div>

            </div>
            <!-- Якщо вам потрібні стрілки навігації -->

            <div class="swiper-button-next3">
                <img src="img/arrow_right_tel.png" alt="">
            </div>
            <div class="swiper-button-prev3">
                <img src="img/arrow_left_tel.png" alt="">
            </div>

            <div class="swiper-pagination3"></div>
            <style>
                .swiper-pagination-bullet-active {
                    background: #FF4DF7;
                }

                .swiper-button-next3 {
                    right: 2%;
                    /* Зміщення правої стрілки */
                }

                .swiper-button-prev3 {
                    left: 2%;
                    /* Зміщення лівої стрілки */
                }

                .swiper-pagination3 {
                    bottom: -25px !important;
                }

                .swiper-button-next3,
                .swiper-button-prev3 {
                    color: #000;
                }

                .swiper-container3 {
                    width: 77%;
                    height: auto;
                    overflow: hidden;
                    border-radius: 10px;

                    margin: 0 auto;
                }

                .swiper-slide {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 18px;
                    color: #fff;
                    background: #333;
                    border-radius: 10px;
                }

                .swiper-pagination3 {
                    position: absolute;
                    text-align: center;
                    transition: .3s opacity;
                    transform: translate3d(0, 0, 0);
                    z-index: 10;
                }

                .swiper-pagination-bullet {
                    width: 8px;
                    height: 8px;
                    display: inline-block;
                    border-radius: 100%;
                    background: rgba(0, 0, 0, 0.2);
                }

                .swiper-pagination-bullet-active {
                    background: #FF4DF7;
                }
            </style>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var swiper = new Swiper('.swiper-container3', {
                        loop: true, // Безкінечний цикл
                        pagination: {
                            el: '.swiper-pagination3',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next3',
                            prevEl: '.swiper-button-prev3',
                        },
                        // autoplay: {
                        //     delay: 2500,
                        //     disableOnInteraction: false,
                        // },
                        // Інші налаштування
                    });
                });
            </script>
        </div>
    </div>


    <div style="position:relative" class="pink_back_course_tel_block">
    <img src="img/pink_back_course.png" alt="" class="pink_back_course_tel">
    </div>
    <div class="video_tel" style="position: relative;">
       
        <img src="img/elem/line_tel5.png" alt="" class="line_tel5 elem_tel">

        <div class="video_title title">
            ВІДЕО ВІДГУК
        </div>
        <video class="video_block_tel" controls="" poster="img/poster.jpg" src="IMG_6892.MP4" style=' display: flex;
                    border-radius: 10px;  height:235px'></video>
    </div>


    <div class="questions_tel" id="target6">
        <div class="questions_title title" style="position: relative;">
            <span class="pink_color">ЗАПИТАННЯ</span> <br> ВІД УЧНІВ

        </div>
        <div class="quest_block_tel">

            <div class="quest_block_bottom_tel">
                <div id="accordionthree" class="accordionthree">
                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Що після оплати? </div>
                        <div class="accordionthree__body collapse" style="">
                            <div class="accordionthree__content">
                                Вам надходить запрошення на пошту! Будь ласка,перевіряйте пошту протягом 1 години
                            </div>
                        </div>
                    </div>
                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Коли старт марафону? </div>
                        <div class="accordionthree__body">
                            <div class="accordionthree__content">
                                Усі матеріали уже є на каналі,а також є детальна інструкція по проходженню марафону
                                + я та дієтолог завжди є на звʼязку і готові відповісти на усі питання
                            </div>
                        </div>
                    </div>

                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Який необхідний інвентар? </div>
                        <div class="accordionthree__body">
                            <div class="accordionthree__content">
                                Найголовніше це Ваше бажання! <br>
                                Коврик (можна замінити рушником) Резинки Гантелі (можна замінити бутилками з водою )
                                Кухонна вага (можна замінити мірним стаканом, або виміряти в ложках)

                            </div>
                        </div>
                    </div>
                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Якщо я не вмію рахувати калорії? </div>
                        <div class="accordionthree__body">
                            <div class="accordionthree__content">
                                У нашому меню вже все є пораховано! Але якщо Ви хочете харчуватись за своїм
                                планом,то наш дієтолог завжди на звʼязкуі допоможе якомога простіше пояснити цей
                                процес
                            </div>
                        </div>
                    </div>
                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Не виходить оплата на сайті? </div>
                        <div class="accordionthree__body">
                            <div class="accordionthree__content">
                                Можете написати в особисті повідомлення @anastasia.ungurian
                            </div>
                        </div>
                    </div>
                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Чи можна на гв на марафон? </div>
                        <div class="accordionthree__body">
                            <div class="accordionthree__content">
                                Так! У нас багато дівчаток займаються на гв! Програма тренувань повністю безпечна, а
                                меню збалансоване та поживне, тому це лише плюс на гв
                            </div>
                        </div>
                    </div>
                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Чи можна після пологів? </div>
                        <div class="accordionthree__body">
                            <div class="accordionthree__content">
                                Якщо лікар Вам дозволив відновити тренування ,то навіть потрібно! Т,К у марафоні є
                                багато вправ, які корисні для відновлення після пологів (при діастазі ,МТД,глибокі
                                мʼязи живота)
                            </div>
                        </div>
                    </div>

                    <div class="accordionthree__item">
                        <div class="accordionthree__header">
                            Чи можу я зменшити діастаз?
                        </div>
                        <div class="accordionthree__body">
                            <div class="accordionthree__content">
                                Так! Читайте відгуки наших дівчат

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .accordionthree__item {
            margin-bottom: 1rem;

            width: auto;

        }

        /* .accordionthree__item_show {
            margin-bottom: 0.5rem;
            border-radius: 0.25rem;
            box-shadow: -3px 4px 1px 1px #f36e31;
            border: 1px solid #fa5407;
        } */

        .accordionthree__header {

            font-size: 22px;
            border-bottom: 1px solid #d3d3d3;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px;
            color: #000;
            font-weight: 500;

            cursor: pointer;
            transition: background-color 0.2s ease-out;
        }

        .accordionthree__header::after {
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-left: auto;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FF67F8'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 1.25rem;
            content: "";
            transform: rotate(90deg);
            transition: transform 0.2s ease-out;
        }

        .accordionthree__item_show .accordionthree__header::after,
        .accordionthree__item_slidedown .accordionthree__header::after {
            transform: rotate(-0deg);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");

        }

        .accordionthree__header:hover {
            background-color: #FF4DF7;
            color: #fff;
        }



        .accordionthree__content {
            padding: 1.75rem 1.5rem;
            background: #fff;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .accordionthree__item:not(.accordionthree__item_show) .accordionthree__body {
            display: none;
        }

        .accordionthree__content {
            font-size: 20px;
        }
    </style>
    <script>
        class Itcaccordionthree {
            constructor(target, config) {
                this._el = typeof target === 'string' ? document.querySelector(target) : target;
                const defaultConfig = {
                    alwaysOpen: true,
                    duration: 350
                };
                this._config = Object.assign(defaultConfig, config);
                this.addEventListener();
            }
            addEventListener() {
                this._el.addEventListener('click', (e) => {
                    const elHeader = e.target.closest('.accordionthree__header');
                    if (!elHeader) {
                        return;
                    }
                    if (!this._config.alwaysOpen) {
                        const elOpenItem = this._el.querySelector('.accordionthree__item_show');
                        if (elOpenItem) {
                            elOpenItem !== elHeader.parentElement ? this.toggle(elOpenItem) : null;
                        }
                    }
                    this.toggle(elHeader.parentElement);
                });
            }
            show(el) {
                const elBody = el.querySelector('.accordionthree__body');
                if (elBody.classList.contains('collapsing') || el.classList.contains('accordionthree__item_show')) {
                    return;
                }
                elBody.style['display'] = 'block';
                const height = elBody.offsetHeight;
                elBody.style['height'] = 0;
                elBody.style['overflow'] = 'hidden';
                elBody.style['transition'] = `height ${this._config.duration}ms ease`;
                elBody.classList.add('collapsing');
                el.classList.add('accordionthree__item_slidedown');
                elBody.offsetHeight;
                elBody.style['height'] = `${height}px`;
                window.setTimeout(() => {
                    elBody.classList.remove('collapsing');
                    el.classList.remove('accordionthree__item_slidedown');
                    elBody.classList.add('collapse');
                    el.classList.add('accordionthree__item_show');
                    elBody.style['display'] = '';
                    elBody.style['height'] = '';
                    elBody.style['transition'] = '';
                    elBody.style['overflow'] = '';
                }, this._config.duration);
            }
            hide(el) {
                const elBody = el.querySelector('.accordionthree__body');
                if (elBody.classList.contains('collapsing') || !el.classList.contains('accordionthree__item_show')) {
                    return;
                }
                elBody.style['height'] = `${elBody.offsetHeight}px`;
                elBody.offsetHeight;
                elBody.style['display'] = 'block';
                elBody.style['height'] = 0;
                elBody.style['overflow'] = 'hidden';
                elBody.style['transition'] = `height ${this._config.duration}ms ease`;
                elBody.classList.remove('collapse');
                el.classList.remove('accordionthree__item_show');
                elBody.classList.add('collapsing');
                window.setTimeout(() => {
                    elBody.classList.remove('collapsing');
                    elBody.classList.add('collapse');
                    elBody.style['display'] = '';
                    elBody.style['height'] = '';
                    elBody.style['transition'] = '';
                    elBody.style['overflow'] = '';
                }, this._config.duration);
            }
            toggle(el) {
                el.classList.contains('accordionthree__item_show') ? this.hide(el) : this.show(el);
            }
        }
    </script>
    <script>
        new Itcaccordionthree(document.querySelector('.accordionthree'), {
            alwaysOpen: true
        });
    </script>
    <div class="quest_title_bottom title quest_title_bottom_tel" style="position:relative">
    <img src="img/elem/leaf_tel11.png" alt="" class="leaf_tel11 elem_tel">

        ОТРИМУЙ ДОСТУП <br>
        ПО АКЦІЙНІ ЦІНІ <br>
        ПРЯМО ЗАРАЗ
    </div>
    <div class="left left_tel" >
        <div class="header_order_block" style="left: 0; position: relative;" >
        <img src="img/elem/leaf_tel10.png" alt="" class="leaf_tel10 elem_tel">

        <a class="js-pay">
            <div class="header_button" >
                Отримати зі знижкою
            </div>
            </a>
            <div class="header_lost">

                <div class="header_lost_clock">
                    <div class="header_lost_text">
                        <img src="img/SportStopwatch.png" alt="">
                    </div>
                    <div class="timer">
                        <p> До підняття цін: <span class="hours">00</span> : <span class="minutes">00</span> :
                            <span class="seconds">00</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="footer_tel">


    <div class="footer_top">
        <a href="https://docs.google.com/document/d/10WHFwWRodZ1ATVSzyav0BfulFKH0Lf2lLakXN90bI9w/edit#heading=h.soibqh7r9wpo"
            class="policy"> Політика конфіденційності</a>
        <a href="https://docs.google.com/document/d/13NQNhVKJlf4rMbaa7jTTH8rgA-02jcPNm1FdEQr2D3k/edit#heading=h.b9lg4am2yywd"
            class="offerta"> Публічна оферта</a>
        <p>
            (C)2024 усі права захищено
        </p>
    </div>
    <div class="footer_bottom">
        <p>
            ФОП Унгурян Анастасія Артурівна <br>
            ЄДРПОУ 3507409520 <br>
            anastasiaungurian@gmail.com
        </p>
    </div>
</div>
<script id="widget-wfp-script" language="javascript" type="text/javascript" src="https://secure.wayforpay.com/server/pay-widget.js"></script>
<script type="text/javascript" src="way-for-pay/main.js"></script>
</body>

</html>