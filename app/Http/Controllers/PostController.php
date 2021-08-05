<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function createProduct(Request $request)
    {
        $image = $request->file('select_file');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        Product::create([
            'title' => $request->title,
            'status' => $request->status,
            'stock_location' => $request->stock_loc,
            'stock_port' => $request->stock_port,
            'veh_type' => $request->veh_type,
            'model' => $request->model,
            'drive' => $request->drive,
            'mileage' => $request->mileage,
            'price' => $request->price,
            'dealer' => $request->dealer,
            'fuel' => $request->fuel,
            'chasis_no' => $request->chasisno,
            'photo' => $new_name,
            'trans' => $request->trans,
        ]);
        return redirect('/stock');
    }

    public function updateStock(Request $request)
    {

        $stk_id = $request->get('stock_id');
        $stock = Product::find($stk_id);
        if ($request->file != '') {
            $path = public_path('images');

            //code for remove old file
            if ($stock->photo != ''  && $stock->photo != null) {
                $file_old = $path . $stock->photo;
                unlink($file_old);
            }

            //upload new file
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $stock->title = $request->get('title');
        $stock->status = $request->get('status');
        $stock->stock_location = $request->get('stock_loc');
        $stock->veh_type = $request->get('veh_type');
        $stock->model = $request->get('model');
        $stock->drive = $request->get('drive');
        $stock->mileage = $request->get('mileage');
        $stock->price = $request->get('price');
        $stock->dealer = $request->get('dealer');
        $stock->fuel = $request->get('fuel');
        $stock->chasis_no = $request->get('chasisno');
        //$stock->photo = $filename;
        $stock->trans = $request->get('trans');
        $stock->save();
        return redirect('/stock');
    }

    public function deleteStock(Request $request)
    {
        $id = $request->get('id_stk');
        $prod = Product::find($id);
        $prod->delete();
        return redirect()->back();
    }
}
