<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('juru-bengkel')){
            $user = Auth::user();

            //Jumlah yang belum diinventaris
            $item1 = DB::table('item_details as id')
            ->join('item_departement as idep','idep.item_id','=','id.item_id')
            ->whereNull('id.kode_item')
            ->where('idep.departement_id',$user->departements_id)
            ->value(DB::raw('COUNT(id.item_id)'));

            //jumlah yang sudah diinventaris
            $item2= DB::table('item_details as id')
            ->join('item_departement as idep','idep.item_id','=','id.item_id')
            ->whereNotNull('id.kode_item')
            ->where('idep.departement_id',$user->departements_id)
            ->value(DB::raw('COUNT(id.item_id)'));

            //jumlah total dari setiap barang
            $data = DB::table('item_details as ide')
                ->select(DB::raw('count(ide.item_id) as total'),'i.name')
                ->join('items as i','i.id','=','ide.item_id')
                ->join('item_departement as it','it.item_id','=','ide.item_id')
                ->where('it.departement_id',$user->departements_id)
                ->groupBy('i.name')
                ->get();
            
            //jumlah standar dari setiap barang
            $stand = DB::table('standars as st')
                ->select('i.name','st.total')
                ->join('items as i','i.id','=','st.item_id')
                ->join('item_departement as it','it.item_id','=','i.id')
                ->where('it.departement_id',$user->departements_id)
                ->get();
            $sni = 0; //sesuai standar 
            $non = 0; //tidak sesuai standar
             for($i=0; $i<=count($stand)-1;$i++){
                for($j=0;$j<=count($data)-1;$j++){
                    if($data[$j]->name == $stand[$i]->name){
                       if($data[$j]->total >= $stand[$i]->total){
                            $sni+=1;
                       }else{
                            $non +=1;
                       }
                        
                    }
                }
            }

            // dd($data,$stand,$sni,$non);
            
            return view('dashboard.index',compact('user','item1','item2','sni','non'));

        }elseif(Auth::user()->hasRole('guru')){

            $user = Auth::user();

            //jumlah total dari setiap barang
            $data = DB::table('item_details as ide')
                ->select(DB::raw('count(ide.item_id) as total'),'i.name')
                ->join('items as i','i.id','=','ide.item_id')
                ->join('item_departement as it','it.item_id','=','ide.item_id')
                ->where('it.departement_id',$user->departements_id)
                ->groupBy('i.name')
                ->get();
            
            //jumlah standar dari setiap barang
            $stand = DB::table('standars as st')
                ->select('i.name','st.total')
                ->join('items as i','i.id','=','st.item_id')
                ->join('item_departement as it','it.item_id','=','i.id')
                ->where('it.departement_id',$user->departements_id)
                ->get();
            $sni = 0; //sesuai standar 
            $non = 0; //tidak sesuai standar
             for($i=0; $i<=count($stand)-1;$i++){
                for($j=0;$j<=count($data)-1;$j++){
                    if($data[$j]->name == $stand[$i]->name){
                       if($data[$j]->total >= $stand[$i]->total){
                            $sni+=1;
                       }else{
                            $non +=1;
                       }
                        
                    }
                }
             }

             //disetujui KPK
            $kpk = DB::table('persetujuans as n')
            ->join('pengajuans as p','p.id','=','n.pngjuan_id')
            ->where('n.stat_id',2)
            ->where('p.user_id',$user->id)
            ->value(DB::raw('COUNT(*)'));

            //disetujui WKS
            $wks = DB::table('persetujuans as n')
            ->join('pengajuans as p','p.id','=','n.pngjuan_id')
            ->where('n.stat_id',3)
            ->where('p.user_id',$user->id)
            ->value(DB::raw('COUNT(*)'));

            return view('dashboard.index',compact('sni','non','user','kpk','wks'));

        }elseif(Auth::user()->hasRole('Ketua Prodi Kejuruan')){
            $user = Auth::user();

            //jumlah total dari setiap barang
            $data = DB::table('item_details as ide')
                ->select(DB::raw('count(ide.item_id) as total'),'i.name')
                ->join('items as i','i.id','=','ide.item_id')
                ->join('item_departement as it','it.item_id','=','ide.item_id')
                ->where('it.departement_id',$user->departements_id)
                ->groupBy('i.name')
                ->get();
            
            //jumlah standar dari setiap barang
            $stand = DB::table('standars as st')
                ->select('i.name','st.total')
                ->join('items as i','i.id','=','st.item_id')
                ->join('item_departement as it','it.item_id','=','i.id')
                ->where('it.departement_id',$user->departements_id)
                ->get();
            $sni = 0; //sesuai standar 
            $non = 0; //tidak sesuai standar
             for($i=0; $i<=count($stand)-1;$i++){
                for($j=0;$j<=count($data)-1;$j++){
                    if($data[$j]->name == $stand[$i]->name){
                       if($data[$j]->total >= $stand[$i]->total){
                            $sni+=1;
                       }else{
                            $non +=1;
                       }
                        
                    }
                }
            }


             //disetujui WKS
            $wks = DB::table('persetujuans as n')
            ->join('pengajuans as p','p.id','=','n.pngjuan_id')
            ->where('n.stat_id',3)
            ->where('p.user_id',$user->id)
            ->value(DB::raw('COUNT(*)'));

            //belum disetujui
            $blm = DB::table('persetujuans as n')
            ->join('pengajuans as p','p.id','=','n.pngjuan_id')
            ->join('users as u','u.id','=','p.user_id')
            ->where('n.stat_id',1)
            ->where('u.departements_id',$user->departements_id)
            ->value(DB::raw('COUNT(*)'));


            return view('dashboard.index',compact('sni','non','user','wks','blm'));

        }elseif(Auth::user()->hasRole('Wakil Kepala Sekolah')){

            $user = Auth::user();

            //belum disetujui
            $data = DB::table('persetujuans as n')
            ->where('n.stat_id',2)
            ->value(DB::raw('COUNT(*)'));

            //sudah disetujui
            $data2 = DB::table('persetujuans as n')
            ->where('n.stat_id',3)
            ->value(DB::raw('COUNT(*)'));

            return view('dashboard.index',compact('user','data','data2'));
        }else{

            $user = Auth::user();
             $u = DB::table('users')->count();
            $j = DB::table('departements')->count();
            $path = asset('vendor/logintp/images/logosmk.png');
            return view('dashboard.index',compact('user','u','j','path'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
