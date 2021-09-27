<?php

namespace App\Http\Controllers;
use App\job;
use App\User;
use App\Applications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Company extends Controller
{
    //Function for adding new job record in database
    public function postJob(Request $request){
        $data = new job();
        $data->JobRole= Input::get('JobRole');
        $data->PositionLevel= Input::get('PositionLevel');
        $data->Department= Input::get('Department');
        $data->Location= Input::get('Location');
        $data->Skills=Input::get('Skills');
        $data->Salary=Input::get('Salary');
        $data->CompanyUserId=Input::get('CompanyUserId');
        $data->save();
        $request->session()->flash('alert-success', 'Job was successful added!');
        return redirect()->intended('postJob');
    }

    //Function for retrving job record from database
    public function viewJob($id){
        $data=DB::table('jobs')->get()->where('CompanyUserId',$id);
        return view('showJob', ['users' => $data]);
    }   

     //Function for deleting job record from database
    public function deleteJob($id) {
        DB::table('jobs')->where('id', $id)->delete();
        session()->flash('alert-success', 'Job was successful deleted!');
        return view('showJob');
}
     //Function to select job details from database for update
     public function updateJob($id){
        $data = DB::table('jobs')->get()->where('id',$id);
        return view("renderjob",['data'=>$data]);
     }

     //Function for updating job record from database
     public function editJob($id){
        $data = job::find($id);
        $data->JobRole= Input::get('JobRole');
        $data->PositionLevel= Input::get('PositionLevel');
        $data->Department= Input::get('Department');
        $data->Location= Input::get('Location');
        $data->Skills=Input::get('Skills');
        $data->Salary=Input::get('Salary');
        $data->save();
        session()->flash('alert-success', 'Record Updated!');
        return view('renderjob');
     }
      //below Function retrive data from users table in database and fetch it to view
     public function editProfileCompany($id){
        $data = DB::table('users')->get()->where('id',$id);
        return view("editProfileCompany",['data'=>$data]);
     }

    //below Function updae the company profile details from user table

    public function updateCompanyProfile(Request $request, $id){
        $data = User::find($id);
        $data->name= Input::get('Name');
        $data->email= Input::get('Email');
        $data->save();
        $request->session()->flash('alert-success', 'Record Updated!');
        return view('editProfileCompany');
     }

      //below Function load the applicants details from application table and render it for company
     public function viewApplicant($id){
         $data=DB::table('applications')->get()->where('CompanyUserId', $id);
         return view('viewApplicant', ['users' => $data]);

         }
         public function deleteApplicant($id) {
            DB::table('applications')->where('id', $id)->delete();
           
            return view('showJob');
    }
}