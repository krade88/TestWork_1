@include('template.head')
<h1>Название: {{$product->name}}</h1>
<h1>Слаг: {{$product->slug}}</h1>
<h1>Описание: {{$product->description}}</h1>
<h1>Категория: {{$product->category->name}}</h1>
<h1>Цена: {{$product->price}}</h1>
