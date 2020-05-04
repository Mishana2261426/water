@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col_4">
            <a href="home/add" class="btn btn-success">Добавить</a>
        </div>
        <div class="col-8">
            <div>
                <table class="table table-bordered">
                    <thead class="thead-dark">

                    <tr>
                        <th>id</th>
                        <th>Артикль</th>
                        <th>Название</th>
                        <th>Объём</th>
                        <th>Описание</th>
                        <th>Цена</th>
                        <th>Изображение</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->VendorCode}}</td>
                        <td>{{$product->Name}}</td>
                        <td>{{$product->Сapacity}}</td>
                        <td>{{$product->Description}}</td>
                        <td>{{$product->Price}}</td>
                        <td><img src="../../storage/app/public/{{$product->Img}}" style="width: 100px; height: 100px"></td>
                        <td><a href="home/delete/{{$product->id}}" class="btn btn-danger">Удалить</a></td>
                        <td><a href="home/update/{{$product->id}}" class="btn btn-warning">Обновить</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
