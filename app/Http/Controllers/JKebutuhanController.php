<?php

namespace App\Http\Controllers;

use App\JKebutuhan;
use Illuminate\Http\Request;

class JKebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if(request()->ajax())
        {
            return datatables()->of(JKebutuhan::latest()->get())
                    ->addColumn('action', function($data){
                       
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>';
                        return $button;

                        
                          
                        
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('jkebutuhan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $rules = [
           'name' =>'required'
        ];
        $msg = [
            'name.required' => 'tidak boleh kosong',
        ];
        $this->validate($request,$rules,$msg);

        $departement = JKebutuhan::create([
            'name' => $request->name,
        ]);
        return response()->json(['success' => ' berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JKebutuhan  $jKebutuhan
     * @return \Illuminate\Http\Response
     */
    public function show(JKebutuhan $jKebutuhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JKebutuhan  $jKebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = JKebutuhan::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JKebutuhan  $jKebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $rules = [
           'name' =>'required'
        ];
        $msg = [
            'name.required' => 'tidak boleh kosong',
        ];
        $this->validate($request,$rules,$msg);
        
        $departement = JKebutuhan::findOrFail($request->hidden_id);
        $departement->update([
            'name' => $request->name
        ]);
        return response()->json(['success' => ' berhasil di update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JKebutuhan  $jKebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement = JKebutuhan::findOrFail($id);
        $departement->delete();
    }
}
