<?php include 'header.php'; ?>
 <?php
include("baglan.php");
$sorgu=$vt->prepare("SELECT *FROM users");
$sorgu->execute();
$yorumlist=$sorgu-> fetchAll(PDO::FETCH_OBJ);

?>

                    <table id="dene" class="table table-bordered table-striped table-dark" style="width:100%;border:none">
                  <tr>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Lütfen arayacağınız ID numarasını yazınız." style=" margin-bottom: 0px; width:100%; padding: 12px 20px 12px 40px;">

 <td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">ID</td>
                   <td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">Kullanıcı Adı</td>
                   <td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">Şifresi</td>
<td align="center" style="background:#66FFFF;height:17px;line-height:17px;text-align:center">Ad Soyadı</td>

                   </tr>
                   <?php
                   foreach($yorumlist as $yorumm){?>
                   </form name="zimpara_gonder" method="post">
                        <tr>
                        <?php
                        if($durum==true)
                        {
                        echo('<td align="center" style="background:#66FFCC;color:black;height:20px;line-height:20px;text-align:center"> '.$yorumm->id.'</td>
                        <td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->user_name.'</td>
                         <td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->password.'</td>
                        <td align="center" style="background:#f3f3f3;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->name.'</td>
                      
                      </tr>');
                        $durum=false;
                              }
                              else if($durum==false)
                              {
                        echo('<td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center"> '.$yorumm->id.'</td>
                        <td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->user_name.'</td>
                        <td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->password.'</td>
                        <td align="center" style="background:#cccccc;color:black;height:20px;line-height:20px;text-align:center">'.$yorumm->name.'</td>
                                       
                      </tr>');
                        $durum=true;
                              }
                         ?>
                   <?php } ?>
 
                  </table>  



       <?php include 'footer.php'; ?>