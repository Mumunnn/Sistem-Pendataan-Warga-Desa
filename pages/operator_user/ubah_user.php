<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data User</h1>

<?php include('_partials/menu_user.php') ?>

<?php include('data_show.php') ?>

<form action="fungsi_ubah_user.php" method="post">
  <h3>Ubah Data User</h3>
  <table class="table table-striped table-middle">
    <tr>
      <input type="hidden" name="id_user" value="<?php echo $data_user[0]['id_user'] ?>">
    </tr>
    <tr>
      <th width="20%">Nama User</th>
      <td width="1%">:</td>
      <td><input type="text" class="form-control" name="nama_user" value="<?php echo $data_user[0]['nama_user'] ?>" required></td>
    </tr>
    <tr>
      <th>Username</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="username_user" value="<?php echo $data_user[0]['username_user'] ?>" required></td>
    </tr>
    <tr>
      <th>Password</th>
      <td>:</td>
      <td>
        <input type="password" class="form-control" name="password_user">
        <small>Jika dikosongkan, maka password tidak berubah</small>
      </td>
    </tr>
    <tr>
    <th>Jabatan</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="jabatan_user" required>
        <option value="<?php echo $data_user[0]['jabatan_user'] ?>" selected><?php echo $data_user[0]['jabatan_user'] ?></option>
        <option value="Kades">Kades</option>
        <option value="Dusun">Dusun</option>
        <option value="Sekpem">Sekpem</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control" name="id_jenis_kelamin" required>
        <option value="<?php echo $data_user[0]['id_jenis_kelamin'] ?>" selected><?php echo $data_user[0]['nama_jenis_kelamin'] ?></option>
        <?php foreach ($data_jk as $jk) : ?>
            <option value="<?php echo $jk['id_jenis_kelamin'] ?>">
              <?php echo $jk['nama_jenis_kelamin'] ?>
            </option>
        <?php endforeach ?>
      </select>
    </td>
  </tr>
    <tr>
      <th>No. HP</th>
      <td>:</td>
      <td><input type="text" class="form-control" name="no_hp_user" value="<?php echo $data_user[0]['no_hp_user'] ?>" required></td>
    </tr>
  </table>

  <button type="submit" class="btn btn-success btn-lg">
    <i class="glyphicon glyphicon-floppy-save"></i> Simpan
  </button>
</form>
<br>

<?php include('../_partials/bottom.php') ?>