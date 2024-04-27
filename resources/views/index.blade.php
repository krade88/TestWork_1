@include('template.head')
<body class="main__page">
<div id="wrapper" class="wrapper site__wrapper">
    @include('template.header')
    <main id="main" class="main main-js">
        <section data-wow-delay="0.5s" id="first_block__mp" class="first_block__mp wow slideInBottomMy">
            <div class="inner">
                <h1 class="h1_title__site">Поликарбонат <br>и металлопродукция для дома, <br>коттеджей и садовых
                    участков</h1>
                <div class="bot__first">
                    <div class="text__bot">В Санкт-Петербурге, Москве и Краснодаре или с доставкой <br>в любой город
                        России
                    </div>
                    <a href="#" class="catalog_btn__bot">
                        <div class="text__btn">Каталог</div>
                        <div class="img__btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        @include('template.category_section')
        <section id="promos_block__mp" class="promos_block__mp">
            <div class="slider__item slider_one-js">
                <div data-wow-delay="0.5s" class="swiper-container wow slideInBottomMy">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide__slider">
                                <div class="inner">
                                    <div class="labels__slide">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">Спецпредложения</div>
                                    </div>
                                    <div class="main__slide">
                                        <h2 class="h2_title__site">Скидка 30% на сетку-рабицу с оцинкованным
                                            покрытием</h2>
                                        <div class="text__main">С 1 по 15 апреля 2020 года</div>
                                        <a href="#" class="catalog_btn__main">
                                            <div class="text__btn">Купить</div>
                                            <div class="img__btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg_img__slide"><img src="images/dest/assets/slider_second_mp.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide__slider">
                                <div class="inner">
                                    <div class="labels__slide">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">Спецпредложения</div>
                                    </div>
                                    <div class="main__slide">
                                        <h2 class="h2_title__site">Скидка 30% на сетку-рабицу с оцинкованным
                                            покрытием</h2>
                                        <div class="text__main">С 1 по 15 апреля 2020 года</div>
                                        <a href="#" class="catalog_btn__main">
                                            <div class="text__btn">Купить</div>
                                            <div class="img__btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg_img__slide"><img src="images/dest/assets/slider_second_mp.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide__slider">
                                <div class="inner">
                                    <div class="labels__slide">
                                        <!-- can be more then 1 -->
                                        <div class="item__label">Спецпредложения</div>
                                    </div>
                                    <div class="main__slide">
                                        <h2 class="h2_title__site">Скидка 30% на сетку-рабицу с оцинкованным
                                            покрытием</h2>
                                        <div class="text__main">С 1 по 15 апреля 2020 года</div>
                                        <a href="#" class="catalog_btn__main">
                                            <div class="text__btn">Купить</div>
                                            <div class="img__btn">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg_img__slide"><img src="images/dest/assets/slider_second_mp.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination my-swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev my-swiper-button-prev"></div>
                <div class="swiper-button-next my-swiper-button-next"></div>
            </div>
        </section>
        @include('template.product_section')
        <section data-wow-delay="0.5s" id="why_block__mp" class="why_block__mp wow slideInBottomMy">
            <div class="inner">
                <h2 class="h2_title__site"><a href="#">Почему купить стоит у нас?</a></h2>
                <div class="right__why">
                    <div class="catalog__right">
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="26" height="23" viewBox="0 0 26 23" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.6667 11C13.6133 11 16 8.61337 16 5.66671C16 2.72004 13.6133 0.333374 10.6667 0.333374C7.72 0.333374 5.33333 2.72004 5.33333 5.66671C5.33333 8.61337 7.72 11 10.6667 11ZM10.6667 3.00004C12.1333 3.00004 13.3333 4.20004 13.3333 5.66671C13.3333 7.13337 12.1333 8.33337 10.6667 8.33337C9.2 8.33337 8 7.13337 8 5.66671C8 4.20004 9.2 3.00004 10.6667 3.00004ZM9.33333 19H2.66667C2.93333 18.16 6.06667 16.7734 9.24 16.4134H9.28L9.89333 15.8134L12 13.7467C11.48 13.6934 11.0933 13.6667 10.6667 13.6667C7.10667 13.6667 0 15.4534 0 19V21.6667H12L9.33333 19ZM23.4667 11.6667L16.6267 18.56L13.8667 15.7867L12 17.6667L16.6267 22.3334L25.3333 13.5467L23.4667 11.6667Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Закупаем напрямую у изготовителей</h3>
                                <div class="text__content">Заводы не продают небольшие партии физическим лицам, а мы —
                                    да. Ещё у нас есть дилерская скидка, поэтому купить у нас выгоднее.
                                </div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="28" height="22" viewBox="0 0 28 22" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.3332 16.3334H16.6665V21.6667H27.3332V4.33337H23.3332V0.333374H4.6665V4.33337H0.666504V21.6667H11.3332V16.3334ZM8.6665 16.3334V19H3.33317V7.00004H7.33317V3.00004H20.6665V7.00004H24.6665V19H19.3332V13.6667H8.6665V16.3334Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Торгуем со склада</h3>
                                <div class="text__content">Можно не оформлять заказ заранее и не ждать его, а просто
                                    приехать к нам на склад в Санкт-Петербурге, Москве или Краснодаре: товар есть
                                    всегда.
                                </div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="28" height="24" viewBox="0 0 28 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.3332 10.6667V0H17.9998V4H9.99984V0H0.666504V10.6667H9.99984V6.66667H12.6665V20H17.9998V24H27.3332V13.3333H17.9998V17.3333H15.3332V6.66667H17.9998V10.6667H27.3332ZM7.33317 8H3.33317V2.66667H7.33317V8ZM20.6665 16H24.6665V21.3333H20.6665V16ZM20.6665 2.66667H24.6665V8H20.6665V2.66667Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Продаём и оптом, и в розницу</h3>
                                <div class="text__content">Можем оформить заказ на коробку гвоздей, а можем — на тонну
                                    проволоки. И то и другое можно сразу забрать со склада.
                                </div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="30" height="20" viewBox="0 0 30 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.6668 0.666626H3.00016C1.5335 0.666626 0.333496 1.85329 0.333496 3.33329V15.3333H3.00016C3.00016 17.5466 4.78683 19.3333 7.00016 19.3333C9.2135 19.3333 11.0002 17.5466 11.0002 15.3333H19.0002C19.0002 17.5466 20.7868 19.3333 23.0002 19.3333C25.2135 19.3333 27.0002 17.5466 27.0002 15.3333H29.6668V8.66663L21.6668 0.666626ZM19.0002 3.33329H20.3335L24.3335 7.33329H19.0002V3.33329ZM11.0002 3.33329H16.3335V7.33329H11.0002V3.33329ZM3.00016 3.33329H8.3335V7.33329H3.00016V3.33329ZM7.00016 17C6.08016 17 5.3335 16.2533 5.3335 15.3333C5.3335 14.4133 6.08016 13.6666 7.00016 13.6666C7.92016 13.6666 8.66683 14.4133 8.66683 15.3333C8.66683 16.2533 7.92016 17 7.00016 17ZM23.0002 17C22.0802 17 21.3335 16.2533 21.3335 15.3333C21.3335 14.4133 22.0802 13.6666 23.0002 13.6666C23.9202 13.6666 24.6668 14.4133 24.6668 15.3333C24.6668 16.2533 23.9202 17 23.0002 17ZM27.0002 12.6666H25.9602C25.2268 11.8533 24.1735 11.3333 23.0002 11.3333C21.8268 11.3333 20.7735 11.8533 20.0402 12.6666H9.96016C9.22683 11.8533 8.18683 11.3333 7.00016 11.3333C5.8135 11.3333 4.7735 11.8533 4.04016 12.6666H3.00016V9.99996H27.0002V12.6666Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Доставляем куда и когда вам удобно</h3>
                                <div class="text__content">Привезём заказ на автомобилях или по железной дороге. Место и
                                    время можно выбрать любое, даже если это загородный дом в выходной день.
                                </div>
                            </div>
                        </div>
                        <div class="item__catalog">
                            <div class="img__item">
                                <svg width="26" height="20" viewBox="0 0 26 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 0.666626V19.3333H25.3333V0.666626H0ZM5.66667 16.6666H2.66667V14H5.66667V16.6666ZM5.66667 11.3333H2.66667V8.66663H5.66667V11.3333ZM5.66667 5.99996H2.66667V3.33329H5.66667V5.99996ZM11.3333 16.6666H8.33333V14H11.3333V16.6666ZM11.3333 11.3333H8.33333V8.66663H11.3333V11.3333ZM11.3333 5.99996H8.33333V3.33329H11.3333V5.99996ZM17 16.6666H14V14H17V16.6666ZM17 11.3333H14V8.66663H17V11.3333ZM17 5.99996H14V3.33329H17V5.99996ZM22.6667 16.6666H19.6667V14H22.6667V16.6666ZM22.6667 11.3333H19.6667V8.66663H22.6667V11.3333ZM22.6667 5.99996H19.6667V3.33329H22.6667V5.99996Z"/>
                                </svg>
                            </div>
                            <div class="content__item">
                                <h3 class="title__content">Производим сами</h3>
                                <div class="text__content">Это значит, что цены у нас ниже, чем в торговых сетях в
                                    среднем на 20–30%. А ещё мы можем изготовить товар по индивидуальному заказу.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- btn_more -->
                    <a href="#" class="catalog_btn__right">
                        <div class="text__btn">Узнать больше</div>
                        <div class="img__btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    @include('template.footer')
</div>
</body>
</html>
