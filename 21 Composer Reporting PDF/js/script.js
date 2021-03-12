$(document).ready(function() {
	
	// hilangkan tombol cari
	$("#tombol-cari").hide();

	// event
	// # id
	// . class
	$("#keyword").on("keyup", function(){

		$(".loader").show();

		// harus menggunakan get
		// ajax load
		// $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

		// $.get(file, function)
		$.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function(data){
				$("#container").html(data);
				$(".loader").hide();
		});
	}); 

});