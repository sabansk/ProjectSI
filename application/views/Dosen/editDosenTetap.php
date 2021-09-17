<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="p-3">
    <div class="text-left">
      <h2 class="h2 text-gray-900 mb-4">Edit Data Dosen Tetap</h2>
    </div>
    <form class="form-horizontal" method="post" action="<?= site_url('C_DosenTetap/editDosenTetap_aksi/' . $dosenTetap->id) ?>" enctype="multipart/form-data">
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Nama Dosen
          <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" required value="<?= $dosenTetap->nama ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">NIDN
          <input type="text" class="form-control" name="nidn" placeholder="NIDN" required value="<?= $dosenTetap->nidn ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Tanggal Lahir
          <input onfocus="(this.type='date')" class="form-control" name="tgllahir" placeholder="Tanggal Lahir" required value="<?= $dosenTetap->tgl_lahir ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Jabatan Akademik
          <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Akademik" required value="<?= $dosenTetap->jabatan ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Gelar Depan
          <input type="text" class="form-control" name="gelardepan" placeholder="Gelar Sarjana" required value="<?= $dosenTetap->gelardepan ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Gelar Belakang
          <input type="text" class="form-control" name="gelarbelakang" placeholder="Gelar Sarjana" required value="<?= $dosenTetap->gelarbelakang ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Pendidikan S1
          <input type="text" class="form-control" name="pendidikan1" placeholder="Pendidikan S1" required value="<?= $dosenTetap->pendidikan1 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Pendidikan S2
          <input type="text" class="form-control" name="pendidikan2" placeholder="Pendidikan S2" required value="<?= $dosenTetap->pendidikan2 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Pendidikan S3
          <input type="text" class="form-control" name="pendidikan3" placeholder="Pendidikan S3" value="<?= $dosenTetap->pendidikan3 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Keahlian S1
          <input type="text" class="form-control" name="bidang1" placeholder="Bidang Keahlian S1" required value="<?= $dosenTetap->bidang1 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Keahlian S2
          <input type="text" class="form-control" name="bidang2" placeholder="Bidang Keahlian S2" required value="<?= $dosenTetap->bidang2 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Bidang Keahlian S3
          <input type="text" class="form-control" name="bidang3" placeholder="Bidang Keahlian S3" value="<?= $dosenTetap->bidang3 ?>">
        </p>
      </div>
      <div class="form-group">
        <p class="h5 text-gray-900 mb-4">Surat Bukti
          <input type="file" class="form-control" name="suratbukti" placeholder="suratbukti" value="<?= $dosenTetap->suratbukti ?>">
          <input type="hidden" class="form-control" name="old_pdf" placeholder="suratbukti" value="<?= $dosenTetap->suratbukti ?>">
          <input type="hidden" class="form-control" name="keterangan" placeholder="suratbukti" value="<?= $dosenTetap->keterangan ?>">
        </p>
      </div>
      <div class="btn-group" style="width:100%">
        <a type="button" class="btn btn-danger" style="color:white" onClick="javascript:history.go(-1)">
          <div class="fa fa-arrow-left"></div>
          Batal
        </a>
        <button class="btn btn-info" type="submit">
          <div class="fa fa-check"></div>
          Simpan
        </button>
      </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->