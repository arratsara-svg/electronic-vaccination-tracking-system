<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointement;
use App\Models\Doctor;
use App\Models\Children;
use App\Models\User;
use App\Models\Vacc;
use  Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }
    public function upload(Request $request){
            //send img to database
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        //send the other column
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');

    }

    public function showappointments(){

        $data=Appointement::all();

        return view('admin.showappointments',compact('data'));
    }
    public function approved($id){
        $data=Appointement::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id){
        $data=Appointement::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();

    }
    public function showdoctor(){
        $data=Doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
    public function deletedoctor($id){
        $data=Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editdoctor(Request $request,$id){

         $doctor = doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        $image=$request->file;

         if($image)
         {
            $imagename=time().".".$image->getClientOriginalExtension();

            $request->file->move("doctorimage",$imagename);
            $doctor->image = $imagename;
         }

         $doctor->save();
        return redirect()->back();

    }
    public function addchild(){
        return view('admin.add_children');
    }
    public function updatedoctor($id){
           $data = doctor::find($id);
        return view('admin.update_doctor',compact('data'));

    }


  
public function uploadchild(Request $request){
     $request->validate([
            'user_email' => 'required|email|exists:users,email',
            'namechild' => 'required|string',
            'birthchild' => 'required|numeric',
            'addresschild' => 'required|string',
            'father' => 'required|string',
            'mother' => 'required|string',
            'vaccchild' => 'required|string',
            'datechild' => 'required|date',
            'healthcenter' => 'required|string',
            'nextvisit' => 'required|date',
        ]);

        $user = User::where('email', $request->user_email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'This email is not registered.');
        }

        $children = new Children;
        $children->namechild = $request->namechild;
        $children->birthchild = $request->birthchild;
        $children->addresschild = $request->addresschild;
        $children->father = $request->father;
        $children->mother = $request->mother;
        $children->vaccchild = $request->vaccchild;
        $children->datechild = $request->datechild;
        $children->healthcenter = $request->healthcenter;
        $children->nextvisit = $request->nextvisit;
        $children->users_id= $user->id;

        $children->save();

        return redirect()->back()->with('message', 'Child Added Successfully');
    }


    public function showchildren(){
        $data = children::all();
        return view('admin.showchildren',compact('data'));
    }
    public function deletechild($id){
        $data = children::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatechild($id){
        $data = children::find($id);
        return view('admin.update_child',compact('data'));
    }
    public function editchild(Request $request,$id){
        $children = children::find($id);
        $children->namechild=$request->namechild;
        $children->birthchild=$request->birthchild;
        $children->addresschild=$request->addresschild;
        $children->father=$request->father;
        $children->mother=$request->mother;
        $children->vaccchild=$request->vaccchild;
        $children->datechild=$request->datechild;
        $children->healthcenter=$request->healthcenter;
        $children->nextvisit=$request->nextvisit;
        $children->save();
        return redirect()->back();
    }
    public function addvacc(){
             return view('admin.add_vacc');
    }
    public function uploadvacc(Request $request){
        $Vacc = new Vacc;
        $Vacc->name_vacc=$request->name_vacc;
        $Vacc->type_vacc=$request->type_vacc;
        $Vacc->save();
        return redirect()->back()->with('message','Vacc Added Successfully');
    }
    public function showvacc(){
        $data = Vacc::all();
        return view('admin.show_vacc',compact('data'));
    }
    public function deletevacc($id){
        $data = Vacc::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatevacc($id){
             $data = Vacc::find($id);
        return view('admin.update_vacc',compact('data'));
    }

    public function editvacc(Request $request,$id){
        $Vacc = Vacc::find($id);
        $Vacc->name_vacc=$request->name_vacc;
        $Vacc->type_vacc=$request->type_vacc;
         $Vacc->save();
        return redirect()->back();
    }

    public function searchchild(){
        return view('admin.search_child');
    }

    public function showsearch(Request $request){
        $request->validate([
            'id'=>'required|numeric',
            'namechild'=>'required|string',
            
        ]);

          $children=children::where('id',$request->id)
                                    ->where('namechild', $request->namechild)
                                    ->first();

        return view('admin.show_search', compact('children'));
    }
}

 