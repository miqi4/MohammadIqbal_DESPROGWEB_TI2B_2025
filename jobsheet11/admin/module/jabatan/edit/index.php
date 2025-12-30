<?php
include "admin/template/menu.php";
$id = $_GET['id'];
$query = "SELECT * FROM jabatan WHERE id = '$id'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($sql);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jabatan</h1>
  </div>

  <div class="card">
    <div class="card-body">
        <form action="fungsi/edit.php?jabatan=edit" class="form-label" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="page" value="jabatan">

        <div class="mb-3">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input type="text" class="form-control" name="jabatan" value="<?= $data['jabatan'] ?>">
        </div>

        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <textarea class="form-control" name="keterangan"><?= $data['keterangan'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
          <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan
        </button>
        <a href="index.php?page=jabatan" class="btn btn-secondary">
          <i class="fa fa-arrow-left" aria-hidden="true"></i> Batal
        </a>
      </form>
    </div>
  </div>
</main>