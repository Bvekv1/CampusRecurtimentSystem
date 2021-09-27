<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
use App\job;
use App\Applications;
use App\cv;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class Students extends Controller
{
    
    //function for loading student details from database
    public function editProfileStudent($id){
            $data = DB::table('students')->get()->where('id',$id);
            return view("editProfileStudent",['data'=>$data]);
         }
     //function for updating student profile in database
    public function updateStudentProfile(Request $request, $id){
        $data = Student::find($id);
        $data->name= Input::get('Name');
        $data->email= Input::get('Email');
        $data->save();
        $request->session()->flash('alert-success', 'Record Updated!');
        return view('editProfileStudent');
     }
     //function for job details form database
     public function viewJobStudent(Request $request){
        $data=DB::table('jobs')->get();
        return view('viewJobStudent', ['users' => $data]);
    }

    public function applyJob(){
        $data = new Applications();
        $data->Name= Input::get('Name');
        $data->Email= Input::get('Email');
        $data->CompanyUserID= Input::get('CompanyUserId');
        $data->save();
        return view('student');
    }

    public function Profile(Request $request){
        return view('Profile',array('user'=>Auth::guard('student')->user()));
    }
  
    public function update_avatar(Request $request){
        if($request->hasfile('avatar')){
            $avatar= $request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

             $user=Auth::guard('student')->user();
             $user->avatar=$filename;
             $user->save();
        }
        return view('Profile',array('user'=>Auth::guard('student')->user()));
       // return redirect()->intended('editProfileStudent');

    }

    public function ProfileImage(Request $request){
        if($request->hasfile('avatar')){
            $avatar= $request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

             $user=Auth::guard('student')->user();
             $user->avatar=$filename;
             $user->save();
        }
       // return view('editProfileStudent',array('user'=>Auth::guard('student')->user()));
       // return redirect()->intended('editProfileStudent');
       return redirect()->intended('editProfileStudent');
    }

    public function searchJob(Request $request){
        $q=Input::get('q');
        if($q !=''){
            $user=DB::table('jobs')->where('JobRole','LIKE','%'.$q.'%')
            ->orWhere('PositionLevel','LIKE','%'.$q.'%')
            ->orWhere('Department','LIKE','%'.$q.'%')
            ->orWhere('Location','LIKE','%'.$q.'%')
            ->orWhere('Skills','LIKE','%'.$q.'%')
            ->orWhere('Salary','LIKE','%'.$q.'%')
            ->get();
            if(count($user)>0){
            return view('viewJobStudent', ['users' => $user]);
            }
            return view('viewJobStudent')->with('message',"No ResultFound");
        }


    }
    public function uploadFilePost(Request $request )
    {
        $file = Input::file('fileToUpload');
        $path = 'uploads/cv/';
        $file_name = $file->getClientOriginalName();
        $file->move($path, $file_name);

        //$new_file = new cv();
       // $new_file->file_path=$path.$file_name;
        //$new_file->save();
        //return view('add')->with('message', "hellow rosl");

       // $request->validate([
         //   'fileToUpload' => 'required|file|max:1024',
       // ]);

       //$fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();

        ///$request->fileToUpload->storeAs('logos',$fileName);

        //$user=Auth::guard('student')->user();
        //$user->cv=$fileName;
    
        //$user->save();

       // return view('add')
           //->with('message','You have successfully upload image.');

         
      //$uploadedFile = $request->file('fileToUpload');
      //$filename = time().$uploadedFile->getClientOriginalName();

      //$file->store('public/storage');

      $upload = new cv;
      $upload->cv = $file_name;
      $upload->StudentId=Auth::guard('student')->user()->id;
      
      $upload->save(); 
      return view('add')->with('message', 'file uploaded');
    }
    public function viewCV($id){
        $data = DB::table('cv')->get()->where('StudentId',$id);
        return view("test",['data'=>$data]);
    }
   

    }
   

