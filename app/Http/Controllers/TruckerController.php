<?php

namespace App\Http\Controllers;

use App\Models\Trucker;
use Illuminate\Http\Request;

class TruckerController extends Controller
{
    public function index(){

        $truckers = Trucker::orderBy('id', 'desc')->get();
        return view('truckers.listar', compact('truckers'));
    }

    public function create(){
        return view('truckers.create');
    }

    public function store(Request $request){
        $trucker = new Trucker();
        $trucker->nombre=$request->nombre;
        $trucker->poblacion=$request->poblacion;
        $trucker->telefono=$request->telefono;
        $trucker->direccion=$request->direccion;
        $trucker->salario=$request->salario;
        $trucker->save();

        return $trucker;
    }

    public function show(Trucker $trucker){
        return view('truckers.show', compact('trucker'));
    }

    

    public function destroy (Trucker $trucker){
        $trucker->delete();
        return redirect()->route('trucker.index');
    }

    public function edit(Trucker $trucker){
        return view('truckers.edit', compact('trucker'));
    }

    public function update(Request $request, Trucker $trucker){
       $trucker->nombre=$request->nombre; 
       $trucker->poblacion=$request->poblacion;
       $trucker->telefono=$request->telefono;
       $trucker->direccion=$request->direccion;
       $trucker->salario=$request->salario;

       $trucker->save();

       return redirect()->route('trucker.index');
    }
}
