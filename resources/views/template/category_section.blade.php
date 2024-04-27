<section data-wow-delay="0.5s" id="category_block__mp" class="category_block__mp wow slideInBottomMy">
    <div class="inner">
        <div class="top__category">
            <h2 class="h2_title__site"><a href="#">Популярные категории</a></h2>
            <a href="{{route('categories.index')}}" class="catalog_btn__top">
                <div class="text__btn">Смотреть все</div>
                <div class="img__btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.04575 0V2.94902L12.7268 2.95948L0 15.6863L2.0915 17.7778L14.8183 5.05098L14.8288 16.732H17.7778V0H1.04575Z"/>
                    </svg>
                </div>
            </a>
        </div>
        <div class="catalog__category">
            @foreach($categories as $category)
                <a href="#" class="item__catalog">
                    <h3 class="title__item">{{$category->name}}</h3>
                    <span class="img__item"><img src="{{$category->image}}" alt="Тут должна быть картинка"></span>
                </a>
            @endforeach
        </div>
    </div>
</section>
