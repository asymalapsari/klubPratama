<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemain;
use Illuminate\Support\Facades\DB;


class InputController extends Controller
{
    private $kriteriaPemainMenyerang = [0.2,0.25,0.2,0.15,0.2,0.2,0.2,0.2,0,0.4,0.2,0.2,0.3,0.2,0.1];
    private $kriteriaPemainTengah = [0.2,0.2,0.25,0.2,0.15,0.3,0.05,0.45,0.3,0.3,0.5,0.5,0.1,0.3,0.2];
    private $kriteriaPemainBertahan = [0.15,0.15,0.25,0.25,0.2,0.1,0.2,0.15,0.5,0,0.25,0.25,0.2,0.1,0.1];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('input')->with('pemain', Pemain::all());
    }

    public function inputNilai(){
        $table = DB::table('pemains')->get();
        return view('input_kriteria',['table'=>$table]);
    }
    public function storeBiodata(Request $r){
         DB::table('pemains')->insert([
            'nama'=>$r->nama,
            'tanggal_lahir'=>$r->tanggal_lahir,
            'alamat'=>$r->alamat,
            'nomor_hp'=>$r->nomorhp
            ]);
         $table = DB::table('pemains')->orderBy('id',"desc")->take(1)->get();
         return view('input_kriteria',['table'=>$table]);
         // return $table;
         //return $table->id;
    }
    public function storeKriteria(Request $r){
         $table = DB::table('pemains')->orderBy('id',"desc")->take(1)->get();
         $nilaiArray = [
            $r->kecepatan,
            $r->akselerasi,
            $r->stamina,
            $r->keseimbangan_tubuh,
            $r->lompatan,
            $r->dribble,
            $r->sundulan,
            $r->akurasi_tendangan,
            $r->bertahan,
            $r->menyerang,
            $r->konsistensi,
            $r->mental_bertanding,
            $r->determinasi,
            $r->visi,
            $r->team_work
         ];

         $hasilAkhirPemainMenyerang = $this->calculateNilai($nilaiArray, $this->kriteriaPemainMenyerang);
         $hasilAkhirPemainTengah = $this->calculateNilai($nilaiArray, $this->kriteriaPemainTengah);
         $hasilAkhirPemainBertahan = $this->calculateNilai($nilaiArray, $this->kriteriaPemainBertahan);

         DB::table('kriterias')->insert([
            'id_pemain'=>$table[0]->id,
            'kecepatan'=>$r->kecepatan,
            'akselerasi'=>$r->akselerasi,
            'stamina'=>$r->stamina,
            'keseimbangan_tubuh'=>$r->keseimbangan_tubuh,
            'lompatan'=>$r->lompatan,
            'dribble'=>$r->dribble,
            'sundulan'=>$r->sundulan,
            'akurasi_tendangan'=>$r->akurasi_tendangan,
            'bertahan'=>$r->bertahan,
            'menyerang'=>$r->menyerang,
            'konsistensi'=>$r->konsistensi,
            'mental_bertanding'=>$r->mental_bertanding,
            'determinasi'=>$r->determinasi,
            'visi'=>$r->visi,
            'team_work'=>$r->team_work,
            'nilai_pemain_menyerang'=>$hasilAkhirPemainMenyerang,
            'nilai_pemain_tengah'=>$hasilAkhirPemainTengah,
            'nilai_pemain_bertahan'=>$hasilAkhirPemainBertahan
            ]);

         return redirect('/daftar-pemain');
    }

    private function calculateNilai($nilai, $kriteria){

        //Step 1: Hitung weight kriterianya


        $sumKriteria = 0;
        foreach ($kriteria as $k) {
            $sumKriteria += $k;
        }

        for ($x=0; $x<count($kriteria); $x++){
            $weightedCriteria[$x] = $kriteria[$x]/$sumKriteria;
        }
        $weightedCriteria[0] *= -1;
        $weightedCriteria[1] *= -1;
        $weightedCriteria[2] *= -1;
        $weightedCriteria[3] *= -1;
        $weightedCriteria[5] *= -1;
        //Step 2: Menghitung nilai S
        $nilaiS = [];
        for ($i=0; $i < count($nilai) ; $i++) {
            $nilaiS[$i] = pow($nilai[$i],($weightedCriteria[$i]));
        }

        $hasilAkhir = 1;
        foreach ($nilaiS as $nS) {
            $hasilAkhir *= $nS;
        }
        //Step 3: Output nilai
        return $hasilAkhir;
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
        $table = DB::table('pemains')
        ->join('kriterias', 'pemains.id','=','kriterias.id_pemain')
        ->where('pemains.id',$id)
        ->select('pemains.*','kriterias.nilai_pemain_menyerang','kriterias.nilai_pemain_tengah','kriterias.nilai_pemain_bertahan')
        ->get();
        return view('detail-pemain', ['table' => $table]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = DB::table('pemains')
        ->join('kriterias', 'pemains.id','=','kriterias.id_pemain')
        ->where('pemains.id',$id)
        ->select('pemains.*', 'kriterias.*')
        ->get();
        return view('edit-pemain', ['table' => $table]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        DB::table('pemains')->where('id', $r->id)->update([
            'nama' =>$r->nama,
            'tanggal_lahir' =>$r->tanggal_lahir,
            'alamat' =>$r->alamat,
            'nomor_hp' =>$r->nomorhp
        ]);

        $nilaiArray = [
            $r->kecepatan,
            $r->akselerasi,
            $r->stamina,
            $r->keseimbangan_tubuh,
            $r->lompatan,
            $r->dribble,
            $r->sundulan,
            $r->akurasi_tendangan,
            $r->bertahan,
            $r->menyerang,
            $r->konsistensi,
            $r->mental_bertanding,
            $r->determinasi,
            $r->visi,
            $r->team_work
         ];

        $hasilAkhirPemainMenyerang = $this->calculateNilai($nilaiArray, $this->kriteriaPemainMenyerang);
        $hasilAkhirPemainTengah = $this->calculateNilai($nilaiArray, $this->kriteriaPemainTengah);
        $hasilAkhirPemainBertahan = $this->calculateNilai($nilaiArray, $this->kriteriaPemainBertahan);

        DB::table('kriterias')->where('id_pemain', $r->id)->update([
            'kecepatan'=>$r->kecepatan,
            'akselerasi'=>$r->akselerasi,
            'stamina'=>$r->stamina,
            'keseimbangan_tubuh'=>$r->keseimbangan_tubuh,
            'lompatan'=>$r->lompatan,
            'dribble'=>$r->dribble,
            'sundulan'=>$r->sundulan,
            'akurasi_tendangan'=>$r->akurasi_tendangan,
            'bertahan'=>$r->bertahan,
            'menyerang'=>$r->menyerang,
            'konsistensi'=>$r->konsistensi,
            'mental_bertanding'=>$r->mental_bertanding,
            'determinasi'=>$r->determinasi,
            'visi'=>$r->visi,
            'team_work'=>$r->team_work,
            'nilai_pemain_menyerang'=>$hasilAkhirPemainMenyerang,
            'nilai_pemain_tengah'=>$hasilAkhirPemainTengah,
            'nilai_pemain_bertahan'=>$hasilAkhirPemainBertahan
        ]);

        return redirect('daftar-pemain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pemains')->where('id', $id)->delete();
        DB::table('kriterias')->where('id_pemain', $id)->delete();
        return redirect('/daftar-pemain');
    }
}
