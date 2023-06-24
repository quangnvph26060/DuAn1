
<?php

if(isset($tendm)){
    extract($tendm);
}
?>
<div class="row mb ">
    <div class="boxtrai mb ">
    <style>
                #d1{
                    text-decoration: none;
                    color: #666;
                }
                #d1:hover{
                    text-decoration: none;
                    color: #2566CA;
                }
                #img{
                    opacity: 0.5;

                }
                #img:hover{
                    opacity: 1;
                    /* margin-top: -10px; */
                    transform: scale(1.2);
                }
                p{
                    color: #D3021C;
                    font-weight: bold;
                }
            </style>
        
        <div class="row mb">
           
            <div class="boxtitle"><?= $tendm['name'] ?> </div>
            <div class="row boxcontent csshinh">
              <div class="boxsp">
              <?php
                      $i = 0;
                      foreach ($ds_san_pham as $dssp) {
                          extract($dssp);
                          $hinh = $hinhpath . $img;
                          $linksp  = "index.php?act=sanphamct&id=".$id;
                          if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                              $mr = "mr";
                          } else {
                              $mr = "";
                          }
                          echo '
                          <div class="sp ' . $mr . '">
                          <img src="' . $hinh . '" alt="" id="img">
                          <p>' . number_format($price) .   '<u>đ</u></p>
                          <a href="'.$linksp.'" id="d1">' . $name_sp . '</a>
                       
                         
                           </div>
                              ';
                          $i += 1;
                      }
               
               ?>
              </div>

            </div>
        </div>
       
      

    </div>

    <div class="boxphai  ">
        <?php include "boxright.php"; ?>
    </div>
</div>