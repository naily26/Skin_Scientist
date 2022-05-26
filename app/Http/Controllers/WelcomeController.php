<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('coba');
    }

    public function service()
    {
        Session::forget('arr_answ');
        $arr = [];
        Session::put('arr_answ',$arr);
        $gejala = DB::table('gejala')->get();
        return view('select',compact('gejala'));
    }

    public function getTempAnswer($value,$id_gejala)
    {
        $get = Session::get('arr_answ');
        $get[$id_gejala] = $value;
        Session::put('arr_answ',$get);
        $result = Session::get('arr_answ');
        return response()->json($result);
    }

    public function summaryAnswer()
    {
        $gejala = DB::table('gejala')->get();
        $getAnswer = Session::get('arr_answ');
        return view('preview',compact('gejala','getAnswer'));
    }

    public function prosestKonsultasi()
    {
        $respondenUser = Session::get('arrFixKonsul');
        //return $respondenUser;
        $bobotArr = [];
        //tahap1
        $masterKulit = DB::table('kulit')->select('ID','jenis_kulit')->get();
        foreach($masterKulit as $keyMasterKulit => $mK){
            $gejalaGet = DB::table('gejala_kulit')->where('ID_kulit',$mK->ID)->get();
            foreach($gejalaGet as $keyGejalaGet => $gGe){
                $bobotDef = 0;
                if($respondenUser[$gGe->ID_gejala] != 0){
                    $bobotDef = $respondenUser[$gGe->ID_gejala] * $gGe->bobot;
                }
                $bobotArr[$mK->ID][$keyGejalaGet] = $bobotDef;
            }
        }
        //tahap2
        $masterKulit = DB::table('kulit')->select('ID','jenis_kulit')->get();
        $arrHasilKulitNilai = [];
        foreach($masterKulit as $keyMasterKulit => $mK){
            $dt = $bobotArr[$mK->ID];
            $ggwp = $this->calCulateKulit($mK->ID,$dt);
            $arrHasilKulitNilai[$mK->ID] = $ggwp;
        }
        $tmptArsort = $arrHasilKulitNilai;
        rsort($arrHasilKulitNilai);
        $kk = [];
        $no = 0;
        foreach($arrHasilKulitNilai as $g => $h){
            
            $kk[$no]['value'] = $h;
            $kkPd = 0;
            foreach($tmptArsort as $kly => $ll){
                if($ll == $h){
                    $kkPd = $kly;
                }
            }
            $jj = DB::table('kulit')->where('ID',$kkPd)->select('jenis_kulit')->first();
            $solusi = DB::table('solusi')->where('ID_kulit',$kkPd)->select('nama_solusi')->get();
            $kk[$no]['kulit'] = $jj->jenis_kulit;
            $kk[$no]['kode'] = $kkPd;
            $kk[$no]['solusi'] = $solusi;
            $no++;
        }
        return view('result',compact('kk'));
        //return $kk;
    }

    public function calCulateKulit($value,$data){
        $pertama = $data[0] + $data[1] * (1-$data[0]);
        for($i=2;$i<=count($data)-1;$i++){
           $pertama = $pertama + $data[$i] * (1-$pertama); 
        }
         return $pertama;
    }
}
