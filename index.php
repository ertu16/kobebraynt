<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	 
	 <div class="container"> 
	 
	 <?php  
	 
	 include("ayar.php");
	 
	    if($_POST){
			 
			 $isim   = trim($_POST["isim"]);
			 $sifre  = trim($_POST["sifre"]);
			 $eposta = trim($_POST["eposta"]); 
			 $kod    = md5(rand(0,9999999999));
			 
			 if(!$isim || !$sifre || !$eposta){
				 
				 echo '<div style="margin-top:20px;" class="alert alert-warning">gerekli alanları doldurmanız gerekiyor...</div>';
				 
			 }else {
				 
               
              $insert = $db->prepare("insert into uyeler set 
			  
			                 uye_adi=?,
							 uye_sifre=?,
							 uye_eposta=?,
			                 uye_kod=?
			  
			  ");			   

			$ok = $insert->execute(array($isim,$sifre,$eposta,$kod));  

               
			   if($ok){
				  
                 
                  include("mail/PHPMailerAutoload.php");
			
            $mail = new PHPMailer;            
 			
			$mail->IsSMTP();
			//$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls'; // Güvenli baglanti icin ssl normal baglanti icin tls
			$mail->Host = "smtp.yandex.com"; // Mail sunucusuna ismi
			$mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
			$mail->IsHTML(true);
			$mail->SetLanguage("tr", "phpmailer/language");
			$mail->CharSet  ="utf-8";
			$mail->Username = "etopa96@gmail.com"; // Mail adresimizin kullanicı adi
			$mail->Password = "kobe"; // Mail adresimizin sifresi
			$mail->SetFrom("nuralpmehmet@yandex.com",$isim); // Mail attigimizda gorulecek ismimiz
			$mail->AddAddress($eposta); // Maili gonderecegimiz kisi yani alici
			$mail->addReplyTo($eposta, $isim);
			$mail->Subject = "Yye onay kobe braynt sitesi"; // Konu basligi
			$mail->Body = "<div style='background:#eee;padding:5px;margin:5px;width:300px;'> eposta : ".$eposta."</div> <br /> onaylama linki : <br /> 
			
			 http://localhost/onay.php?eposta=".$eposta."&kod=".$kod."
			
			
			"; // Mailin icerigi
			if(!$mail->Send()){
			
                  echo '<div style="margin-top:20px;" class="alert alert-warning">mail gonderilemedi ama veritabanına kaydınız yapıldı..</div>';
			
			}else {
				
				echo '<div style="margin-top:20px;" class="alert alert-success">kaydınız olusmustur mail adresinize onaylama maili gonderildi...</div>';
				
			}
				 
				  
				  

				  
				   
				   
			   }else {
				   
 echo '<div style="margin-top:20px;" class="alert alert-warning">kayıt olurken bir hata olustu..</div>';
   
				   
				   
			   }

			
				 
			 }
			 
			 
			 
			
		}else {
			
			
			
			?>
			<form action="" method="post">
			<div class="col-md-5">
            <h3>uye kayıt formu</h3>			
			<div class="form-group"> 
			<label for="isim">adınız</label>
			<input type="text" name="isim" class="form-control" id="isim" />
			</div>
			<div class="form-group"> 
			<label for="sifre">sifre</label>
			<input type="text" name="sifre" class="form-control" id="sifre" />
			</div>
			<div class="form-group"> 
			<label for="eposta">eposta</label>
			<input type="text" name="eposta" class="form-control" id="eposta" />
			</div>
			
			<button type="submit" class="btn btn-primary">kayıt ol</button>
			
			</div>
			</form>
			<?php
			
			
		}
	 
	 
	 ?>
	 
	 
	 
	 
	 </div>
	 
	 
</body>
</html>