@include('template.head')
<h1>Продукты</h1>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Слаг</th>
            <th>Категория</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th>{{$product->id}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->slug}}</th>
                <th>{{$product->category->name}}</th>
                <th>
                    <form action="{{route('products.destroy',['product'=> $product])}}" method="POST">
                        <a type="button" class="open-btn" href="{{route('products.show', $product)}}">Открыть</a>
                        <a type="button" class="edit-btn" href="{{route('products.edit', $product)}}">Изменить</a>
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
        <a class="create-btn" type="button" href="{{route('products.create')}}">Добавить продукт</a>
    </div>
