<?php

namespace App\Http\Controllers;
use App\Models\materias;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    //
    public function index()
    {
        $materias = DB::table('Materia')
        ->select('*')
        ->where('state','=','1')
        ->paginate(5);
        //dd($materias);
        return view('materias/index',compact('materias'));
    }
}
