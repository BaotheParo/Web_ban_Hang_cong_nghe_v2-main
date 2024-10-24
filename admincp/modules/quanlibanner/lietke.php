<?php 
  
   $sql_brand = "SELECT * FROM tbl_banner   ORDER BY id_banner DESC";
   $query_brand = mysqli_query($mysqli,$sql_brand);
  


?>


<div class="form2 form2-1">
    <div class="form-title">
        <p>Liệt kê Banner </p>
    </div>
    <div class="form2-content">
       <table>

        <tr>
          <th>Stt</th>
          <th>Hình ảnh Banner</th>
          <th>Quản lí</th>
        </tr>
        

        <?php
          
           $i=0;
           while($row = mysqli_fetch_array($query_brand)){
           $i++;
        
        ?>
            <tr>
                <th><?= $i ?></th>
             
                
                <th><img src="modules/quanlibanner/uploads/<?php echo $row['anh_banner'] ?>" alt="" class=" img_banner"></th>
                <th>
                    <a href="?action=quanlybanner&query=sua&idbanner=<?php echo $row['id_banner'] ?>">Sửa</a>
                    <a href="modules/quanlibanner/xuli.php?idbanner=<?php echo $row['id_banner'] ?>">Xóa</a>
                </th>
            </tr>
              
       <?php 
           }
       ?>
        
        
       </table>

    </div>
   
</div>