<?php
include_once 'atas.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <div class="container-fluid">
    <h2 style="text-align: center;" >Form Nilai</h2>
    <form method="POST" action="nilai_siswa.php" >
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="DDP">Dasar Dasar Pemrograman</option>
            <option value="WEB">Pemrograman Web</option>
            <option value="BASDAT">Basis Data</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
          <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      </div>
</div>
</div>
    </form>

<?php
include_once'bawah.php';
?>