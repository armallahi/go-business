<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Factory;
use Kreait\Laravel\Firebase\Facades\Firebase;


class FirebaseController extends Controller
{

    public function index(){
        

        $student = app('firebase.firestore')->database()->collection('Students')->newDocument();
        $student->set([
            'firstname' => 'jazzy',
            'lastname' => 'mehar',
            'age' => 24
        ]);
    }
}
