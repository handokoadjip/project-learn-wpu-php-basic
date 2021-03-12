<?php 

// Function
	// Built-in-function
		 // date/time , mktime, strtodime
		 	// date() -> Untuk Menampilkan tanggal dengan format tertentu
		 	// echo date("l, d/m/Y");

		 	// time()-> UNIX Timestam / EPOCH time. detik yang berlalu sejak January 1 1970 sampai masa kini
		 	// time() -> relatif fari hari sekarang 
		 	// echo time(); 
		 	
			// mktime(jam, menit, detik, bulan, tanggal, tahun)
			// mktime(0,0,0,8,16,1998);
			
			// strtotime()
			// strtotime("16 aug 1998");

		 	// menampilkan 2 hari setelah hari ini
		 	// $waktu = date("l, d/m/Y", time()+60*60*24*2);
		 	// echo $waktu;
		 	
		 	// menampilkan hari ulang tahun
		 	// echo date("l",mktime(0,0,0,8,16,1998));
		 	// echo '<br/>';
		 	// echo date("l",strtotime("16 august 1998"));

		 	// menampilkan umur cara lama
		 	echo '<br/>';
		 	$tahunLahir = mktime(0,0,0,3,20,2004);
		 	$tahunSekarang = time();

		 	$umur = $tahunSekarang - $tahunLahir;
		 	echo floor($umur/31557600);

			// menampilkan umur cara baru
			echo '<br/>';

			// Membuat variable tahun bulan tanggal lahir
		 	$tgl_lahir = "1998-08-16";
	
			// ubah ke format DateTime
			$lahir = new DateTime($tgl_lahir);
			$hari_ini = new DateTime();
				
			// Fungsi date_diff -> menghitung interval antara hari ini dengan ulang tahun
			$diff = date_diff($hari_ini, $lahir);	

			// Display
			echo "Tanggal Lahir: ". date('d M Y', strtotime($tgl_lahir)) .'<br />';
			// menampilkan object
			echo "Umur: ". $diff->y ." Tahun";
			echo " ". $diff->m ." Bulan";
			echo " ". $diff->d ." Hari";
			
			// String
				// strlen() -> menghitung panjang string / length
				// strcmp() -> membandingkan sebuah string / compare
				// explode() -> memecah sebuah array dari symbol tertentu (. , / - ..)
				// htmlspecialchars() -> agar yang di inputkan tidak bisa menampilkan tag html 

			// Utility
				// var_dump() -> untuk mencetak isi sebuah dari variable, array, object
				// isset() -> mengecek apakah variable sudah di buat atau belum. menghasilkan boolean
				// empy() -> mengecek apakah variable yang ada kosong atau tidak
				// die() -> memberhentikan program
				// sleep() -> untuk memberhentikan program sementara (ex 2 detik) 

?>