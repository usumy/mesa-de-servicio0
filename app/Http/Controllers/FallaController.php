<?php

namespace App\Http\Controllers;
use App\Falla;
use Illuminate\Http\Request;
use App\Http\Requests\saveFallaRequest;
use Illuminate\Support\Facades\DB;

class FallaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            return view('falla.create',[
                'falla'=> new falla

            ]);
        }
    public function show(falla $falla)
        {
            
            return view('falla.show', [
                'falla' => $falla
            
            ]);
            
            $falla = falla::find($falla);
            $userName = $falla->user->name;

        return view('falla.show', compact('falla','username'));
        }
    public function view($id)
        {
            return view('falla.view', [
                'falla' => falla::find($id)
            
            ]);

            return view('falla.view', compact('falla'));
        }
    public function create()
        {
            return view('falla.create',[
                'falla'=> new falla

            ]);
        }
    public function store(saveFallaRequest $request)
        {
            $validatedData = $request->validated();
            $validatedData['user_id'] = auth()->id(); // Asigna el ID del usuario autenticado

            falla::create($validatedData);
            

        
        
            return redirect()->route('falla.index')->with('status','La falla fue registrada con exito');
        }
    public function __construct()
        {
        $this->middleware('auth')->except('index','show');
        }
    public function update(falla $falla, saveFallaRequest $request)
        {
            $falla->update( $request->validated());
            return redirect()->route('falla.show',$falla)->with('status','el proyecto fue actualizado con éxito');
        }
 }


