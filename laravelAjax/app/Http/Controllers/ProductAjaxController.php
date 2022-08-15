<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductAjaxController extends Controller
{


    # displaying DT to user & adding actions columns


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = "<a href='javascript:void(0)' data-toggle='tooltip'  data-id='".$row->id."' data-original-title='Edit' class='edit btn btn-primary btn-sm editProduct' id='editProduct'>Edit</a>";

                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('productAjax');
    }


    # storing updated or inserted details in the database


    public function store(Request $request)
    {

        Product::updateOrCreate (
                                    ['id' => $request->product_id],
                                    ['name' => $request->name, 'detail' => $request->detail]
                                );

        return response()->json(['success'=>'Product saved successfully.']);

    }


    # putting the specific click details info in edit form (/photos/{photo}/edit)


    public function edit($ids)
    {
        $product = Product::find($ids);
        return response()->json($product);

    }


    # deleting details


    public function destroy($ids)
    {
        Product::find($ids)->delete();
        return response()->json(['success'=>'Product deleted successfully.']);
    }

}
