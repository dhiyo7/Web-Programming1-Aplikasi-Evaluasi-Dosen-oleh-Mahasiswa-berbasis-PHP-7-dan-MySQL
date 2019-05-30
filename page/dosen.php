<?php 
$c = $connect;
$result = mysqli_query($c, "SELECT * FROM dosen where deleted = 0");
while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $hasil[] = $d;

}


?>
<!-- Content Header (Page header) -->
<section class="content-header">
 <h1>
  Data Dosen
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
         <a href="?hal=add_dosen" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>
         Tambah User</a> <br><br><br>
       </div>
       <!-- <form> -->
         <div class="table-responsive">
           <table id="example1" class="table table-bordered table-striped">
             <thead>
               <tr>
                 <th>Nama Lengkap</th>
                 <th>Prodi</th>
                 <th>Kelas</th>
                 <th>Action</th> 
               </tr>
             </thead>
             <tbody>

              <?php foreach ($hasil as $row) {  ?>
              <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['prodi'] ?></td>
                <td><?php echo $row['kelas'] ?></td>
                <td style="text-align: center;">
                  <a class='btn btn-info btn-xs' href="?hal=edit_dosen&&id=<?php echo $row['id'] ?>" class=""> <i class="glyphicon glyphicon-edit"></i></a>
                  <a class='btn btn-danger btn-xs' href="?hal=edit_dosen&&delete_id=<?php echo $row['id'] ?>" class=""> <i class="glyphicon glyphicon-trash"></i></a>
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
