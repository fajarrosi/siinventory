<?php

namespace App\Http\Controllers;

use App\Standar;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\Departement;

class StandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if(request()->ajax())
        {
            $items = DB::table('standars as s')
            ->join('items as t','t.id','=','s.item_id')
            ->join('item_departement as i','i.item_id','=','t.id')
            ->select('t.name','s.id','s.total')
            ->where('i.departement_id','=',$user->departements_id)
            ->get();
            return datatables()->of($items)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }


        // $item = DB::table('items as i')
        // ->join('item_departement as ide','ide.item_id','=','i.id')
        // ->leftJoin('standars as s','s.item_id','=','i.id')
        // ->select('i.name','i.id')
        // ->where('ide.departement_id','=',$user->departements_id)
        // ->whereNull('s.item_id')
        // ->get();
        
        $item = DB::table('items as i')
        ->join('item_departement as ide','ide.item_id','=','i.id')
        ->leftJoin('standars as s','s.item_id','=','i.id')
        ->select('i.name','i.id')
        ->where('ide.departement_id','=',$user->departements_id)
        ->get();
        
        $dep = DB::table('departements as dep')
             ->select('dep.name')
             ->where('dep.id',$user->departements_id)
             ->get();
        // dd($dep);
        return view('standar.index',compact('item','dep'));
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
         $user = Auth::user();
        if($request->item_id == 'other'){
            $rules = [
            'new' =>'required',
            'total' =>'required'
            ];
            $msg = [
                'new.required' => 'Barang tidak boleh kosong',
                'total.required' => 'Total tidak boleh kosong'
            ];
            $this->validate($request,$rules,$msg);
            $barang = Item::create([
                            'name' =>$request->new
                        ]);
            $d = Departement::findOrFail($user->departements_id);
            $barang->departements()->attach($d);
            $data = Standar::create([
            'item_id' => $barang->id,
            'total' => $request->total
            ]);
        return response()->json(['success' => 'Standar File Upload berhasil ditambahkan']);

        }else{
            $rules = [
          'total' =>'required'
            ];
            $msg = [
                'total.required' => 'Total tidak boleh kosong'
            ];
            $this->validate($request,$rules,$msg);
            $data = Standar::Create([
                'item_id' =>$request->item_id,
                'total' => $request->total
            ]);
        }

        return response()->json(['success' => 'Standar berhasil ditambahkan']);
    }
    public function getList(Request $request)
    {
        $user = Auth::user();
        if ($request->name == 'tambah'){
            $item = DB::table('items as i')
                ->join('item_departement as ide','ide.item_id','=','i.id')
                ->leftJoin('standars as s','s.item_id','=','i.id')
                ->select('i.name','i.id')
                ->where('ide.departement_id','=',$user->departements_id)
                ->whereNull('s.item_id')
                ->get();
            return $item;
        }else{
             $item = DB::table('items as i')
                    ->join('standars as s','s.item_id','=','i.id')
                    ->select('i.name','i.id')
                    ->where('s.id',$request->name)
                    ->get();
            return $item;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function show(standar $standar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Standar::findOrFail($id);
            $item = DB::table('items as i')
                    ->join('standars as s','s.item_id','=','i.id')
                    ->select('i.id')
                    ->where('s.id',$id)
                    ->get();
            return response()->json(compact('data','item'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
          'total' =>'required'
        ];
        $msg = [
            'total.required' => 'Total tidak boleh kosong',
        ];
        $this->validate($request,$rules,$msg);
        $item = Standar::findOrFail($request->hidden_id);
        $item->update([
           
            'total'=>$request->total
        ]);
        return response()->json(['success' => 'Barang berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item = Standar::findOrFail($id);
        $item->delete();
    }
}
