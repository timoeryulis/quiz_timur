
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>#hitung{
  background-color:#F5F7FC;
  font-family:verdana;
  font-size:14px;
  border:7px;
  width:300px;
  border-color:#0E08DD;
  text-align : center;
  }
</style>
<body>





<div id="hitung">
  <p align="center"><b>Menghitung Indeks Massa Tubuh</b></p><br>

 Berat Badan :  <input type="text" id="berat" name="berat"><br/>
 <br>         
             <br>
     
 Tinggi Badan : <input type="text" id="tinggi" name="tinggi"><br/>
     
 <br><input type="button" id="btnHitung" value="Hitung IMT" onclick="hitungImt();"><br/>
     
     <br>      IMT    = 
     <input type="text" id="txtIMT" disabled="true" name="txtIMT"><br>
     
    </div>

<script type="text/javascript" src="proses.js"></script>

</body>
</html>