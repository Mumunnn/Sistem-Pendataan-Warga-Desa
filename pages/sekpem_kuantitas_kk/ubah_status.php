<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Jumlah Kartu Keluarga</h1>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_status.php" method="post">
  <h3>Validasi</h3>
  <table class="table table-striped table-middle">
    <tr>
      <input type="hidden" name="id_jumlah_kk" value="<?php echo $data[0]['id_jumlah_kk'] ?>">
    </tr>
    <tr>
      <th width="20%">Status</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control" name="status" required>
          <option value="<?php echo $data[0]['status'] ?>" selected><?php echo $data[0]['status'] ?></option>
          <option value="Valid" > Valid </option>
          <option value="Belum Valid" > Belum Valid </option>
        </select>
      </td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>