<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Purchase;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;

class OrdersController extends Controller
{
    public function store(Request $request)
    {
        $purchase = Purchase::create($request->only('Locality', 'Street', 'House', 'Apartment', 'Person', 'Tel', 'Date', 'Time_ot', 'Time_do'));

        $link = Purchase::all('id')->last()->toArray();

        $num = implode($link);


        for ($i=1;$i<=$request->count; $i++) {
            $a = 'Product_id_' . $i;
            $b = 'Quality_' . $i;
            $order = new Order();

            $order->Purchase_id =$num ;
            $order->Product_id = $request->$a;
            $order->Quality = $request->$b;

            $order->save();
        }

        $arr = Purchase::all()->last();

        return json_encode($arr);


        //return $array;
        //$order = Order::create(array(Purchase::all('id')->toArray()), $request->all());

        //return Purchase::all();

//        $arr = json_decode($order, true);
//

//        foreach ($arr as $key => $value) {
//            echo ($value);
//        }

    }
}
