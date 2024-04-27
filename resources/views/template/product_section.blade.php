<section id="products_block__mp" class="products_block__mp">
    <div data-wow-delay="0.5s" class="inner wow slideInBottomMy">
        <div class="top__products">
            <h2 class="h2_title__site"><a href="#">Популярные товары</a></h2>
            <a href="#" class="catalog_btn__top">
                <div class="text__btn">В каталог</div>
                <div class="img__btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                    </svg>
                </div>
            </a>
        </div>
        <div class="catalog__products">

            @foreach($products as $product)
                <a href="#" class="item__catalog big_item__catalog">
                    <div class="img__item">
                        <img src="{{$product->image}}" alt="Тут должна быть картинка">
                    </div>
                    <div class="bot__item">
                        <h3 class="title__bot">{{$product->name}}</h3>
                        <div class="prices__bot">
                            <div class="wrap__prices">
                                <div class="no_sale__prices">{{$product->price}}₽</div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <a href="{{route('products.index')}}">
            <div class="more_btn__products">

                <div class="text__btn">Показать еще</div>
                <div class="img__btn"></div>

            </div>
        </a>

    </div>
</section>
