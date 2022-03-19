<?php

namespace App\Http\Controllers;


use App\Models\Cloth;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
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

        $cloths= DB::table('cloths')->select([
            'cloths.id',
            'cloths.cloth_name',
            'cloths.cloth_img',
            'cloths.size',
            'cloths.available',
            'cloths.categorie_id',
            'cloths.beneficiary_name',
            'cloths.cloth_description',
            'categories.categorie_name',
            'users.name',
        ])->Join('users','cloths.user_id', '=', 'users.id')
        ->Join('categories','categories.id', '=','cloths.categorie_id')
        ->get();
       return view('admin.tables',compact('cloths'));
    
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

        return redirect('/cloth');

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
           

        if($request->hasFile('cloth_img')){

        $img=$request->file('cloth_img');
        $extenstion = $img->getClientOriginalName();
        $img->move('../public/assets/img/', $extenstion);
        $cloth->cloth_img= $extenstion;
        }
        
        $cloth->cloth_name = $request->input('cloth_name');
        $cloth->cloth_description = $request->input('cloth_description');
        $cloth->size = $request->input('size');
        $cloth->available=$request->input('available');
        if($request->input('available')=="yes"){
            $cloth->beneficiary_name="admin@gmail.com";
        }
     
        $cloth->categorie_id  = $request->input('categorie_id');
        $cloth->user_id = Auth::user()->id;
        $cloth->save();
    
        return redirect('/cloth');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cloth $cloth)
    {
     
        $cloth->deleteOrFail();
        return redirect('/cloth');

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
    
            $request->validate([
                'cloth_name' => 'required|min:4',
                'cloth_img' => 'required',
                'cloth_description'=>'required | min:10',
                'categorie_id' =>'required ',
                'size'=>'required'
            ]);


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
        return redirect('/showClothes');
}
    else{
        return redirect('/login');
    }

    }

    public function AddClotheToCart(Request $request, Cloth $cloth){
        if(Auth::check()){
            $beneficiary_name = Auth::user()->email; 
            $tomorrow = date("d-m-Y", strtotime("+7 day"));
        DB::table('cloths')->where('id', $cloth->id)->update(['available' => 'No' , 'beneficiary_name'=>$beneficiary_name,"Access_time"=>$tomorrow]);
        if((Cloth::where('available','yes')->count()) !=0){
       return redirect('/showClothes');
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
         $user_login_name = Auth::user()->email; 
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



    public function profileupdate(Request $request, User $user){
        $request->validate([
            'name' =>  'required| min:4',
            'password' => 'required| min:8',
            'phone' => 'required| size:10'
        ]);

        $user->update($request->all());   
        return redirect('/profile');
    }

    public function searchClothes(Request $request){
      
        $cloths = Cloth::query()
        ->where('cloth_name', 'LIKE', "%{$request->cloth_name}%")
        ->where('size', 'LIKE', "%{$request->size}%")
        ->get();
   
        if(count($cloths) == 0){
            return view('ui.NoItem');
        }
        else{
              return view('ui.clothes',compact("cloths"));
        }
    }
    
}
