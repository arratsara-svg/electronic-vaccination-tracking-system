<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vaccine;


class VaccineController extends Controller
{
   // عرض قائمة اللقاحات
   public function index()
   {
       $vaccines = Vaccine::all();
       return view('vaccines.index', compact('vaccines'));
   }

     // عرض نموذج إضافة لقاح جديد
     public function create()
     {
         return view('vaccines.create');
     }

   // حفظ لقاح جديد في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'available_from' => 'required|date',
        ]);

        Vaccine::create($request->all());
        return redirect()->route('vaccines.index')->with('success', 'تمت إضافة اللقاح بنجاح');
    }

   
    // عرض تفاصيل لقاح معين
    public function show(Vaccine $vaccine)
    {
        return view('vaccines.show', compact('vaccine'));
    }

     // عرض نموذج تعديل لقاح
     public function edit(Vaccine $vaccine)
     {
         return view('vaccines.edit', compact('vaccine'));
     }

    // تحديث بيانات اللقاح
    public function update(Request $request, Vaccine $vaccine)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'available_from' => 'required|date',
        ]);

        $vaccine->update($request->all());
        return redirect()->route('vaccines.index')->with('success', 'تم تحديث بيانات اللقاح بنجاح');
    }

     // حذف لقاح
     public function destroy(Vaccine $vaccine)
     {
         $vaccine->delete();
         return redirect()->route('vaccines.index')->with('success', 'تم حذف اللقاح بنجاح');
     }
}
