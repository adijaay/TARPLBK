<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\narapidana;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpFoundation\Response;

class narapidanaController extends Controller
{
    public function index(Request $request)
    {
        if($request->no_sel){
            return narapidana::where("no_sel",  $request->no_sel)->get();
        }
        else Return narapidana::all();
        
        // Return nara('index')->with('narapidanas', $narapidana);
    }

    // public function add()
    // {
    //     return view('add');     
    // }

    public function store(Request $request)
    {
        $data = $request->all();
        

        $napi = narapidana::create($data);
        
        Return response($napi, Response::HTTP_CREATED);
    }

    public function show($id_narapidana)
    {
        $narapidana = narapidana::FindorFail($id_narapidana);
        
        Return response($narapidana, Response::HTTP_CREATED);
       
    }

    public function update(Request $request, $id_narapidana)
    {
        $data = $request->all();
        $item = narapidana::FindorFail($id_narapidana);

        $item->update($data);
        Return response($item, Response::HTTP_CREATED);
   
    }

    public function destroy($id_narapidana)
    {
        // $narapidana = narapidana::where('id_narapidana', $id_narapidana);
        narapidana::destroy($id_narapidana);
        
        Return response(null, Response::HTTP_NO_CONTENT);
    }

    function searchName($name){
        return narapidana::where("name", $name)->get();
    }

    function searchAddress(Request $request){

        return narapidana::where("address", $request->address)->get();
    }
}
