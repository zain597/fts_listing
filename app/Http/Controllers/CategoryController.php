<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;

class CategoryController extends Controller
{
    public function add_category()
    {
        return view('category.add_category');
    }

    public function categoryStore(Request $request)
    {
        $request->validate([
            'text'=> 'required'
        ]);
        BusinessCategory::insert([
            'text'=>$request->text
        ]);

        return redirect()->back();
    }

    public function CategoryList(Request $request)
    {
        if ($request->ajax()) {
            $data = BusinessCategory::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<button class="tag" data-id="'.$row['id'].'" id="deleteCategory"><i class="fa fa-trash"></i></button>';
                            return $actionBtn;
                    
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function CategoryDelete(Request $request)
    {
        $category_id = $request->category_id;

        $query = BusinessCategory::findOrFail($category_id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'Category has been deleted']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);

        }
    }

    public function add_business()
    {
        $categories = BusinessCategory::latest()->get();
        return view('business.add_business',compact(['categories']));
    }

    public function businessStore(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'phone'=>'required',
            'descripton'=>'required',
        ]);
        Business::insert([
            'category_id'=>$request->category_id,
            'name'=> $request->name,
            'website'=>$request->website,
            'phone'=>$request->phone,
            'sms'=>$request->sms,
            'insta'=>$request->insta,
            'gmb'=>$request->gmb,
            'whatsapp'=>$request->whatsapp,
            'facebook'=>$request->facebook,
            'youtube'=>$request->youtube,
            'yelp'=>$request->yelp,
            'twitter'=>$request->twitter,
            'address'=>$request->address,
            'email'=>$request->email,
            'description'=>$request->description,
            'created_at'=>Carbon::now()
        ]);
        $notification = array(
            'message'=> 'Business has been added',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification); 
    }
    public function AllBusinesses()
    {
        return view('business.allBusiness');
    }
    public function BusinessesList(Request $request)
    {
        if ($request->ajax()) {
            $data = Business::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('category_id', function(Business $business){
                    return $business->businessCategory->text;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<button class="tag" data-id="'.$row['id'].'" id="deleteCategory"><i class="fa fa-trash"></i></button>';
                            return $actionBtn;
                    
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function BusinessDelete(Request $request)
    {
        $business_id = $request->business_id;

        $query = Business::findOrFail($business_id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'Business has been deleted']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
        }
    }
}
