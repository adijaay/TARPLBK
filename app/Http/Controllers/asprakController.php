<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\asprak;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpFoundation\Response;

class asprakController extends Controller
{
    public function index(Request $request)
    {
        if($request->modul){
            return asprak::where("modul",  $request->modul)->get();
        }
        else Return asprak::all();
        
        // Return nara('index')->with('aspraks', $asprak);
    }

    // public function add()
    // {
    //     return view('add');     
    // }

    public function store(Request $request)
    {
        $data = $request->all();
        

        $asprak = asprak::create($data);
        
        Return response($asprak, Response::HTTP_CREATED);
    }

    public function show($id_asprak)
    {
        $asprak = asprak::FindorFail($id_asprak);
        
        Return response($asprak, Response::HTTP_CREATED);
       
    }

    public function update(Request $request, $id_asprak)
    {
        $data = $request->all();
        $item = asprak::FindorFail($id_asprak);

        $item->update($data);
        Return response($item, Response::HTTP_CREATED);
   
    }

    public function destroy($id_asprak)
    {
        // $asprak = asprak::where('id_asprak', $id_asprak);
        asprak::destroy($id_asprak);
        
        Return response(null, Response::HTTP_NO_CONTENT);
    }

    function searchName($nama){
        return asprak::where("nama", $nama)->get();
    }

}
