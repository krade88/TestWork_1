@include('template.head')
@isset($category)
    <h1>Редактировать категорию {{$category->name}}</h1>
@else
    <h1>Добавить категорию</h1>
@endisset

<form class="form-container" method="POST"
      @isset($category)
          action="{{route('categories.update', ['category' => $category])}}"
      @else
          action="{{route('categories.store')}}"
    @endisset
>
    @isset($category)
        @method('PUT')
    @endisset
    @csrf

    <label for="name">Имя:</label>
    <input value="@isset($category){{$category->name}}@endisset" type="text" id="name" name="name"><br><br>

    <label for="slug">Слаг:</label>
    <input value="@isset($category){{$category->slug}}@endisset" type="text" id="slug" name="slug"><br><br>


    <button type="submit">Сохранить</button>
</form>
