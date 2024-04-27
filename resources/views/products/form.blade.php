@include('template.head')
@isset($product)
    @section('title', 'Редактировать продукт'. $product->name)
@else
    @section('title', 'Добавить продукт')
@endisset

@isset($product)
    <h1>Редактировать продукт {{$product->name}}</h1>
@else
    <h1>Добавить продукт</h1>
@endisset

<form class="form-container" method="POST"
      @isset($product)
          action="{{route('products.update', ['product' => $product])}}"
      @else
          action="{{route('products.store')}}"
    @endisset
>
    @isset($product)
        @method('PUT')
    @endisset
    @csrf
    <label for="name">Имя:</label>
    <input value="@isset($product){{$product->name}}@endisset" type="text" id="name" name="name"><br><br>
    <label for="slug">Слаг:</label>
    <input value="@isset($product){{$product->slug}}@endisset" type="text" id="slug" name="slug"><br><br>
    <label for="slug">Описание:</label>
    <input value="@isset($product){{$product->description}}@endisset" type="text" id="description"
           name="description"><br><br>
    <label for="slug">Цена:</label>
    <input value="@isset($product){{$product->price}}@endisset" type="text" id="price" name="price"><br><br>
    <label for="category">Категория:</label>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}"
                    @isset($product)
                        @if($product->category_id == $category->id) selected @endif
                @endisset> {{$category->name}}</option>
        @endforeach
    </select>


    <button type="submit">Сохранить</button>
</form>
