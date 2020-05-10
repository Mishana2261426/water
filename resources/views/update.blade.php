@extends('layouts.app')
<style>
    img.preview {
        max-width:250px;
        max-height:250px;
    }

    textarea {
        border: 0.1px solid #BFBFBF;
    }

    .row {
        display: flex;
        justify-content: center;
    }
</style>
@section('content')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container">
        <div class="justify-content-center">
            <div>
                <form action="/home/update/{{$products->id}}" method="POST" class="text-center" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <update :urldata="{{json_encode($url_data)}}"></update>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="VendorCode">Артикль:</label><br>
                                <input type="text" name="VendorCode" id="VendorCode" value="{{$products->VendorCode}}" required>
                            </div>
                            <div class="form-group">
                                <label for="Name">Название:</label><br>
                                <input type="text" name="Name" id="Name" value="{{$products->Name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="Capacity">Объём:</label><br>
                                <input type="number" name="Сapacity" id="Сapacity" value="{{$products->Сapacity}}" required>
                            </div>
                            <div class="form-group">
                                <label for="Description">Описание:</label><br>
                                <textarea type="" name="Description" id="Description" required>{{$products->Description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Price">Цена:</label><br>
                                <input type="number" name="Price" id="Price" value="{{$products->Price}}" required>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Сохранить" class="btn btn-primary">
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection

