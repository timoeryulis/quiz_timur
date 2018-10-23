// function hitung_bmi(){
// 	var form_hitung = document.kalkulator;
// 	var berat = eval(form_hitung.berat.value);
// 	var tinggi = eval(form_hitung.tinggi.value);

// 	var bmi = berat/((tinggi/100) * (tinggi/100));
//   //alert("bmi anda :"+bmi);

// 	// if (bmi <= 18.5) {
//  //    var output = "Kekurangan Berat Badan...";

//  //  } else if (bmi > 18.5 && bmi<=24.9 ) {
//  //    var output = "Berat Badan Normal...";

//  //  } else if (bmi > 24.9 && bmi<=29.9) {
//  //    var output = "Kelebihan Berat Badan...";

//  //  } else if (bmi > 30.0) {
//  //    var output = "Obesitas";
//  //  }

// // var hasil = "Nilai BMI anda adalah  "+bmi+"<br> Dan Anda : "+output;
// form_hitung.bmi.value = bmi;
// //document.getElementById('bmi').innerHTML='<label class="label-input100" >Hasil</label><textarea id="message" class="input100" style="color:white;">Indeks BMI Anda : </textarea><span class="focus-input100"></span>';

// }

 


   function hitungImt(){
    bb = document.getElementById("berat").value;
    tb = document.getElementById("tinggi").value;
    t=(tb/100);
    IMT = bb / (t*t) ;
    document.getElementById("txtIMT").value =  IMT;

   }

