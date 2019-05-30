<?php 
$c = $connect;
$result = mysqli_query($c, "SELECT * FROM pertanyaan");
while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $hasil[] = $d;
}

// session_start();
$kelas = $_SESSION['kelas'];

$result2 = mysqli_query($c, "SELECT * FROM dosen where kelas like '%$kelas%'");
while($e = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
  $hasil2[] = $e;
}

if (isset($_POST['simpan'])) {
  $data1 = $_POST['data1'];
  $data2 = $_POST['data2'];
  $data3 = $_POST['data3'];
  $data4 = $_POST['data4'];
  $data5 = $_POST['data5'];
  $data6 = $_POST['data6'];
  $data7 = $_POST['data7'];
  $data8 = $_POST['data8'];
  $data9 = $_POST['data9'];
  $data10 = $_POST['data10'];

    // echo $data1;

  $n = ($data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10) / 10;
  $nilai = floatval($n);
    // redirect(ll);
  $id = $_SESSION['id'];
  $dosen = $_POST['dosen'];
  $saran = $_POST['saran'];
  $result2 = mysqli_query($c, "INSERT INTO hasil(id_user,id_dosen,nilai,saran) values ('$id','$dosen','$nilai' , '$saran')");

  $result3 = mysqli_query($connect, "insert into log(log) values('".$_SESSION['nim']." memberikan penilaian terhadap dosen yang ber id " .$dosen ."')");

  if ($result2) {
    echo "<script>
    window.location = 'user.php';
    </script>";
  }else{
    echo "<script>
    window.alert('gagal');
    </script>";
  }
  
}




?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Kuisioner
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
        <form method="POST">




          <div class="table-responsive">
            <table id="" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Pertanyaan</th>
                  <th>Jawaban</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pilih Dosen</td>
                  <td> 
                    <select name="dosen" class="form-control">
                      <option disabled selected>--Pilih Dosen--</option>
                      <?php foreach ($hasil2 as $row2) {  ?>
                      <option value='<?php echo $row2['id'] ?>'><?php echo $row2['nama'] ?></option>
                      <?php } ?>
                    </select>
                  </td>
                </tr>

                <?php foreach ($hasil as $row) {  ?>
                <tr>
                  <td><?php echo $row['pertanyaan'] ?></td>
                  <td>
                    <select name="data<?php echo $row['id'] ?>" class="form-control">
                      <option disabled selected>--Berikan Penilaian--</option>
                      <option value='10'>Sangat Baik</option>
                      <option value='9'>Baik</option>
                      <option value='8'>Cukup</option>
                      <option value='7'>Kurang Baik</option>
                      <option value='6'>Sangat Kurang Baik</option>
                    </select>
                  </td>
                </tr>
                <?php } ?>

                <tr>
                  <td>Pilih Dosen</td>
                  <td> 
                    <input type="text" name="saran" placeholder="Masukan Saran Anda" class="form-control">
                  </td>
                </tr>
              </tbody>

            </table>

            <button name="simpan" type="submit" class="btn btn-info">Simpan Penilaian</button>
          </div>
        </form>

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
