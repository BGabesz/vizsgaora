<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Szakdoga;
class szakdogakController extends Controller
{
    public function index(){
        $tabla= DB::table('szakdogas')->get();
        return response()->json($tabla);
    }
    public function store(Request $request){
        $request->validate([
           'szakdogaCim'=>'required',
           'keszitokneve'=>'required',
           'oldalElerhetoseg'=>'required',
           'githubElerhetoseg'=>'required',
       ]);
       $ujfoglalas =new Szakdoga;
       $ujfoglalas->szakdoga_nev=$request->szakdogaCim;
       $ujfoglalas->githublink=$request->keszitokneve;
       $ujfoglalas->oldallink=$request->oldalElerhetoseg;
       $ujfoglalas->tagokneve=$request->githubElerhetoseg;
       $ujfoglalas -> save();
       return response()->json(true);
   }
   public function destroy(string $id){
    $szakdoga=Szakdoga::find($id);
    $szakdoga->delete();
    return response()->json(true);
}
public function update(Request $request, string $id){
    $request->validate([
        'cim'=>'required',
        'neve'=>'required',
        'oldalelerhetoseg'=>'required',
        'gitelerhetoseg'=>'required'
    ]);
    Szakdoga::find($id)
    ->update(['szakdoga_nev' => $request -> cim,
        'githublink' => $request -> gitelerhetoseg,
        'tagokneve' => $request -> neve,
        'oldallink' => $request -> oldalelerhetoseg,]);

    return response()->json(true);
}
}