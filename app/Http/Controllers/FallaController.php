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
        
        return view('falla.index', [
            'falla' => $falla
           
        ]);
        
        $falla = falla::find($falla);

       return view('falla.index', compact('falla'));
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
                falla::create($request->validated());
            
            
                return redirect()->route('falla.index')->with('status','La falla fue registrada con exito');
            }
            public function __construct()
            {
            $this->middleware('auth')->except('index','show');
            }
    }


