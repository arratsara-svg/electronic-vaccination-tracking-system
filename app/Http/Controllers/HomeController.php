<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) { // التحقق من تسجيل الدخول بشكل صحيح
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                 return view('user.home',compact('doctor'));
                
            } else {
                return view('admin.home');
       
            }
        } else {
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{

        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
        }
    }
    public function appointment(Request $request){
        $data = new appointement ;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Appointment Request Successful . we will contact with you soon');
    }
    public function myappointment(){
        if(Auth::id()){

            $userid=Auth::user()->id;
            $appoint=Appointement::where('user_id',$userid)->get();

        return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }
    public function cancel_appoint($id){

        $data=Appointement::find($id);
        $data->delete();
        return redirect()->back();
    }

   

    public function myChildren()
{
    $user = auth()->user();
    $children = $user->childrens; // ✅ استخدم اسم العلاقة كما هو في الموديل

    return view('user.mychildren', compact('children'));
}
}















