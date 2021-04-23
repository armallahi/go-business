<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costs;
use App\Imports\CostssImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;

class CostController extends Controller
{
    public function getCosts(){
        $costs =  app('firebase.firestore')->database()->collection('Dataset');
        $documents = $costs->documents();
        $costs = $documents->rows();
  
        return view('dashboard')->with(compact('costs'));
    }

    public function addCost(Request $request){

        $student = app('firebase.firestore')->database()->collection('Dataset')->newDocument();
         $cost =  $student->set([
            'fixed_costs' => $request->input('fixed_costs'), //go fiexed cost value in fixed_costs column
            'variable_costs' => $request->input('variable_costs'), //go variable cost value in variable_cost column
            'furniture_costs' => $request->input('furniture_costs'),    //go furniture costs value in furniture_cost column
            'equipment_costs'=> $request->input('equipment_costs'), // go equipment costs value in equipment_costs column
            'rental_payment' => $request->input('rental_payment'),  //go rental payment value in rental_payment column
            'capital' => $request->input('capital') //go capital value in capital column
        ]);

        if($cost){
            return redirect()->back()->with(['success' => 'تمت إضافة البيانات بنجاح']);
        }
        
    }

    public function remove($id){
        // each record id is comming in the controller and used to delete the record
        $student = app('firebase.firestore')->database()->collection('Dataset')->document($id)->delete();
        if($student){
            return redirect()->back()->with(['success' => 'تمت إزالة البيانات بنجاح']);
        }
    }

    public function addFile(Request $request){
        if($request->has('file')){ //check if file is coming
            
            Excel::import(new CostssImport, $request->file('file')); //sending file to Excel class
            return redirect(route('dashboard'))->with(['success' => 'تم رفع الملف بنجاح']);
        }else{ // if file is not coming
            return redirect()->back()->with(['error' => 'لا يوجد ملف']);
        }
    }

    public function edit($id){

        $document = app('firebase.firestore')->database()->collection('Dataset')->document($id);
        $snapshot = $document->snapshot();
        if ($snapshot->exists()) {
            $data = $snapshot->data();
            $id = $snapshot->id();
            return view('edit')->with(compact('data', 'id'));
        }else{
            return redirect()->back()->with(['error' => 'لا يوجد بيانات لهذا الرمز']);
        }
        
    }

    public function update(Request $request){

        $record = app('firebase.firestore')->database()->collection('Dataset')->document($request->input('id'))
        ->set($request->all());
        
        return redirect()->back()->with(['success' => 'تم تحديث السجل بنجاح']);
    }

    public function resetPassword(Request $request){
        $code = mt_rand(100000, 999999);
        $request->session()->put('otp', $code);
        Mail::to('Mshunaifi00@hotmail.com')->send(new ResetPassword($code));
        return view('auth2.confirm-otp');
    }

    public function confirm_otp(Request $request){
        if($request->has('otp') && $request->filled('otp')){
            if($request->session()->has('otp')){
                if($request->input('otp') == $request->session()->get('otp')){
                    return view('auth2.resetPassword');
                }else{
                    $error = 'رمز تحقق خاطئ';
                    return view('auth2.confirm-otp')->with(compact('error'));
                }
            }
        }else{  
            return view('auth2.confirm-otp')->with(['error' => 'لا يوجد رمز تحقق']);
        }
    }

    public function changePassword(Request $request){
        if($request->input('new_password') != $request->input('confirm_password')){
            $error = 'Password Confirmation does not match';
            return view('auth2.resetPassword')->with(compact('error'));
        }else{
            $admin =  app('firebase.firestore')->database()->collection('Admin');
            $query = $admin->where('email' , '=',  'Mshunaifi00@hotmail.com');
            $document = $query->documents();
            $rows = $document->rows();
            $id = $rows[0]->id();
            $data = $rows[0]->data();

            $record = app('firebase.firestore')->database()->collection('Admin')->document($id)
            ->set([
                'username' => $data['username'],
                'email' => 'Mshunaifi00@hotmail.com',
                'password' => $request->input('new_password')
            ]);

            return redirect(route('login'))->with(['success' => 'تم إعادة تعيين كلمة المرور بنجاح']);
   
        }
    }
}
