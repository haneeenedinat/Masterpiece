<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;




class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Contacts= DB::table('contacts')->select([
                    'contacts.Message',
                    'contacts.id',
                    'contacts.user_id',
                    'users.name',
                    'users.phone',
                ])->Join('users','contacts.user_id', '=', 'users.id')
                ->get();
        return view('admin.contactTable',compact('Contacts'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        if(Auth::check()){
        $Message  = $request->Message;
        $user_id = Auth::user()->id;
        $data = array(
        'Message'=>$Message,
        "user_id"=>$user_id,
    );
    DB::table('contacts')->insert($data);
    return redirect()->back()->with('message','We will contact you as soon as possible');
   
}

else{
    return redirect('/login');
}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
    //  dd($contact);
     $contact->deleteOrFail();
        $Contacts= DB::table('contacts')->select([
            'contacts.Message',
            'contacts.id',
            'users.name',
            'users.phone',
        ])->Join('users','contacts.user_id', '=', 'users.id')
        ->get();
       return view('admin.contactTable',compact('Contacts'));
    }
}
