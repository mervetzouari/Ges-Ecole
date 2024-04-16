<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kid;//bech norbet bine el model w fichier hetha w tjini les donné

class KidsController extends Controller
{
    //array static data 
    private static function getData() {
        return  [
            ['id'=>1,'name'=>'asma','région'=>'ben arous '],
            ['id'=>2,'name'=>'amine','région'=>'mornag'],
            ['id'=>3,'name'=>'sami','région'=>'madina'],
        ];
       

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('kids.index',[
            /*'kids'=>self::getData()//hetha nestakhdemha ki hez men rouhou men hna les donné
            
       */
        'kids'=> Kid::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kids.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(['kid-name'=>'required',
        'kid-région'=>'required',
        'kid-tel'=>['required','integer']]);// ['required','integer']'required'|integer,

    // nkhazen fih el ma3loumet
     $kid=new Kid();// noskha men class kid.php
     $kid->name=strip_tags($request->input('kid-name'));
     $kid->région=strip_tags($request->input('kid-région') );//name en input 
     $kid->tel=strip_tags($request->input('kid-tel')) ;
     $kid->save();
     return redirect()->route('kids.index');//ba3ed mankhazenhom el ma3lumet ihezni lel page li to3"rethhom

    }

    /**
     * Display the specified resource.
     */
    public function show($kid) //najem fi blasset kid nhot id aw ey asm nadih bih
    {
       // $kids= self::getData(); //bech najem nadi lel 9a3idet el bayanet 
       $index=Kid::findOrFail($kid);
       //$index= array_search($id,array_column($kids,'id'));


        //if($index===false){
            //abort(404);

        //}


        return view('kids.show',
     [   
        'kid' =>$index
     ]);//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kid)
    {
        return view('kids.edit',
     [   
        'kid'=>Kid::findOrFail($kid)
     ]);//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$kid)
    {
        
        $request->validate(['kid-name'=>'required',
        'kid-région'=>'required',
        'kid-tel'=>['required','integer']]);
        $to_update= Kid::findOrFail($kid);
     $to_update->name=strip_tags($request->input('kid-name'));
     $to_update->région=strip_tags($request->input('kid-région') );
     $to_update->tel=strip_tags($request->input('kid-tel')) ;
     $to_update->save();
     return redirect()->route('kids.show',$kid);

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kid)
    {
        $to_delete=Kid::findOrFail($kid);
        $to_delete->delete();
        return redirect()->route('kids.index');
    }
}
