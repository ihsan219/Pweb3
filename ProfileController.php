<?php
namespace App\http\Controllers;

use App\http\Controllers\Controller;


class ProfileController extends Controller
{
	function index()
	{
		return 'ini halaman contoh';
	}
	
	public function namaSendiri()
	{
		$nama = "Ihsanuddin";
		$tempat_lahir = "Kuningan";
		$jabatan = "Menteri PU";
		
		return view('profile', compact('nama','tempat_lahir','jabatan') ); /*memanggil view profile di Profile.blade.php*/
	}
	
	public function dataBarang()
	{
		$barang = array ("Krim Cukur","Oreo","Sunsilk");
		$harga = array ("3200","1200","4500");
		
		return view ('barangku', compact('barang','harga') ); /*memanggil view profile di barangku.blade.php*/
	}
}

/*direktori C:\xampp\htdocs\belajar-laravel1\app\Http\Controllers*/