// Ambil elemet
var keyword = document.getElementById('keyword');
var container = document.getElementById('container');

// tambahkan event ketika keyword di tulis
// keyup > ketika melepaskan tangan dari keybpard
// keypress > ketika keyboard di pencet
keyword.addEventListener('keyup', function(){

	// buat object ajax
	// hanya dapat di browser update XMLHttpRequest()
	// kalau ie beda lagi
	
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		// ready state  kesiapan itu ada 4 dari mulai inisialisasi 0 mulai buka koneksi 1 dan seterus
		// bisa di chek satu satu namun langsung 4 saja artinya semua siap
		// kalau 200 ada
		// kalau 404 tidak ada
		// liat di inspect elemetn di status
		if( xhr.readyState == 4 && xhr.status == 200 ){
			// console.log("ajax ok");
			// memasukan isi ke container
			container.innerHTML = xhr.responseText;
		}
	}

	// eksekusi ajax
	// metode, sumber, sinkron or asinkron
	// 					F           T
	xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value , true);
	xhr.send();



});