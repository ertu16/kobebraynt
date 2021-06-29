<?php include 'header.php'; ?>
 <?php
include("baglan.php");
$sorgu=$vt->prepare("SELECT *FROM yorumlar");
$sorgu->execute();
$yorumlist=$sorgu-> fetchAll(PDO::FETCH_OBJ);
?>
</tr> --->
                    <table id="dene" class="table table-bordered table-striped table-dark" style="width:100%;border:none">
                  <tr>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Lütfen arayacağınız ID numarasını yazınız." style=" margin-bottom: 0px; width:100%; padding: 12px 20px 12px 40px;">

 <td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">ID</td>
                   <td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">Adı</td>
                   <td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">Favori NBA Oyuncusu</td>
<td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">Yorum</td>
<td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">Onay</td>

                   </tr>
                   <?php
                   foreach($yorumlist as $yorumm){?>
                   </form name="zimpara_gonder" method="post">
                        <tr>
                        <?php
                        if($durum==true)
                        {
                        echo('<td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center"> '.$yorumm->id.'</td>
                        <td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->adi.'</td>
                         <td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->foyuncu.'</td>
                        <td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->yorum.'</td>
                        <td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->onay.'</td>
                      </tr>');
                        $durum=false;
                              }
                              else if($durum==false)
                              {
                        echo('<td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center"> '.$yorumm->id.'</td>
                        <td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->adi.'</td>
                        <td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->foyuncu.'</td>
                        <td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->yorum.'</td>
                        <td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->onay.'</td>               
                      </tr>');
                        $durum=true;
                              }
                         ?>
                   <?php } ?>
 
                  </table>  
              <!---- </div>  
        </div>
        </div>--->
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dene");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
      <?php include 'footer.php'; ?>