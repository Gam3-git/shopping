<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // $db = 'D:/DATA2Agenct/access2search.mdb';
        // $driverdb = 'odbc:Driver={Microsoft Access Driver (*.mdb)};';
        // $conn = new PDO($driverdb."Dbq=$db", null, null);
        // $TableN1 = 'แผนกรับฟ้อง';
        // $queryRT = ConvertTIS620("SELECT [$FiledN4] FROM [$TableN1] WHERE [$FiledN1] = '$split[0]' AND [$FiledN2] = $nexplode[1] AND [$FiledN3] = $texplode[1]");
        //         $resultRT = $conn -> prepare($queryRT);
        //         $resultRT -> execute();
        //         $rowRT = $resultRT->fetchAll(PDO::FETCH_NUM);



        // $category = Category::all();
        // $category = Category::find(3);
        // $category = Category::findOrFail(4);
        $category_2 = Category::where('name','like','%หนัง%')->first();
        // $category = Category::where('id','1')->get();
        $category = Category::select('id','name')->where('id','>=','1')->orderBy('id','desc')->get();
        $orderCount = Category::count();
        $AID = Category::sum('id');
        // return $category;
                return view('backend.category.index',['category'=>$category,'orderCount'=>$orderCount,'AID'=> $AID,'cat2'=>$category_2]);
    }
}
