<?php include 'header.php'; ?>

<!doctype html>
<?php
    $baglan=mysqli_connect("localhost","root","12345678","mydb");
    mysqli_query("SET NAMES UTF-8");
    if($baglan)
    {

    }
    else{
        die("bağlantı hatası:".mysqli_connect_error());
    }
 ?>
  <div id="content">
          <h2 class="text-center">Yorum Onayla</h2>
          <div class="line"></div>
          <form class="row g-3" method="post" enctype="multipart/form-data" id="register" action="yorumonay.php">
  <div class="col-md-6">
    <label for="fiyat" class="form-label">Yorum ID</label>
    <input type="text" name="yorumid" class="form-control" id="yorumid">
  </div>
  <div class="col-12">
  <button type="submit" name="buton" class="btn btn-primary">Onayla</button>
</div>
<a href="yorumlistele.php">Yorum Listele</a>


</form>
        </div>
    </div>



       <?php include 'footer.php'; ?>