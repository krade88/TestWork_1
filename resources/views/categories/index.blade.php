@include('template.head')
<h1>Категории</h1>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Слаг</th>
            <th></th>
        </tr>
        </thead>

        @foreach($categories as $category)
            <tbody>
            <tr>
                <th>{{$category->id}}</th>
                <th>{{$category->name}}</th>
                <th>{{$category->slug}}</th>
                <th>
                    <form action="{{route('categories.destroy',['category'=> $category])}}" method="POST">
                        <a type="button" class="open-btn" href="{{route('categories.show', $category)}}">Открыть</a>
                        <a type="button" class="edit-btn" href="{{route('categories.edit', $category)}}">Изменить</a>
                        @csrf
                        @method('DELETE')
                        <input class="delete-btn" type="submit" value="Удалить">
                    </form>

                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <a class="create-btn" type="button" href="{{route('categories.create')}}">Создать категорию</a>
    </div>
