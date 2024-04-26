<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\UserRequest;
use App\Http\Requests\User\UserupdateRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // num 1 
        // $user  = User::all();

        //num 2
        // $user = User::select('name','email','age')->get();

        //num 3
        //$user = User::where('city','lalmonirhat')->get();
        // $user = User::where('city','lalmonirhat')->where('age',21)->get();
        //$user = User::where('city','=','lalmonirhat')->orWhere('age','>',18)->get();
         
        //num 4
       // $user = User::find([2,3],['name','email','city']);

       //num 5
       //$user = User::count();

       //num 6
       //$user =  User::min('age');

       //num 7 
       //$user = User::max('age');

       //num 8
       //$user = User::sum('age');

       //num 9
       //$user = User::whereCity('lalmonirhat')->get();

       //num 10
       //$user = User::select('name','email as user email')->get();
       

       //num 11 error chak
       // $user = User::select('name','email as user email')->tosql();

       //$user = User::select('name','email as user email')->get();
       //return dd($user);


       //$user = User::select('name','email as user email')->ddRawSql();
       //$user = User::select('name','email as user email')->toRawSql();
       


       //num 12
       //$user = User::selectRaw('name','age')->get();
       // return $user;
       

        // $user = User::where('id',1)->get();


        $user = User::get();
       return view('welcome',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('singup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // return $request;
        // method one 
      // $user = new User;

      // $user->name = $request->name;
      // $user->email = $request->email;
      // $user->password = Hash::make($request->password);
      // $user->city = $request->city;
      // $user->age = $request->age;

      // $data = $user->save();

      // method tow

$data = User::create([
       'name' => $request->name,
       'email' => $request->email,
       'password' => Hash::make($request->password),
       'city' => $request->city,
       'age' => $request->age,
]);


if($data){
    return redirect()->route('users.index')->with('status','New user create successfull!');
}else{
    return 'New user create does not successfull!';
}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       if(User::where('id',$id)->exists()){
    //    $user = User::find($id);

    $user = User::where('id',$id)->get();
       return view('singleuser',compact('user'));

       }else{

        return 'User does not exists';

       }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       if(User::where('id',$id)->exists()){
        $user = User::find($id);
        return view('update',compact('user'));
       }else{
        return 'User does not exists';
       }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserupdateRequest $request, string $id)
    {
        // return $request;
        if(User::where('id',$id)->exists()){
          //  method one
    
         
        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->city = $request->city;
        // $user->age = $request->age;

        // $data =  $user->save();


        //method tow
        $data = User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'age' => $request->age,

        ]);
          if($data){
            return redirect()->route('users.index')->with('status','User Update successfull!');
          }
        }else{
            return 'User does not exists';
        }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(User::where('id',$id)->exists()){
            // method one 
            // $user = User::find($id);
            // $user->delete();
            // method tow
            $user = User::destroy($id);
            return redirect()->route('users.index')->with('status','User delete successfull!');
        }else{
            return 'User does not exists!';
        }
    }
}
