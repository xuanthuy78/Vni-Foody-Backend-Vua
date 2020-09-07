<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\User;
use Validator;
use App\Http\Controllers\Hash;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {
     
    $validator = Validator::make($request->all(), [
    'name' => 'required',
    'email' => 'required|email',
    'password' => 'required',
    'c_password' => 'required|same:password',
    ]);
    if ($validator->fails()) {
    return response()->json(['error'=>$validator->errors()], 401);}
    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $input['c_password'] = bcrypt($input['c_password']);
    $user = User::create($input);
    $success['token'] =  $user->createToken('MyApp')->accessToken;
    $success['name'] =  $user->name;
    return response()->json(['success'=>$success]);

    }
    public function login(){ 
       if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
          $user = Auth::User(); 
          $success['token'] =  $user->createToken('MyApp')-> accessToken; 
          return response()->json(['success' => $success,  'token_type' => 'Bearer',]); 
        } 
       else{ 
         return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
    public function logout(Request $request)
    {
        $request->User()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    public function index()
    {
        
        return User::all();
    }
    public function show(User $id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
        if( $id->update($request->all())){
            return response()->json(["message" => "User  update Succesfully"]);
           }
           else
           {
                 return response()->json(["message" => "User  update fail."]);
           }
    }
    

    public function changePassword(Request $request, User $id){
        try {
            $valid = validator($request->only('old_password', 'new_password', 'confirm_password'), [
                'old_password' => 'required',
                'new_password' => 'required|different:old_password',
                'confirm_password' => 'required_with:new_password|same:new_password|',
                    ], [
                'confirm_password.required_with' => 'Confirm password is required.'
            ]);
    
            if ($valid->fails()) {
                return response()->json([
                            'errors' => $valid->errors(),
                            'message' => 'Faild to update password.',
                            'status' => false
                                ], 200);
            }
            if (Hash::check($request->get('old_password'), Auth::users ()->password)) {
                $user = User::find(Auth::users()->id);
                $user->password = (new BcryptHasher)->make($request->get('new_password'));
                if ($user->save()) {
                    return response()->json([
                                'data' => [],
                                'message' => 'Your password has been updated',
                                'status' => true
                                    ], 200);
                }
            } else {
                return response()->json([
                            'errors' => [],
                            'message' => 'Wrong password entered.',
                            'status' => false
                                ], 200);
            }
        } catch (Exception $e) {
            return response()->json([
                        'errors' => $e->getMessage(),
                        'message' => 'Please try again',
                        'status' => false
                            ], 200);
        }
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
}
