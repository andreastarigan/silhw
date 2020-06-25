<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
</head>

<body>
	<style>


	.center{
		text-align:center;
	}

	.center{
		text-align:right;
	}

	p{
		font-size: 12px;
	}

	.vl {
		border-right: 2px solid orange;
		height: 500px;
	}
	.vl1 {
		border-left: 2px solid orange;
		height: 500px;
	}

	.boo {
		margin-bottom: 30px;
		margin-top: 0px;
	}
	.boo1 {
		margin: 0;
	}

	.hr{
		height:2px;
		border-width:0;
		color:orange;
		background-color:orange;
		margin:0;
		margin-bottom: 5px;
	}
</style>
<div class="">

	<div>
		<div>
			<img style="float: left" src="{{ asset('images/kiri.png') }}" height="100px" width="100px">
			<img style="float: right" src="{{ asset('images/kanan.png') }}" height="100px" width="120px">
		</div>
		<div>		
			<h2 style="text-align:center;margin-top: -100">
				WITEL SUMUT
			</h2>
			<h2 style="text-align:center;">
				TO DAY ADD LIS
			</h2>
			<h3 style="text-align:center;">
				{{Carbon\Carbon::createFromFormat('Y-m-d', $tanggal)->format('d/m/Y')}}
			</h3>
			<br>
		</div>
		
	</div>

	<table class="" border="1">
		<tr>
			<th rowspan="2">Lokasi</th>
			<th colspan="4">New Sales</th>
			<th rowspan="2">MIG All</th>
			<th rowspan="2">LITE & BRITE</th>
			<th rowspan="2">TOTAL PS HI</th>
			<th rowspan="2">CHURN ALL</th>
			<th rowspan="2">DOWN SELL</th>
			<th rowspan="2">UP SELL</th>
			<th colspan="5">NAL</th>
			<th colspan="3">RATIO SALES</th>
			<tr>
				<th>TGT</th>
				<th>REAL</th>
				<th>ACV %</th>
				<th>Rank</th>	
				<th >TGT</th>
				<th >HI</th>
				<th >H-1</th>
				<th >ACV%</th>
				<th >GRW%</th>
				<th >% NEW SALES</th>
				<th >%3P</th>
				<th >% LITE & BRITE</th>
			</tr>
			
		</tr>
		@foreach($data as $index=>$data)
		<tr>

			<td>{{$data->id_wilayah}}</td>
			<td>{{$data->target}}</td>
			<td>{{$data->real_sale_2p+$data->real_sale_3p}}</td>
			<td>{{round(100*($data->real_sale_2p+$data->real_sale_3p) / $data->target,1)}}%</td>
			<td>{{$index+1}}</td>
			<td>{{$data->mig_2p+$data->mig_3p}}</td>
			<td>{{$data->lite_brite}}</td>
			<td>{{$data->lite_brite+$data->mig_2p+$data->mig_3p+$data->real_sale_2p+$data->real_sale_3p}}</td>
			<td>{{$data->churn_out+$data->non_indihome}}</td>
			<td>{{$data->down_sell}}</td>
			<td>{{$data->up_sell}}</td>
			<td>{{$data->target_nal}}</td>
			<td>{{$data->lite_brite+$data->mig_2p+$data->mig_3p+$data->real_sale_2p+$data->real_sale_3p-($data->churn_out+$data->non_indihome)-($data->up_sell+$data->down_sell)}}</td>
			<td>{{$data->h1}}</td>
			<td>{{round((($data->lite_brite+$data->mig_2p+$data->mig_3p+$data->real_sale_2p+$data->real_sale_3p-($data->churn_out+$data->non_indihome)-($data->up_sell+$data->down_sell))/$data->target_nal)*100,1)}}</td>
			
			<td>{{round(($data->lite_brite+$data->mig_2p+$data->mig_3p+$data->real_sale_2p+$data->real_sale_3p-($data->churn_out+$data->non_indihome)-($data->up_sell+$data->down_sell)-$data->h1)/$data->h1*100,1)}}</td>

			<td>{{round(($data->real_sale_2p+$data->real_sale_3p)/($data->lite_brite+$data->mig_2p+$data->mig_3p+$data->real_sale_2p+$data->real_sale_3p)*100,1)}}</td>
			<td>{{round((($data->mig_3p+$data->real_sale_3p)/($data->lite_brite+$data->mig_2p+$data->mig_3p+$data->real_sale_2p+$data->real_sale_3p)*100),1)}}</td>
			<td>{{round(100*$data->lite_brite/($data->lite_brite+$data->mig_2p+$data->mig_3p+$data->real_sale_2p+$data->real_sale_3p),1)}}</td>

		</tr>
		@endforeach
	</table>	
</div>
</body>
</div>
</html>