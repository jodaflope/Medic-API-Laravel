<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return $patients;
    }

    public function store(Request $request){
        $patient = Patient::create($request->all());
        return response()->json($patient,201);

    }

    public function update(Request $request, String $id){
        $patients = Patient::
    }
}
