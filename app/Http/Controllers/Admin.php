<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\cv;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Admin extends Controller
{
    //Function to select the details of company from database
    public function ListCompany(){
            $data = DB::table('users')->get();
            return view("ListCompany",['data'=>$data]);
         }
         //Function to delete the details of company from database
    public function deleteCompany($id) {
            DB::table('users')->where('id', $id)->delete();
            return redirect()->intended('companyList');
    }
     //Function to select the details of student from database
    public function ListStudent(){
        $data = DB::table('students')->paginate(2);
        return view("ListStudent",['data'=>$data]);
     }
     //Function to delete the details of student form database
     public function deleteStudent($id) {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->intended('studentList');
}
     //Function to select the details of job from database
     public function ListJob(){
    $data = DB::table('jobs')->get();
    return view("ListJob",['users'=>$data]);
 }
  //Function to delete the details of job from database
 public function deleteJob($id) {
    DB::table('jobs')->where('id', $id)->delete();
    return redirect()->intended('jobList');
}
 //Function to select the details of applications from database
public function ListApplication(){
    $data = DB::table('applications')->get();
    return view("ListApplications",['users'=>$data]);
 }
 //Function to select the delete the details of applications form database
 public function deleteApplicantAdmin($id) {
    DB::table('applications')->where('id', $id)->delete();
    return redirect()->intended('applicationList');
}
      //Function to search student
public function searchStudent(Request $request){
   $q=Input::get('q');
   if($q !=''){
       $data=DB::table('students')->where('name','LIKE','%'.$q.'%')
       ->orWhere('email','LIKE','%'.$q.'%')
       ->get();
       if(count($data)>0){
         return view('ListStudent', ['data' => $data]);
       }
      return view('ListStudent')->with('message',"No Result Found");
       }
      }
       public function searchCompany(Request $request){
         $q=Input::get('q');
         if($q !=''){
             $data=DB::table('users')->where('name','LIKE','%'.$q.'%')
             ->orWhere('email','LIKE','%'.$q.'%')
             ->get();
             if(count($data)>0){
               return view('ListCompany', ['data' => $data]);
             }
            return view('ListCompany')->with('message',"No Result Found");
             
             
         }
   
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
       return view('ListJob', ['users' => $user]);
       }
       return view('ListJob')->with('message',"No ResultFound");
   }
}

}