


	function kalkulasi_bmi(){
		var form_hitung = document.kalkulator_bmi;
		var berat = eval(form_hitung.berat.value);
		var tinggi = eval(form_hitung.tinggi.value);
		var bmi = berat/((tinggi/100) * (tinggi/100));
		if ((!berat)||(!tinggi)||(!tinggi&&!berat)){
			alert('Harap isi semua data....');
		} else {

		

		//{ $('.loader').fadeOut('slow'); };
		$("#loaderIcon").show();
		setTimeout(function(){
			$("#loaderIcon").fadeOut("slow")
		} , 2000);
		var hitung_mundur = 3000;
		setTimeout(function() {
 		var form_hitung = document.kalkulator_bmi;
		var berat = eval(form_hitung.berat.value);
		var tinggi = eval(form_hitung.tinggi.value);
		var bmi = berat/((tinggi/100) * (tinggi/100));

		

		if (bmi <= 18.5) {
	    var output = '<b style="color:purple;"><i>Kekurangan Berat Badan...</i></b>';
	     var saran = "Makan dan istirahatlah yang cukup....";

	  } else if (bmi > 18.5 && bmi<=24.9 ) {
	    var output = '<b style="color:green;"><i>Berat Badan Normal...</i></b>';
	    var saran = "Tetap jaga kesehatan dengan berolahraga dan menjaga pola makan anda....";

	  } else if (bmi > 24.9 && bmi<=29.9) {
	    var output = '<b style="color:yellow;"><i>Kelebihan Berat Badan...</i></b>';
	    var saran = "Anda sebaiknya diet dan mengatur pola makan...";

	  } else if (bmi > 30.0) {
	    var output = '<b style="color:red;"><i>Obesitas...</i></b>';
	    var saran = "Anda harus diet dan banyak berolahraga...";
	  }	else {

	  }		
		//form_hitung.hasil_bmi.value = bmi;
		document.getElementById('hasil').innerHTML='<label class="label-input100">Hasil Perhitungan</label><p style="text-align: justify;padding:10px;">Hasil Perhitungan IMT Anda : '+bmi.toFixed(2)+' <br> Kategori : '+output+'<br><b style="color:blue;">'+saran+'<b></p> ';
		 
		}, hitung_mundur);

		}

	}

function bersihkan(){
		var form_hitung = document.kalkulator_bmi;
		var berat = eval(form_hitung.berat.value);
		var tinggi = eval(form_hitung.tinggi.value);
		
		form_hitung.berat.value="";
		form_hitung.tinggi.value="";
		document.getElementById('hasil').innerHTML='';
}


	