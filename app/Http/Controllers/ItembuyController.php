<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\ItemDetail;
use App\Persetujuan;
use App\Stok_item;
use App\ItemBuy;


class ItembuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     if(request()->ajax())
        {
             if(!empty($request->departement))
            {
             $data = DB::table('persetujuans as n')
                    ->join('stats as st','st.id','=','n.stat_id')
                    ->join('pengajuans as p','p.id','=','n.pngjuan_id')
                    ->join('items as i','i.id','=','p.item_id')
                    ->join('item_departement as idep','idep.item_id','p.item_id')
                    ->join('users as u','u.id','=','p.user_id')
                    ->join('departements as d','d.id','=','u.departements_id')
                    ->join('satuans as sat','sat.id','=','p.satuan')
                    ->select(DB::raw('i.name as item_name'),'p.total',DB::raw('p.id as png_id'),'n.id',DB::raw('st.id as st_id'),DB::raw('u.name as username'),'p.spesifikasi','p.volume',DB::raw('sat.name as satuan'),'p.harga','p.sumber')
                    ->where('n.stat_id',3)
                    ->where('d.name',$request->departement)
                    ->get();
            }
            else{
                $data = DB::table('persetujuans as n')
                    ->join('stats as st','st.id','=','n.stat_id')
                    ->join('pengajuans as p','p.id','=','n.pngjuan_id')
                    ->join('items as i','i.id','=','p.item_id')
                    ->join('item_departement as idep','idep.item_id','p.item_id')
                    ->join('users as u','u.id','=','p.user_id')
                    ->join('satuans as sat','sat.id','=','p.satuan')
                    ->select(DB::raw('i.name as item_name'),'p.total',DB::raw('p.id as png_id'),'n.id',DB::raw('st.id as st_id'),DB::raw('u.name as username'),'p.spesifikasi','p.volume',DB::raw('sat.name as satuan'),'p.harga','p.sumber')
                    ->where('n.stat_id',3)
                    ->get();
            }

            return datatables()->of($data)
                   ->editColumn('harga',function($aju){
                        $x = $aju->harga;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");
                        $harga ='Rp '.$hasil.'';
                        return $harga;
                    })
                    ->editColumn('volume',function($aju){
                        $x = $aju->volume;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");
                        $volume =''.$hasil.'';
                        return $volume;
                    })
                    ->editColumn('total',function($aju){
                        $x = $aju->total;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");

                        $harga = 'Rp '.$hasil.'';
                        return $harga;
                    })
                    ->addColumn('hrg', function($data){
                        $button = ' 
                        <div class="input-group">
                            <div class="input-group-addon">
                              <span>Rp</span>
                            </div>
                            <input type="text" name="hrg[]" class="hrgs form-control"  style="width: 95px; text-align:center;">
                        </div>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<input type="hidden" name="item[]" class="item form-control" style="width: 50px; text-align:center;" value="'.$data->png_id.'">';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<input type="hidden" name="prs[]" class="prs form-control" style="width: 50px; text-align:center;" value="'.$data->id.'">
                            <input type="hidden" name="hrga[]" class="hrga" />
                            <input type="hidden" name="tota[]" class="tota" />
                            <input type="hidden" name="vola[]" class="vola" />
                        ';

                        return $button;
                    })
                    ->addColumn('vlm', function($data){
                       
                        $button = '
                        <input type="text" name="vlm[]" class="vlms form-control" style="width: 95px; text-align:center;">
                        ';
                   
                        return $button;
                    })
                    ->addColumn('tot', function($data){
                       
                        $button = '
                        <div class="input-group">
                            <div class="input-group-addon">
                              <span>Rp</span>
                            </div>
                            <input type="text" name="tot[]" class="tots form-control" style="width: 95px; text-align:center;"readonly>
                        </div>';
                       
                        return $button;
                    })

                    ->rawColumns(['hrg','vlm','tot'])
                    ->make(true);

        }
$departement = DB::table('departements')
    ->select('name')
    ->get();
        // if(x= 0){
            return view('itembuy.index',compact('departement'));
        // }else{
            // return view('itembuy.result');
        // }
    }

    public function hasil(){
        if(request()->ajax())
        {
            $data = DB::table('persetujuans as n')
                    ->join('stats as st','st.id','=','n.stat_id')
                    ->join('item_buys as ib','ib.pers_id','=','n.id')
                    ->join('pengajuans as p','p.id','=','n.pngjuan_id')
                    ->join('items as i','i.id','=','p.item_id')
                    ->join('item_departement as idep','idep.item_id','p.item_id')
                    ->join('users as u','u.id','=','p.user_id')
                    ->join('satuans as sat','sat.id','=','p.satuan')
                    ->select(DB::raw('i.name as item_name'),'p.total','n.id',DB::raw('st.id as st_id'),DB::raw('u.name as username'),'p.spesifikasi','p.volume',DB::raw('sat.name as satuan'),'p.harga','p.sumber',DB::raw('ib.jmlh as vlm'),DB::raw('ib.harga as hrg'),DB::raw('ib.total as tot'))
                    ->whereIn('n.stat_id',[6,7])
                    ->get();
             return datatables()->of($data)
             ->editColumn('harga',function($aju){
                        $x = $aju->harga;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");
                        $harga ='Rp '.$hasil.'';
                        return $harga;
                    })
                    ->editColumn('volume',function($aju){
                        $x = $aju->volume;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");
                        $volume =''.$hasil.'';
                        return $volume;
                    })
                    ->editColumn('total',function($aju){
                        $x = $aju->total;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");

                        $harga = 'Rp '.$hasil.'';
                        return $harga;
                    })
        ->editColumn('hrg',function($aju){
                       $x = $aju->hrg;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");
                        $harga ='Rp '.$hasil.'';
                        return $harga;
                    })
       ->editColumn('tot',function($aju){
                      $x = $aju->tot;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");

                        $harga = 'Rp '.$hasil.'';
                        return $harga;
                    })
       ->editColumn('vlm',function($aju){
                       $x = $aju->vlm;
                        $int = (int)$x;
                        $hasil = number_format($int,0,",",".");
                        $volume =''.$hasil.'';
                        return $volume;
                    })
              ->addColumn('action', function($data){
                       if($data->st_id == 6){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</button>';
                        return $button;
                    }else{

                    }

                        
                          
                        
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
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
           'jmldbl' =>'required'
        ];
        $msg = [
            'jmldbl.required' => 'Jumlah tidak boleh kosong',
        ];
        $this->validate($request,$rules,$msg);
        $user = Auth::user();

        //update itembuy (jmlh, hrga,total)
        $upd = DB::table('item_buys')
              ->where('id',$request->hidden_id)
              ->update([
                'jmlh' => $request->hidden_jml,
                'harga' =>$request->hidden_hrg,
                'total' =>$request->hidden_tot
             ]);

        //buat item detail sebanyak hidden_jml 
        //1.hapus yang lama buat yang baru 
        $item_id = DB::table('item_buys as ib')
                ->join('persetujuans as p','p.id','=','ib.pers_id')
                ->join('pengajuans as ps','ps.id','=','p.pngjuan_id')
                ->where('ib.id',$request->hidden_id)
                ->value('ps.item_id');

        // $pers_id = DB::table('item_buys')
        //           ->where('id',$request->hidden_id)
        //           ->value('pers_id');

        for ($i=0; $i <=$request->hidden_jml-1 ; $i++) { 
                $del= DB::table('item_details')
                      ->where([
                        ['ibuy_id',$request->hidden_id]
                        
                    ])
                      ->delete();
        }
        for ($j=0; $j <=$request->jmldbl-1 ; $j++) { 
            $ins = ItemDetail::create([
                'item_id' => $item_id,
                'user_id' => $user->id,
                'cond_id' => 1,
                'ibuy_id' => $request->hidden_id
            ]);
        }
        return response()->json(['success' => 'Persetujuan berhasil di update']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         if(request()->ajax())
        {
            // $data = Persetujuan::findOrFail($id);
            $data = DB::table('item_buys')
                    ->select('jmlh','id','harga','total')
                    ->where('pers_id',$id)
                    ->get();
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //br.update form submit 
    public function update(Request $request)
    {   
       
        $user = Auth::user();
   
      
      // dd($request->all());

      /*
      list request
      hrg = harga
      item = pengajuan id
      prs = persetujuan id
      vlm = volumee
      tot = total
      */

      for ($i=0; $i <= count($request->vola)-1 ; $i++) { 

          // update persetujuan
          $prs = DB::table('persetujuans')
              ->where('id',$request->prs[$i])
              ->update([
                'stat_id' => 6
              ]);

          //create itembuy brdsrkan prstujuan id sebnyk jumlah 
          $ibuy = ItemBuy::create([
            'pers_id' => $request->prs[$i],
            'jmlh' =>$request->vola[$i],
            'harga' =>$request->hrga[$i],
            'total' =>$request->tota[$i]
          ]);

          //create itemdetail sbnyk jumlah (vlm) 
          for ($j=0; $j <=$request->vola[$i]-1 ; $j++) { 
             //get item_id dari pengajuan
            $item_id = DB::table('pengajuans')
                      ->where('id',$request->item[$i])
                      ->value('item_id');

            //create itemdetail
            $idet = ItemDetail::create([
                'item_id' => $item_id,
                'user_id' => $user->id,
                'cond_id' => 1,
                'ibuy_id' => $ibuy->id
            ]);
          } //end for create itemdetail


      }//end for vlm
return response()->json(['success' => 'berhasil ditambahkan']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
