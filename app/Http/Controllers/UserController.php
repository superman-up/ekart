<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;


class UserController extends Controller
{
    public function showUser(){
        $Users = User::paginate(5,['*'],'data');
        return view("showUser",['data'=>$Users]);      
   }

   public function singleUser(string $id){
        $user = User::where('id',$id)->get();
        return view('singleUser',['singleUser'=>$user]);
   }

   public function addUser(Request $request){
        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "age" => "required|numeric|between:18,25",
            "phone"=> "required|numeric|min:10"
        ]);
        return $request;
       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->age = $request->age;
       $user->phone = $request->phone;        
       $user->save();
         

       if($user){
           return redirect()->route('allUser');// via named route url
          // return Redirect('/showUser'); // via simple route url
       }else{
           echo "New record not Insert";
       }

   }
   public function updateUser(string $id){
        $user = User::find($id);
        return view("updateUser",["data"=>$user]);
   }
   public function updateUserData(string $id, Request $request){
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->age = $request->age;
    $user->phone = $request->phone;
    $user->save();
    if($user){
        return redirect()->route('allUser');
    }else{
        echo "Sorry User not Updated!";
    }
}

   public function deleteUser(string $id){
      $user =  User::find($id);
      $user->delete();

      if($user){
           return redirect()->route('allUser');
      }else{
       echo "data not deleted.";
      }
   }
   public function resetTable(){
        $user = User::truncate();    
        return redirect()->route('allUser'); 
   }
}
