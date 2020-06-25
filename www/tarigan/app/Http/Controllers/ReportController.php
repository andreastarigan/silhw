<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TambahUser;
use App\Http\Requests\EditUser;
use App\Http\Requests\ProfilAdmin;
use App\Http\Request\ProfilMahasiswa;
use App\User;
use App\Report;
use App\Wilayah;
use Auth;
use PDF;
use DB;
use Alert;
use App\BiodataMahasiswa;
use Carbon\Carbon;

class ReportController extends Controller
{
    //

	public function index(){
		$data=Report::
		select(DB::raw('DATE(tanggal) as tanggal'))
      	->groupBy('tanggal')->get();
		return view ('report.tampilReport')->with('report',$data);
	}
	public function addReport(){
		$check = Report::where('tanggal',Carbon::now()->format('Y-m-d'))->count();
		if ($check > 0){
				return redirect('/edit_data/'.Carbon::now()->format('Y-m-d'));
		}
		$data=Wilayah::all();
		return view ('report.tambahReport')->with('wilayah',$data);
	}
	public function storeReport(Request $request){
		foreach ($request->wilayah as $key=>$iter) {
			$data = new Report;
			$data->id_wilayah=$iter;
			$data->tanggal=$request->tanggal;
			$data->target=$request->target[$key];
			$data->real_sale_2p=$request->real_sale_2p[$key];
			$data->real_sale_3p=$request->real_sale_3p[$key];
			$data->mig_2p=$request->mig_2p[$key];
			$data->mig_3p=$request->mig_3p[$key];
			$data->churn_out=$request->churn_out[$key];
			$data->non_indihome=$request->non_indihome[$key];
			$data->down_sell=$request->down_sell[$key];
			$data->up_sell=$request->up_sell[$key];
			$data->target_nal=$request->target_nal[$key];
			$data->lite_brite=$request->lite_brite[$key];
			$data->h1=$request->h1[$key];
			$data->save();
		}


		return redirect('/tampil_data');
	}
	public function updateReport(Request $request,$tanggal){
		$data=Report::where('tanggal',$tanggal)->get();
		foreach ($data as $key) {
			# code...
			$delete = Report::find($key->id);
			$delete->delete();
		}
		foreach ($request->wilayah as $key=>$iter) {
			$data = new Report;
			$data->id_wilayah=$iter;
			$data->tanggal=$request->tanggal;
			$data->target=$request->target[$key];
			$data->real_sale_2p=$request->real_sale_2p[$key];
			$data->real_sale_3p=$request->real_sale_3p[$key];
			$data->mig_2p=$request->mig_2p[$key];
			$data->mig_3p=$request->mig_3p[$key];
			$data->churn_out=$request->churn_out[$key];
			$data->non_indihome=$request->non_indihome[$key];
			$data->down_sell=$request->down_sell[$key];
			$data->up_sell=$request->up_sell[$key];
			$data->target_nal=$request->target_nal[$key];
			$data->lite_brite=$request->lite_brite[$key];
			$data->h1=$request->h1[$key];
			$data->save();
		}

		return redirect('/tampil_data');
	}
	public function editReport($tanggal){
		$data=Report::where('tanggal',$tanggal)->get();
		$tanggal = $tanggal;
		return view ('report.editReport')
		->with('data',$data)
		->with('tanggal',$tanggal);
	}

	public function deleteData($tanggal){
		$data=Report::where('tanggal',$tanggal)->get();
		foreach ($data as $key) {
			# code...
			$delete = Report::find($key->id);
			$delete->delete();
		}
		return redirect('/tampil_data');
	}

	public function cetakReport($tanggal){
			$data=Report::where('tanggal',$tanggal)
			->select('reports.*',DB::raw('((real_sale_3p+real_sale_2p) / target) as acv'))
			->orderBy('acv', 'desc')
			->get();
			$tanggal = $tanggal;

            $pdf = PDF::loadView('cetak.cetak',compact('data','tanggal')); 
            return $pdf->stream('Cetak-'.$tanggal.'.pdf');
	}
}
