<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disease;
use DataTables;

class DiseaseController extends Controller
{
    //
    public function index(){
    	$diseases = Disease::paginate(15);

    	return view('disease.index', compact('diseases'));
    	#return datatables()->of(Disease::all());
    	return Datatables::of(Disease::query())->make(true);
    }

    public function edit($id){
    	$disease = Disease::where('id',$id)->firstOrFail();
    	return view('disease.edit', compact('disease'));
    }

    public function update(Request $request, $id){
    	$disease = Disease::where('id', $id)->firstOrFail();
    	$disease->name_en = $request->name_en;
    	$disease->name_vi = $request->name_vi;
    	$disease->description_vi = $request->description_vi;
    	$disease->save();

    	return redirect()->route('disease');
    }

    public function detail($id){
    	$disease = Disease::where('id',$id)->firstOrFail();
    	return view('disease.detail', compact('disease'));
    }

    public function ajaxGetDetail($id) {
        $disease = Disease::where('id',$id)->firstOrFail();

        return view('disease.ajax_disease_detail', compact(['disease']))->render();
    }

    public function modify(){}

}
