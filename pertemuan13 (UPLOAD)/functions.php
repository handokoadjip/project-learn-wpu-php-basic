<?php 

// Koneksi Database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query){
	
	// Mengambil variable conn dari atas
	global $conn;

	// Membuat QUERY
	$result = mysqli_query($conn, $query);

	// Membuat tampungan untuk megisi record
	$rows = [];

	// Mengambil query
	while ( $row = mysqli_fetch_assoc($result)) {
	    $rows[] = $row;
	}

	return $rows;
}

function tambah($data){
	
	// Mengambil variable conn dari atas
	global $conn;

	// Masukan data dari $_POST
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	
	// Masukan gambar melalui function upload
	$gambar = upload();

	// check apakah gambar di upload atau tidak
	if( !$gambar ){
		return false;
	}

	// Masukan query kedalam variable agar tidak panjang di mysqli_query
	$query = "INSERT INTO mahasiswa
				VALUES
			('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
			";
	// Masukan variable tersebut
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){

	$namaFile = $_FILES["gambar"]["name"];
	$ukuranFile = $_FILES["gambar"]["size"];
	$errorFile = $_FILES["gambar"]["error"];
	$tmpName = $_FILES["gambar"]["tmp_name"];

// cek error
// UPLOAD_ERR_OK
// Nilai: 0; Tidak ada kesalahan, file diunggah dengan sukses.

// UPLOAD_ERR_INI_SIZE
// Nilai: 1; File yang diunggah melebihi arahan upload_max_filesize di php.ini .

// UPLOAD_ERR_FORM_SIZE
// Nilai: 2; File yang diunggah melebihi arahan MAX_FILE_SIZE yang ditentukan dalam formulir HTML.

// UPLOAD_ERR_PARTIAL
// Nilai: 3; File yang diunggah hanya diunggah sebagian.

// UPLOAD_ERR_NO_FILE
// Nilai: 4; Tidak ada file yang diunggah.

// UPLOAD_ERR_NO_TMP_DIR
// Nilai: 6; Folder sementara tidak ada. Diperkenalkan di PHP 5.0.3.

// UPLOAD_ERR_CANT_WRITE
// Nilai: 7; Gagal menulis file ke disk. Diperkenalkan dalam PHP 5.1.0.

// UPLOAD_ERR_EXTENSION
// Nilai: 8; Ekstensi PHP menghentikan unggahan file. PHP tidak menyediakan cara untuk memastikan ekstensi mana yang menyebabkan pengunggahan file terhenti; memeriksa daftar ekstensi yang dimuat dengan phpinfo () dapat membantu. Diperkenalkan dalam PHP 5.2.0.
	
	if( $errorFile == 4 ){
		echo '<script>
				alert("Pilih gambar terlebih dahulu");
			  </script>';
		return false;
	}

	// membuat ekstensi apa yang di perbolehkan upload
	$ekstensiValid = ['jpg', 'jpeg', 'png'];
	// mengambil ekstensi dari $namaFile
	$ekstensiFile = explode('.', $namaFile);
	// mengubah huruf kapital jadi kecil strtolower 
	// mengambil array terakhir end
	$ekstensiFile = strtolower(end($ekstensiFile));
	// apakah ada string yang sama di sebuah array
	// mengambalikan true jika sama dan false jika tidak
	if( !in_array($ekstensiFile, $ekstensiValid) ){
		echo '<script>
				alert("yang di upload bukan gambar");
			</script>';
		return false;
	}
	
	// apakah file lebih besar dari 2MB
	if( $ukuranFile > 1000000 ){
		echo '<script>
				alert("ukuran terlalu besar");
			</script>';
		return false;
	}

	// ubah nama file agar tidak sama
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFile;

	// lulus chek semua
	move_uploaded_file($tmpName, 'image/' . $namaFile);

	return $namaFile;

}

function hapus($id){

	// Mengambil variable conn dari atas
	global $conn;

	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

	return mysqli_affected_rows($conn);
}

function ubah($data){
	
	// Mengambil variable conn dari atas
	global $conn;

	// Masukan data dari $_POST
	// Tambahkan id untuk mengupdate satu record tertentu
	$id = htmlspecialchars($data["id"]);
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	if($_FILES['gambar']['error'] === 4){
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	// Masukan query kedalam variable agar tidak panjang di mysqli_query
	$query = "UPDATE mahasiswa
				SET
			nama = '$nama',
			nrp = '$nrp',
			email = '$email',
			jurusan = '$jurusan',
			gambar = '$gambar'
			WHERE id = $id
			";

	// Masukan variable tersebut
	mysqli_query($conn, $query);

	// Agar bisa dimasukan kedalam function tambah [upload]
	return mysqli_affected_rows($conn);	
}

function cari($cari_nama){

	// membuat query untuk menampilkan mahasiswa sesuai yang di cari
	// = haus sama betul
	// LIKE bisa tambahkan wildcard
	// %untuk mencari Handoko dengan mengetik Han saja atau yang lain2
	// OR untuk penambahan pencarian lagi jadi bukan nrp saja
	$query = "SELECT * FROM mahasiswa
				WHERE
			nrp LIKE '%$cari_nama%' OR
			nama LIKE '%$cari_nama%'
			";

	// memanggil function query di function
	return query($query);
}


?>