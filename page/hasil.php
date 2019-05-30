<?php 
$c = $connect;
$result = mysqli_query($c, "SELECT (SUM(a.nilai) / count(b.id) ) as nilai , b.nama , b.prodi , b.kelas from hasil a join dosen b on a.id_dosen = b.id where b.deleted = 0 GROUP BY b.id  ");
while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $hasil[] = $d;

}


?>
<!-- Content Header (Page header) -->
<section class="content-header">
 <h1>
  Data Hasil Kuisioner
</h1>

</section>

<!-- Main content -->
<section class="content">
 <div class="row">
   <div class="col-xs-12">
     <div class="box">
       <div class="box-header">

       </div>
       <!-- /.box-header -->
       <div class="box-body">

       </div>
       <!-- <form> -->
         <div class="table-responsive">
           <table id="example1" class="table table-bordered table-striped">
             <thead>
               <tr>
                 <th>Nama Dosen</th>
                 <th>Prodi</th>
                 <th>Kelas</th>
                 <th>Nilai</th> 
               </tr>
             </thead>
             <tbody>

              <?php foreach ($hasil as $row) {  ?>
              <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['prodi'] ?></td>
                <td><?php echo $row['kelas'] ?></td>
                <td style="text-align: center;">
                  <?php 
                  if ($row['nilai'] > 9 && $row['nilai'] <= 10 ) {
                    echo "Sangat Baik";
                  }elseif ($row['nilai'] > 8 && $row['nilai'] <= 9) {
                    echo "Baik";
                  }elseif ($row['nilai'] > 7 && $row['nilai'] <= 8) {
                    echo "Cukup";
                  }elseif ($row['nilai'] > 6 && $row['nilai'] <= 7) {
                    echo "Kurang Baik";
                  }elseif ($row['nilai'] > 5 && $row['nilai'] <= 6) {
                    echo "Sangat Kurang Baik";
                  }else{
                    echo "N/A";
                  }
                  ?>

                </td>
              </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>
        <!-- </form> -->

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
