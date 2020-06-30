<?php

namespace App\Http\Controllers;

use App\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
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
            return datatables()->of(Satuan::latest()->get())
                    ->addColumn('action', function($data){
                       
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('satuan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name.required' => 'Satuan tidak boleh kosong',
        ];
        $this->validate($request,$rules,$msg);

        $departement = Satuan::create([
            'name' => $request->name,
        ]);
        return response()->json(['success' => 'Satuan berhasil ditambahkan']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function show(Satuan $satuan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Satuan::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
           'name' =>'required'
        ];
        $msg = [
            'name.required' => 'Satuan tidak boleh kosong',
        ];
        $this->validate($request,$rules,$msg);
        
        $departement = Satuan::findOrFail($request->hidden_id);
        $departement->update([
            'name' => $request->name
        ]);
        return response()->json(['success' => 'Satuan berhasil di update']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $departement = Satuan::findOrFail($id);
        $departement->delete();
    }
}
