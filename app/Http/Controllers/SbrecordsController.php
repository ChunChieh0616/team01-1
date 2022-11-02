<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sbrecord;
class SbrecordsController extends Controller
{
    //
    public function index(){
        $sbrecord = Sbrecord::all();
        return view("sbrecords.index",["sbrecord"=>$sbrecord]);
    }
    public function show($id){
        $sbrecord=Sbrecord::findOrFail($id);
        return view("sbrecords.show",["sbrecord"=>$sbrecord]);
    }
    public function destroy($id){
        $sbrecord=Sbrecord::findOrFail($id);
        $sbrecord->delete();
        return redirect('sbrecords');
    }
}
