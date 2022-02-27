<?php

namespace App\Http\Controllers;


use App\Models\Cloth;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ClothController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Categories=Category::all();

        return view("admin.clothcreate",compact("Categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $img=$request->cloth_img;
        // $extenstion = $img->getClientOriginalName();
        // $extension = $file->extension();
        // $img->move('../public/assets/img/', $extenstion);

        // $path = $request->file('cloth_img')->store('public/assets/img/');
        // $path = Storage::putFileAs(
        //     'assets/img/', $request->file('cloth_img')
        // );

        // $cloth = new Cloth;
        // $cloth->cloth_img = $request->cloth_img;
        // $image= uniqid() . $request->file('cloth_img')->getClientOriginalName();
        //         $path = $request->file('cloth_img')->storeAs('uploads', $image , '../public/assets/img/');
        //         $cloth->cloth_img = '/storage/' . $path;
        //         $cloth->cloth_name =$request->cloth_name;
        //         $cloth->categorie_id =$request->categorie_id;
        //         $cloth->cloth_description =$request->cloth_description;

        //         $cloth->save();

        Cloth::create($request->all());

   

        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.categorie_id',
            'cloths.cloth_description',
            'categories.categorie_name',
            'users.name',
        ])->Join('users','cloths.user_id', '=', 'users.id')
        ->Join('categories','categories.id', '=','cloths.categorie_id')
        ->get();
       return view('admin.tables',compact('cloths'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function show(Cloth $cloth)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function edit(Cloth $cloth)
    {
        //
        $Categories=Category::all();
        return view("admin.clothedit",compact('cloth','Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cloth $cloth)
    {
   
        $cloth->update($request->all());
        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.categorie_id',
            'cloths.cloth_description',
            'categories.categorie_name',
            'users.name',
        ])->Join('users','cloths.user_id', '=', 'users.id')
        ->Join('categories','categories.id', '=','cloths.categorie_id')
        ->get();
    

       return view('admin.tables',compact('cloths'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cloth $cloth)
    {
        //
     
        $cloth->deleteOrFail();
        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.categorie_id',
            'cloths.cloth_description',
            'categories.categorie_name',
            'users.name',
        ])->Join('users','cloths.user_id', '=', 'users.id')
        ->Join('categories','categories.id', '=','cloths.categorie_id')
        ->get();
    

       return view('admin.tables',compact('cloths'));
    }

    public function uishowclothes(Cloth $cloth){
        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.categorie_id',
            'cloths.cloth_description',
            'categories.categorie_name',
            'users.name',
        ])->Join('users','cloths.user_id', '=', 'users.id')
        ->Join('categories','categories.id', '=','cloths.categorie_id')
        ->get();
    return view('ui.clothes',compact('cloths'));
    }

    
}
