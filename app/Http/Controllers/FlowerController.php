<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FlowerController extends Controller
{

public function add_flower(Request $request){
$name = $request->get('name');
$price = $request->get('price');
$type = $request->get('type');
$photo = $request->get('photo');
$shopid = $request->get('shopid');
$user = DB::table('signup table')->where('Shop_ID', $shopid)->first();
if(!$user){
    echo "Please enter correct shop ID";
}
else{
DB::table('flowers')->insert([
    'Name' => $name,
    'Price' => $price,
    'Product Type' => $type,
    'Photo' => $photo,
    'SHOP_ID' => $shopid
]);
return redirect('display_flower/'.$shopid);
}
}

public function shopdelete($shop_id,$id){
    DB::table('flowers')->where('Product_ID', $id)->delete();
    return redirect('display_flower/'.$shop_id);
}
public function shop(){
    $flowers = DB::table('flowers')->get();
    return view('shop',["flowers"=>$flowers]);
}
public function display_flower($id)
{
    // Get the specific shop data and flowers related to the Shop_ID
    $data = DB::table('signup table')->where('Shop_ID', $id)->get();
    $flowers = DB::table('flowers')->where('SHOP_ID', $id)->get();

    // Calculate the total earnings for the shop by summing up 'total_revenue' field
    $totalEarnings = DB::table('signup table')->where('Shop_ID', $id)->sum('total_revenue');

    // Pass the total earnings to the view along with other data
    return view('flower', [
        "flowers" => $flowers,
        "shopid" => $id,
        "data" => $data,
        "totalEarnings" => $totalEarnings
    ]);
}



    public function dashboard($id)
    {
        // Get flowers for the specific shop
        $flowers = DB::table('flowers')->get()->where('Product_ID', $id);
        foreach ($flowers as $flower) {
            DB::table('kart')->insert([
                'name' => $flower->Name,
                'price' => $flower->Price,
                'photo' => $flower->Photo,
                'id' => $flower->Product_ID,
                'shopid' => $flower->SHOP_ID
            ]);
        }
        return redirect('shopping');
   
    }

    public function dashing(){
        $total_items = 0;
        $total_price = 0;

        // Fetch flowers for the specific shop
        $flowers = DB::table('kart')->get();

        // Calculate total items and total price
        foreach ($flowers as $flower) {
            $total_items += 1;
            $total_price += $flower->price;
        }

        // Return view with calculated totals
        return view('dashboard', [
            "flowers" => $flowers,
            "total_items" => $total_items,
            "total_price" => $total_price
        ]);
    }
    public function removeitem($id){
        DB::table('kart')->where('id', $id)->delete();
        return redirect('addtokart');
    }

public function checkout(Request $request){
    $karts = DB::table('kart')->get();
   foreach($karts as $kart){
   DB::table('signup table')->where('SHOP_ID', $kart->shopid)->
    increment('total_revenue',$kart->price);

   }
$name = $request->name;
$address = $request->address;
$phone = $request->contact;
$total_items = $request->total_items;
$total_price = $request->total_price;
return view('Checkout', compact('name','address','phone','total_items','total_price'));
}

public function clearkart(){
    DB::table('kart')->delete();
    return redirect('shopping');
}

}




