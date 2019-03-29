<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\User;
Use Validator;
Use Auth;
use DB;
use App\like;

class UserController extends Controller
{
    public function postlogin(Request $request){
        $data = $request->all();
        $validator = Validator::make($request->all() ,[
            'email' => 'required',
            'password' =>'required',
        ]);

          if (Auth::attempt([
                 'email' => $data['email'],
                    'password' => $data['password']
                ])){
                    // return 'name and password correct';
                     return redirect()->intended('/dashboard');
            }else{ 

                return 'not correct';
            }
           
                          
     }

    public function postsignup(Request $request){
        $data = $request->all();
        $data['password']= bcrypt($data['password']);
      
        $this->validate($request ,[
            'first_name' => 'required',
            'last_name' =>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'password'=>'required',
            'country'=>'required',
            'state'=>'required',
            'interest'=>'required',
        ]);

        
        
        $file      = $data['image'];  // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename  = 'profile-photo-' . time() . '.' . $extension;
        //$fileArray = array('image'=> $file);
       // $rules = array(
            // 'image'=> 'mimes:jpeg,jpg,png,gif|max:1000' //1000kb
        //);
       // $vaidator=Validator::make($filearray, $rules);        
        $path = $file->storeAs('uploads', $filename, 'public');
         
        $user = user::create([
            'first_name' => $data['first_name'],
            'last_name'=>$data['last_name'],
            'email'=>$data['email'],
            'phone_number'=>$data['phone_number'],
            'password'=>$data['password'],
            'country'=> $data['country'],
            'state' => $data['state'],
            'interest'=>implode('',$data['interest']),
            'image'=> $path      
        ]);

            if($this->validate->passes()){
                        $user = $this->create($data)->toArray();
                        $user['link'] = str_random(30);

                        DB::table('user-activation')->insert(['user_id'=>$user['id'] , 'token'=>$user['link']]);
                        Mail::send('mail.activation' ,$user, function($message) use ($user){
                            $message->to($user['email']);
                            $message->subject('pilotpairing@gmail.com');
                        });
                        return redirect()->to('/login')->with('success', 'we sent you activation code,please check your email');
                    }
                    return back()->with('Error', $this->validate->errors()); 
                

                Response()->json([
                    'status' => true,
                    'data' => $user,
                    'message' => 'sign up successful'

                ],200); 

     } 

     public  function userActivation($token){
        $check =DB::table('user_activation')->where('token')->first();
        if(!is_null($check)){
            $user = user::find($check->user_id);
                if($user->is_activated == 1){
                     return redirect()->with('message' , 'user is already activated');
            }         
        $user->update(['is_activated'=> 1]);
        DB::table('user_activation')->where('token',$token)->delete();
        return redirect()->to('login')->with('success','user is activated');
      }
      return redirect()->to('login')->with('success', 'your token is invalid');
        }
     
        public function logout(){
            Auth::logout();
            return redirect('/');
        }

             public function profileaccount(){
             return redirect('profile', ['user'=>Auth::user()]);

     }

        public function SaveUpdatedprofile(){

            $this->validate($request ,[
                'first_name' => 'required|max:100',
                'last_name'=> 'required|max:120',
                'password' => 'required|max:120',
                'phone_number' =>'required|max:120'

            ]);
                $user = Auth::user();
                $user->first_name=$request['first_name'];
                $user->last_name = $request['last_name'];
                $user->password = $request['password'];
                $user->phone_number = $request['phone_number'];
                $user->update();
                
                $file = $request->file('image');
                $filename= $request['first_name']. '-'.'$user-id' .jpeg|jpg|png|gif;

                if($files){
                   Storage::app('uploads')->put($filename , $file::get($file));
                }
                return redirect('/profile');
        }

        public function getuserimage(){
            $file= Storage::app('uploads')->get($filename);
            return  new Response($file, 200); 
        }
        
        public function check_email($email){
            $user = User::where('email', $email)->first();
            if ($user){
                return response()->json(['status' => true], 200);
            }
            return response()->json(['status' => false], 200);
        }

        
    }


