@extends('admin-layouts.app')

@section('content')
<div class="container">
<div class="mr-auto">
	<h1 class="mt-5 mr-auto">Daftar Pemain</h1>
	@guest
	@else
	<a href="{{url('input-data')}}" class="btn btn-primary">Pemain baru</a>
	@endif
</div>

<table class="table table-stripped">
	<tr>
		<th>
			Nama pemain
		</th>
		<th>
			Attacker
		</th>
		<th>
			Midfielder
		</th>
		<th>
			Defender
		</th>
		<th>
				Posisi
		</th>
		@guest
				
			@else
			<td>
            </td>
			@endif
	</tr>
	@if($kriteria == NULL)
		<tr>
			<td colspan="7">
				<p>This field is empty</p>
			</td>
		</tr>
	@else
	<?php
		$totalPenyerang = 0;
		$totalTengah = 0;
		$totalBertahan = 0;
		foreach ($kriteria as $k){
			$totalPenyerang += $k->nilai_pemain_menyerang;
			$totalTengah += $k->nilai_pemain_tengah;
			$totalBertahan += $k->nilai_pemain_bertahan;
		}
	?>
	@foreach($kriteria as $kriteria)
	<tr>
            <td>
                {{$kriteria->nama}}
            </td>
            <td>
                {{$kriteria->nilai_pemain_menyerang}}
            </td>
            <td>
                {{$kriteria->nilai_pemain_tengah}}
            </td>
            <td>
                {{$kriteria->nilai_pemain_bertahan}}
            </td>
			<td>
				<?php
					$maxVal = max($kriteria->nilai_pemain_menyerang, $kriteria->nilai_pemain_tengah, $kriteria->nilai_pemain_bertahan);
					if ($kriteria->nilai_pemain_menyerang == $maxVal){
						echo "Pemain menyerang";
					}
					elseif ($kriteria->nilai_pemain_tengah == $maxVal) {
						echo "Pemain tengah";
					}
					elseif ($kriteria->nilai_pemain_bertahan == $maxVal) {
						echo "Pemain bertahan";
					}
				?>
            </td>
			@guest
				
			@else
			<td>
				<a href="/selengkapnya/{{$kriteria->id}}" class="btn btn-primary">Detail</a>
				<a href="/delete/{{$kriteria->id}}" class="btn btn-danger">Hapus</a>
            </td>
			@endif
	</tr>
	@endforeach
	@endif
</table>
<!-- <p>
<?php
	// $totalVPenyerang = 0;
	// foreach ($kriteria as $k){
	// 	$totalVPenyerang += $kriteria->nilai_pemain_menyerang/$totalPenyerang;
	// }
	// echo $totalVPenyerang;
?>
</p> -->
</div>
@endsection
