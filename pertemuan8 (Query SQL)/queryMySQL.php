<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MY SQL</title>
</head>
<body>
	
	<h1>Database dan DBMS (Database Management System)</h1>
	<p>DBMS</p>
	<ul>
		<li>Oracle</li>
		<li>MySQL</li>
		<li>SQL Server</li>
		<li>PostgreSQL</li>
		<li>MongoDB</li>
	</ul>
	<p>Itu merupakan DBMS bukan Database sedangkan Database adalah data yang ada di dalam DBMS itu sendiri</p>

	<h1>Macam-macam DBMS</h1>
	<ul>
		<li>Relational DBMS</li>
		<li>Hierarchical DBMS</li>
		<li>Network DBMS</li>
		<li>NoSQL DBMS</li>
	</ul>
	<p>Yang lagi populer yaitu MongoDB itu NoSQL DBMS atau tidak menggunakan SQL. SQL sendiri merupakan bahasa sendiri yang digunakan untuk melakukan interaksi pada database</p>
	<p>Dilihat dari DBMS paling atas, beberapa DBMS itu ada kata SQL nya itu karena DBMS ini memiliki bahasa yang sama untuk berinteraksi dengan data nya. jadi jika belajar MySQL, Sintak di dalamnya itu bisa di pakai di DBMS yang lain selama DBMS nya menggunakan SQL</p>

	<h1>Istilah</h1>
	<ul>
		<li>Field/column</li>
		<li>Record/row</li>
		<li>key</li>
			<ul>
				<li>Primary key</li>
				<li>Foreign key</li>
			</ul>
		<li>Auto Increment</li>
		<li>Relationship</li>
		<li>Noramlization</li>
	</ul>

	<h1>Cara menjalakna mySQL dengan DOS</h1>
	<p>Ketika buka di directory xampp\mysql\bin\mysql.exe dengan double klik dan masukan query "show databases" maka akan keluar sedikit database karena kita masuk sebagai guest</p>
	<ul>
		<li>Buka commandPromt</li>
		<li>Pindah directory dengan cara CD (Change Directory)</li>
		<li>Atau langsung CD \ langsung masuk C:</li>
		<li>Atau langsung D: jika xampp di D:</li>
		<li>Atau langsung D: jika xampp di D:</li>
		<li>Hapus bagian atas dengan CLS atau clear screen</li>
		<li>ketik cd dan ketik juga xampp, bisa juga ketik xa lalu tab karena jika folder ada maka akan muncul sendiri xampp</li>
		<li>lalu masuk ke folder mySQL, jika tidak yakin apakah ada folder yang di inginkan ..</li>
		<li>ketik dir di command prompt agar folder terlihat semua kebawah</li>
		<li>atau ketik dir /w agar tampilan kesamping</li>
		<li>yang kurung siku [] merupakan folder dan yang tidak ada merpuakan file</li>
		<li>lalu ketik cd mySQL untuk masuk ke folder mySQL</li>
		<li>lalu ketik cd bin untuk masuk ke bin</li>
		<li>cari mysql dengan lihat dir /w</li>
		<li>Jangan klik enter karena akan masuk sebagai guest lagi</li>
		<li>jadi ketik mysql -u root -p lalu enter</li>
		<li>enter password, kosongkan saja</li>
		<li>selesai</li>
	</ul>

	<h1>Membuat Database</h1>
	<p>rancangan database</p>
		<br/><span>database : phpdasar</span>
		<br/><span>tabel : mahasiswa</span>
		<p>id int primary key auto_increment</p>
		<br/><span>nama varchar(100)</span>
		<br/><span>nrp char(8)</span>
		<br/><span>email varchar(100)</span>
		<br/><span>gambar varchar(100)</span>
			
	<p>	Jadi ada 6 field di dalam tabel mahasiswa</p>
	<h2>Membuat database dan table</h2>
	<ul>
		<li>NOTE : ketika enter lupa ketik ; maka jangan panik. langsung saja ketik ;</li>
		<li>create database namaDatabase;</li>
			<p>Untuk membuat Database</p>
		<li>show databases;</li>
			<p>untuk menampilkan database</p>
		<li>use namaDatabase;</li>
			<p>untuk menggunakan database, ada tulisan database change jika berhasil</p>
		<li>create table namaTabel ();</li>
			<p>isi dari (id int primary key auto_increment, nama varchar(100), nrp char(8), email varchar(100), jurusan varchar(100), gambar varchar(100));</p>
		<li>show tables;</li>
			<p>untuk menampilkan table</p>
		<li>describe namaTable;</li>
			<p>untuk menampilkan struktur table</p>
			<p>	NULL adalah boleh kosong atau tidak record nya</p>
	</ul>
	<h2>Sintaks QUERY</h2>
	<ul>
		<li>mengisi data/record table</li>
			<p>INSERT INTO mahasiswa VALUES ()</p>
				<span>values sesuaikan dengan field, jika auto_increment maka '', saja</span>
		<li>untuk menampilkan data table</li>
			<p>SELECT * FROM namaTable; -> untuk semua data</p>
				<span>SELECT nrp FROM namaTable; -> untuk satu data</span>
				<br/><span>SELECT nrp FROM namaTable; -> untuk satu data</span>
				<br/><span>SELECT nrp, nama FROM namaTable; -> untuk dua data</span>
				<br/><span>SELECT * FROM namaTable where nrp = 'nomorNrpDiField'; -> untuk mencari data</span>
		<li>untuk mengubah record tertentu</li>
			<p>UPDATE namaTable SET jurusan = 'jadi apa' -> untuk semua mahasiswa</p>
			<span>UPDATE namaTable SET jurusan = 'jadi apa' where id = 2 -> untuk 1 mahasiswa dengan id 2</span>
		<li>untuk menghapus record</li>
			<p>DELETE FROM namaTable; -> untuk menghapus semua</p> 	
			<span>DELETE FROM namaTable WHERE id = 3; -> untuk menghapus record dengan id 3</span>
		<li>untuk menghapus Database </li>
			<p>DROP TABLE namaTable</p>
	</ul>
</body>
</html>