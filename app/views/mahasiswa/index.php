<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary mb-3 tampilModalTambah" data-toggle="modal" data-target="#formModal">
        Tambah data mahasiswa
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>mahasiswa/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword" aria-describedby="basic-addon2" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mahasiswa'] as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger p-2 mr-1 float-right" onclick="return confirm('yakin ingin menghapus data?')">Hapus</a>
            <a href="<?= BASEURL; ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success p-2 mr-1 float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
            <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary p-2 mr-1 float-right">Details</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php BASEURL; ?>mahasiswa/tambah" method="post">
          <input type="hidden" id="id" name="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="npm">Npm</label>
            <input type="text" class="form-control" id="npm" name="npm">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Planologi">Teknik Planologi</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>