<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\Vendor;
class SershController extends Controller
{


    public function show(Request $reqest)
    { 
        $ser= $reqest->searsh;
        $type= $reqest->searh_type;  
        try {
          
         if ($type==1) { 

            $products = Products::where("Product_number",'LIKE','%'.$ser.'%')->get();

         }else if($type==2){

            $re= Category::where('category_name','LIKE','%'.$ser.'%')->first();
            $products = Products::where("Product_name",'LIKE','%'.$ser.'%')->get(); 

        }else if($type==3){

            $re=Vendor::where('vendor_name',$ser)->first();
                $products =Products::where('vendor_id',$re->id)->get();
       
        }else{
          
              $re= Category::where('category_name','LIKE','%'.$ser.'%')->first();
              $products =Products::where('category_id',$re->id)->get();
            
        }
        return view('products.products',compact('products'));


         } catch (\Exception $ex) {
             /*session()->flash('Error','هناك خطا ما يرجي المحاوله فيما بعد');
             return redirect('/products');*/

             return 'هناك خطا ما يرجي المحاوله فيما بعد';
         }
       
    }

}
