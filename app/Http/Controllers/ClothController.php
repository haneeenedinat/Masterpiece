<?php

namespace App\Http\Controllers;


use App\Models\Cloth;
use Illuminate\Support\Facades\Auth;
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

    //     $cloths= DB::table('cloths')->select([
    //         'cloths.id',
    //         'cloths.cloth_name',
    //         'cloths.cloth_img',
    //         'cloths.size',
    //         'cloths.available',
    //         'cloths.categorie_id',
    //         'cloths.cloth_description',
    //         'categories.categorie_name',
    //         'users.id',
    //         'users.name',
    //     ])->Join('users','cloths.user_id', '=', 'users.id')
    //     ->Join('categories','categories.id', '=','cloths.categorie_id')
    //     ->get();
    //    return view('admin.tables',compact('cloths'));
    
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


        $img=$request->cloth_img;
        $extenstion = $img->getClientOriginalName();
        $img->move('../public/assets/img/', $extenstion);

        $cloth_name = $request->input('cloth_name');
        $cloth_img = $request->file('cloth_img')->getClientOriginalName();
        $cloth_description = $request->input('cloth_description');
        $size = $request->input('size');
        $categorie_id  = $request->input('categorie_id');
        $user_id = Auth::user()->id;
       
     
        $data = array(
        'cloth_name'=>$cloth_name,
        "cloth_img"=>$cloth_img,
        "cloth_description"=>$cloth_description,
        "size"=>$size,
        "categorie_id"=>$categorie_id,
        "user_id"=>$user_id,
    );
    DB::table('cloths')->insert($data);


        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.size',
            'cloths.available',
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

        $img=$request->cloth_img;
        $extenstion = $img->getClientOriginalName();
        // dd($extenstion);
        // $extension = $file->extension();
        $img->move('../public/assets/img/', $extenstion);
   
        $cloth_name = $request->input('cloth_name');
        $cloth_img = $request->file('cloth_img')->getClientOriginalName();
     
        $cloth_description = $request->input('cloth_description');
        $size = $request->input('size');
        $available=$request->input('available');
        $categorie_id  = $request->input('categorie_id');
        $user_id = Auth::user()->id;

        $data = array(
        'cloth_name'=>$cloth_name,
        "cloth_img"=>$cloth_img,
        "cloth_description"=>$cloth_description,
        "size"=>$size,
        "available"=>$available,
        'beneficiary_name'=>'admin',
        "categorie_id"=>$categorie_id,
        "user_id"=>$user_id,
    );
    DB::table('cloths')->where('id', $cloth->id)->update($data);

   
        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.size',
            'cloths.available',
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
            'cloths.size',
            'cloths.available',
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
        if((Cloth::where('available','yes')->count()) !=0){
            $cloths= DB::table('cloths')->select([
                'cloths.id',
                'users.name',
                'cloths.cloth_name',
                'cloths.cloth_img',
                'cloths.size',
                'cloths.available',
                'cloths.categorie_id',
                'cloths.cloth_description',
                'categories.categorie_name',
                'users.name',
            ])->Join('users','cloths.user_id', '=', 'users.id')
            ->Join('categories','categories.id', '=','cloths.categorie_id')
            ->get();
        return view('ui.clothes',compact('cloths'));
        }
       else{
        return view('ui.cartempty');
    }

    }

    public function uishowDonate(){

        $Categories=Category::all();

        return view("ui.Donate",compact("Categories"));
    }

    public function uistoreDonate(Request $request){ 
        if(Auth::check()){
    
        $img=$request->cloth_img;
        $extenstion = $img->getClientOriginalName();
        $img->move('../public/assets/img/', $extenstion);

        $cloth_name = $request->input('cloth_name');
        $cloth_img = $request->file('cloth_img')->getClientOriginalName();
        $cloth_description = $request->input('cloth_description');
        $size = $request->input('size');
        $categorie_id  = $request->input('categorie_id');
        $user_id = Auth::user()->id;
       
     
        $data = array(
        'cloth_name'=>$cloth_name,
        "cloth_img"=>$cloth_img,
        "cloth_description"=>$cloth_description,
        "size"=>$size,
        "categorie_id"=>$categorie_id,
        "user_id"=>$user_id,
    );

        DB::table('cloths')->insert($data);
     
        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.categorie_id',
            'cloths.size',
            'cloths.available',
            'cloths.cloth_description',
            'categories.categorie_name',
            'users.name',
        ])->Join('users','cloths.user_id', '=', 'users.id')
        ->Join('categories','categories.id', '=','cloths.categorie_id')
        ->get();
    return view('ui.clothes',compact('cloths'));
}
    else{
        return redirect('/login');
    }

    }

    public function AddClotheToCart(Request $request, Cloth $cloth){
        if(Auth::check()){
            $beneficiary_name = Auth::user()->name; 
            $tomorrow = date("d-m-Y", strtotime("+7 day"));
        DB::table('cloths')->where('id', $cloth->id)->update(['available' => 'No' , 'beneficiary_name'=>$beneficiary_name,"Access_time"=>$tomorrow]);
        if((Cloth::where('available','yes')->count()) !=0){
        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'users.name',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.size',
            'cloths.available',
            'cloths.categorie_id',
            'cloths.cloth_description',
            'categories.categorie_name',
            'users.name',
        ])->Join('users','cloths.user_id', '=', 'users.id')
        ->Join('categories','categories.id', '=','cloths.categorie_id')
        ->get();
       return view('ui.clothes',compact('cloths'));
    }
       else{
        return view('ui.cartempty');
       }
    }
       else{
           return redirect('/login');
       }
    }

    public function showprofile(Cloth $cloth){
        $profile=[];
         $user_login_name = Auth::user()->name; 
         $user_login_id= Auth::user()->id;
    
       $availableNo=DB::table('cloths')->where('available','No')->where('beneficiary_name',$user_login_name)->get();
     $availableyes=DB::table('cloths')->where('available','yes')->where('user_id',$user_login_id)->get();
   

        if(count($availableNo) > 0){
        $profile=$availableNo;
    
         }
         if(count($availableyes) > 0){
        $profile=$availableyes;
    
         }
    
        return view('ui.profile',compact('profile'));
     

    }

    
}
