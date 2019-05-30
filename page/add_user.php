<?php 

if (isset($_POST['simpan'])) {
  $nim = $_POST['nim'];
  //$nama = $_POST['nama'];
  $prodi = $_POST['prodi'];
  $kelas = $_POST['kelas'];
  $result = mysqli_query($connect, "insert into user(nim,prodi,kelas,password) values('$nim','$prodi' , '$kelas' , '$nim')");
  if ($result) {
    $log = mysqli_query($connect, "insert into log(log) values('Admin menambahkan user dengan nim ".$nim." dari prodi ".$prodi."')");
    echo "<script>
    window.location = './admin.php?hal=user';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }




}
?>

<!-- Main content -->
<section class="content">
  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah User</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <form method="POST">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM...">
              </div>
              <div class="form-group">
                <label>Prodi</label>
                <select name="prodi" class="form-control">
                  <option selected disabled>-- Pilih Prodi --</option>
                  <option >Akuntansi</option>
                  <option >Elektro</option>
                  <option >Farmasi</option>
                  <option >Kebidanan</option>
                  <option >Teknik Informatika</option>
                  <option >Teknik Komputer</option>
                  <option >Teknik Mesin</option>
                </select>
              </div>

              <div class="form-group">
                <label>Kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="Masukkan kelas...">
                <div class="box-footer">
                  <div class="col-md-12">
                    <button type="submit" name="simpan" class="btn btn-block btn-primary">Simpan</button>
                  </div>

                </div>
              </div>
            </form>


          </div>

        </div>

      </div>

    </div>

  </section>
  <!-- /.box -->
