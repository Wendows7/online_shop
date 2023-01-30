<!DOCTYPE html>
<html>
<head>
<title>Pencarian Data Menggunakan Barcode Scanner</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="style.css" rel="stylesheet">
</head>
<body>
   <h1>Pencarian Data Menggunakan Barcode Scanner</h1>
   <div class="content">
   <p>Masukkan Kode Barcode : <input type='text' id="input_scanner"></p>
   <p><button type="button" id="btn_clear" class="btn btn-primary" style="margin-left:170px;"><span class="glyphicon glyphicon-remove"></span>  Clear Field</button> </p>
   <p id="message_info"></p>
   </div>
<script>
$(document).ready(function(){
   $('#input_scanner').val("").focus();
     $('#input_scanner').keyup(function(e){
     var tex = $(this).val();
     if(tex !=="" && e.keyCode===13){
        $('#input_scanner').val(tex).focus();
        $.ajax({
        type: 'POST',
        url: 'cari.php',
        data: {"input_scanner":tex},
        beforeSend:function(response) {
          $('#message_info').html("Sedang memproses data, silahkan tunggu...");
        },
        success:function(response) {
          $('#message_info').html(response);
        }
        });
     }
     e.preventDefault();
   });
   $('#btn_clear').click(function(){
     $('#input_scanner').val("").focus();
   });
});
</script>
</body>
</html>



<!-- <center><h1>Pencarian Data Menggunakan Barcode Scanner</h1>
   <div class="content">
   <p>Masukkan Kode Barcode : <input type='text' id="input_scanner"></p>
   <p><button type="button" id="btn_clear" class="btn btn-primary" style="margin-left:170px;"><span class="glyphicon glyphicon-remove"></span>  Clear Field</button> </p>
   <p id="message_info"></p>
   </div></center>
<script>
$(document).ready(function(){
   $('#input_scanner').val("").focus();
     $('#input_scanner').keyup(function(e){
     var tex = $(this).val();
     if(tex !=="" && e.keyCode===13){
        $('#input_scanner').val(tex).focus();
        $.ajax({
        type: 'POST',
        url: 'cari.php',
        data: {"input_scanner":tex},
        beforeSend:function(response) {
          $('#message_info').html("Sedang memproses data, silahkan tunggu...");
        },
        success:function(response) {
          $('#message_info').html(response);
        }
        });
     }
     e.preventDefault();
   });
   $('#btn_clear').click(function(){
     $('#input_scanner').val("").focus();
   });
});
</script>
   </div> -->