<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function register(Request $request)
    {
      

        $user =  User::create([
            'name' => $request -> get('name'),
            'email' => $request -> get('email'),
            'password' => Hash::make($request -> get('password'))
        ]);
        $user->save();
        

        /*
        //dd($request -> all());
        $input = $request->all();
        if(User::create($input)){
            true;
        }
        else{
            false;
        }
          //echo 'THIS IS REGISTER FUNCTION';
        //dd('THIS IS REGISTER FUNCTION');
        */
    }

    public function login(LoginRequest $request)
    {
     
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', '=', $email)->first();
        
        //dd($user);
      
        if (!$user) {
           // return response()->json(['success'=>false, 'message' => 'Invalid email','status' => 401]);
            return response()->json(['status'=>'error', 'message' => 'Invalid email'],200);
 
        }
         if (!Hash::check($password, $user->password)) {
            return response()->json(['status' =>'error', 'message' => 'Invalid password'],200);
         }
            return response()->json(['status' =>'success','message'=>'Successfully Loged in!', 'data' => $user],200);

        //echo 'THIS IS LOGIN FUNCTION';
        //dd('THIS IS LOGIN FUNCTION');
    }
}
