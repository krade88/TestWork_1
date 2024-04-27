<header id="header" class="header header-js slideInBottomMy my_animated">
    <div class="top__header top__header-js">
        <div class="inner">
            <div class="select__top">
            </div>
            <nav class="menu__top">
                <ul>
                    <li><a href="{{route('categories.index')}}">Категории</a></li>
                    <li><a href="{{route('products.index')}}">Продукты</a></li>
                </ul>
            </nav>
            <div class="contacts__top">
                <a href="mailto:example@test.ru" class="item__contacts mail_item__contacts">
                        <span class="img__item">
                            <svg width="28" height="22" viewBox="0 0 28 22" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.6665 0.333374H3.33317C1.8665 0.333374 0.666504 1.53337 0.666504 3.00004V19C0.666504 20.4667 1.8665 21.6667 3.33317 21.6667H24.6665C26.1332 21.6667 27.3332 20.4667 27.3332 19V3.00004C27.3332 1.53337 26.1332 0.333374 24.6665 0.333374ZM24.6665 19H3.33317V5.66671L13.9998 12.3334L24.6665 5.66671V19ZM13.9998 9.66671L3.33317 3.00004H24.6665L13.9998 9.66671Z"/>
                            </svg>
                        </span>
                    <span class="text__item">example@test.ru</span>
                </a>
                <a href="tel:+78129999999" class="item__contacts phone_item__contacts">
                        <span class="img__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.6667 16.6667C21 16.6667 19.4 16.4 17.9067 15.9067C17.7733 15.8667 17.6267 15.84 17.4933 15.84C17.1467 15.84 16.8133 15.9733 16.5467 16.2267L13.6133 19.16C9.84 17.24 6.74667 14.16 4.82667 10.3867L7.76 7.44C8.13333 7.08 8.24 6.56 8.09333 6.09333C7.6 4.6 7.33333 3 7.33333 1.33333C7.33333 0.6 6.73333 0 6 0H1.33333C0.6 0 0 0.6 0 1.33333C0 13.8533 10.1467 24 22.6667 24C23.4 24 24 23.4 24 22.6667V18C24 17.2667 23.4 16.6667 22.6667 16.6667ZM2.70667 2.66667H4.70667C4.8 3.84 5 5 5.32 6.12L3.72 7.73333C3.17333 6.12 2.82667 4.42667 2.70667 2.66667ZM21.3333 21.2933C19.5733 21.1733 17.8667 20.8267 16.2667 20.28L17.8667 18.68C19 19 20.16 19.2 21.3333 19.28V21.2933Z"/>
                            </svg>
                        </span>
                    <span class="text__item">+7 (812) 999-99-99</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mid__header mid__header-js">
        <div class="inner">
            <a href="/" class="logo__mid">Логотип</a>
            <div class="catalog__mid">
                <div class="btn__catalog btn__catalog-js">
                    <div class="text__btn">Каталог</div>
                    <div class="img__btn">
                        <svg width="6" height="22" viewBox="0 0 6 22" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.00016 16.3334C1.5335 16.3334 0.333496 17.5334 0.333496 19C0.333496 20.4667 1.5335 21.6667 3.00016 21.6667C4.46683 21.6667 5.66683 20.4667 5.66683 19C5.66683 17.5334 4.46683 16.3334 3.00016 16.3334ZM3.00016 13.6667C4.46683 13.6667 5.66683 12.4667 5.66683 11C5.66683 9.53337 4.46683 8.33337 3.00016 8.33337C1.5335 8.33337 0.333497 9.53337 0.333496 11C0.333496 12.4667 1.5335 13.6667 3.00016 13.6667ZM3.00016 5.66671C4.46683 5.66671 5.66683 4.46671 5.66683 3.00004C5.66683 1.53337 4.46683 0.333374 3.00016 0.333374C1.5335 0.333374 0.333497 1.53337 0.333497 3.00004C0.333497 4.46671 1.5335 5.66671 3.00016 5.66671Z"/>
                        </svg>
                    </div>
                </div>
                <div class="list__catalog list__catalog-js">
                    <div class="wrap__list">
                        @foreach($catalog as $category)
                            <a href="#" class="item__list">
                                <span class="img__item">
                                    <img src="{{$category->name}}" alt="Тут должна быть картинка">
                                </span>
                                <span class="text__item">{{$category->name}}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="search_dk__mid search_dk__mid-js">
                <form class="form__search_dk" action="#">
                    <div class="btn_back__search_dk btn_back__search_dk-js">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1492 23.7203L14.2345 21.635L5.98212 13.3679L23.9805 13.3679L23.9805 10.41L5.98212 10.41L14.2345 2.14289L12.1492 0.0576172L0.317871 11.8889L12.1492 23.7203Z"/>
                        </svg>
                    </div>
                    <div class="wrap__form">
                        <label class="label__search_dk" for="inputbox__search_dk">Заглушка металлическая для столба 50×50 мм</label>
                        <input id="inputbox__search_dk" class="inputbox inputbox__search_dk inputbox__search_dk-js" type="search" placeholder="Заглуш">
                        <button class="button button__search_dk" type="button">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6667 14.6667H15.6133L15.24 14.3067C16.5467 12.7867 17.3333 10.8133 17.3333 8.66667C17.3333 3.88 13.4533 0 8.66667 0C3.88 0 0 3.88 0 8.66667C0 13.4533 3.88 17.3333 8.66667 17.3333C10.8133 17.3333 12.7867 16.5467 14.3067 15.24L14.6667 15.6133V16.6667L21.3333 23.32L23.32 21.3333L16.6667 14.6667ZM8.66667 14.6667C5.34667 14.6667 2.66667 11.9867 2.66667 8.66667C2.66667 5.34667 5.34667 2.66667 8.66667 2.66667C11.9867 2.66667 14.6667 5.34667 14.6667 8.66667C14.6667 11.9867 11.9867 14.6667 8.66667 14.6667Z"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <div class="results__search_dk results__search_dk-js">
                    <div class="wrap__results scrollbar-inner">
                        <a href="#" class="item__results">
                            <span class="name__item"><span>Заглуш</span>ка металлическая для столба 50×50 мм</span>
                            <span class="price__item">120 790 ₽</span>
                        </a>
                        <a href="#" class="item__results">
                            <span class="name__item"><span>Заглуш</span>ка металлическая для столба 60×60 мм</span>
                            <span class="price__item">2 230 ₽/шт.</span>
                        </a>
                        <a href="#" class="item__results">
                            <span class="name__item"><span>Заглуш</span>ка металлическая для столба 120×120 мм</span>
                            <span class="price__item">9 790 ₽</span>
                        </a>
                        <a href="#" class="item__results">
                            <span class="name__item"><span>Заглуш</span>ка металлическая для столба 200×200 мм</span>
                            <span class="price__item">12 230 ₽/шт.</span>
                        </a>
                        <a href="#" class="item__results">
                            <span class="name__item"><span>Заглуш</span>ка пластиковая для столба 50×50 мм</span>
                            <span class="price__item">90 ₽/шт.</span>
                        </a>
                        <a href="#" class="item__results">
                            <span class="name__item"><span>Заглуш</span>ка пластиковая для столба 60×60 мм</span>
                            <span class="price__item">230 ₽/шт.</span>
                        </a>
                        <a href="#" class="item__results">
                            <span class="name__item"><span>Заглуш</span>ка пластиковая для столба 120×120 мм</span>
                            <span class="price__item">6 425 ₽</span>
                        </a>
                        <!-- end_items -->
                        <div class="btn__results">
                            <a href="#">Показать все 34 товара</a>
                            <!-- if no item - show this and add class "in" instead of "hideI" -->
                            <span class="hideI">Ничего не найдено. Попробуйте другой запрос</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search_mb__mid search_mb__mid-js">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.6667 14.6667H15.6133L15.24 14.3067C16.5467 12.7867 17.3333 10.8133 17.3333 8.66667C17.3333 3.88 13.4533 0 8.66667 0C3.88 0 0 3.88 0 8.66667C0 13.4533 3.88 17.3333 8.66667 17.3333C10.8133 17.3333 12.7867 16.5467 14.3067 15.24L14.6667 15.6133V16.6667L21.3333 23.32L23.32 21.3333L16.6667 14.6667ZM8.66667 14.6667C5.34667 14.6667 2.66667 11.9867 2.66667 8.66667C2.66667 5.34667 5.34667 2.66667 8.66667 2.66667C11.9867 2.66667 14.6667 5.34667 14.6667 8.66667C14.6667 11.9867 11.9867 14.6667 8.66667 14.6667Z"/>
                </svg>
            </div>
            <div class="basket__mid">
                <a href="#" class="wrap__basket">
                    <div class="num__basket">445</div>
                    <div class="img__basket">
                        <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7335 15.3333C20.7335 15.3333 21.6135 14.7866 22.0668 13.96L26.8402 5.30663C27.3335 4.42663 26.6935 3.33329 25.6802 3.33329H5.94683L4.6935 0.666626H0.333496V3.33329H3.00016L7.80016 13.4533L6.00016 16.7066C5.02683 18.4933 6.30683 20.6666 8.3335 20.6666H24.3335V18H8.3335L9.80016 15.3333H19.7335ZM7.2135 5.99996H23.4135L19.7335 12.6666H10.3735L7.2135 5.99996ZM8.3335 22C6.86683 22 5.68016 23.2 5.68016 24.6666C5.68016 26.1333 6.86683 27.3333 8.3335 27.3333C9.80016 27.3333 11.0002 26.1333 11.0002 24.6666C11.0002 23.2 9.80016 22 8.3335 22ZM21.6668 22C20.2002 22 19.0135 23.2 19.0135 24.6666C19.0135 26.1333 20.2002 27.3333 21.6668 27.3333C23.1335 27.3333 24.3335 26.1333 24.3335 24.6666C24.3335 23.2 23.1335 22 21.6668 22Z"/>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="burger__mid burger__mid-js">
                <input type="checkbox" id="checkbox_menu" class="checkbox_menu visuallyHidden">
                <label for="checkbox_menu">
                        <span class="db hamburger hamburger-js">
                          <span class="bar bar1"></span>
                          <span class="bar bar2"></span>
                          <span class="bar bar3"></span>
                          <span class="bar bar4"></span>
                        </span>
                </label>
            </div>
        </div>
    </div>
    <!-- menu_mobile -->
    <div class="menu_mb__header menu_mb__header-js">
        <div class="inner">
            <a href="#" class="catalog_btn__menu_mb">
                <div class="text__btn">Каталог</div>
                <div class="img__btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                    </svg>
                </div>
            </a>
            <nav class="menu__menu_mb">
                <ul>
                    <li><a href="#">Спецпредложения</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
            <div class="contacts__menu_mb">
                <div class="left__contacts">
                    <div class="item__left"><a href="tel:+78129999999">+7 (812) 999-99-99</a></div>
                    <div class="item__left"><a href="mailto:example@test.ru">example@test.ru</a></div>
                </div>
                <div class="right__contacts">
                    <div class="item__right">
                        <div class="title__item">Офис</div>
                        <div class="list__item">
                            <div class="item__list">Пн-Чт: 9:00-17:30</div>
                            <div class="item__list">Пт: 9:00-17:00</div>
                        </div>
                    </div>
                    <div class="item__right">
                        <div class="title__item">Склад</div>
                        <div class="list__item">
                            <div class="item__list">Пн-Чт: 9:00-17:00</div>
                            <div class="item__list">Пт: 9:00-16:30</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow_after_menu shadow_after_menu-js"></div>
</header>
