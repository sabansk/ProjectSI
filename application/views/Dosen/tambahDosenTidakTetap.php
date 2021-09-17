        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="p-3">
            <div class="text-left">
              <h2 class="h2 text-gray-900 mb-1">Tambah Data Dosen Tidak Tetap</h2>
              <div class="text-center p-t-10">
                <hr class="sidebar-divider">
              </div>
            </div>
            <form class="form-horizontal" method="post" action="<?= site_url('C_DosenTdkTetap/tambahDosenTdkTetap_aksi') ?>" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" name="nama" placeholder="Nama Dosen" value="<?= set_value('nama') ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nidn" placeholder="NIDN" value="<?= set_value('nidn') ?>">
                <?= form_error('nidn', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input onfocus="(this.type='date')" class="form-control" name="tgllahir" placeholder="Tanggal Lahir" value="<?= set_value('tgllahir') ?>">
                <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Akademik" value="<?= set_value('jabatan') ?>">
                <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="gelardepan" placeholder="Gelar Sarjana. Contoh: Dra." value="<?= set_value('gelardepan') ?>">
                <?= form_error('gelardepan', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="gelarbelakang" placeholder="Gelar Sarjana. Contoh: S.Si., M.Si." value="<?= set_value('gelarbelakang') ?>">
                <?= form_error('gelarbelakang', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="pendidikan1" placeholder="Pendidikan S1" value="<?= set_value('pendidikan1') ?>">
                <?= form_error('pendidikan1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="pendidikan2" placeholder="Pendidikan S2" value="<?= set_value('pendidikan2') ?>">
                <?= form_error('pendidikan2', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="pendidikan3" placeholder="Pendidikan S3" value="<?= set_value('pendidikan3') ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="bidang1" placeholder="Bidang Keahlian S1" value="<?= set_value('bidang1') ?>">
                <?= form_error('bidang1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="bidang2" placeholder="Bidang Keahlian S2" value="<?= set_value('bidang2') ?>">
                <?= form_error('bidang2', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="bidang3" placeholder="Bidang Keahlian S3" value="<?= set_value('bidang3') ?>">
              </div>
              <div class="form-group">
                <input type="file" class="form-control" name="suratbukti"/>
              </div>
              <button class="btn btn-info btn-user btn-block" type="submit" value="upload">
                Simpan
              </button>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->