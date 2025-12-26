<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/mahasiswa/cari" method="POST" class="d-flex my-3" role="search">
                <input class="form-control me-2" type="text" placeholder="Cari mahasiswa.." name="keyword" id="keyword"
                    autocomplete="off" autofocus>
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3 class="mt-3">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><?= $mhs['nama'] ?></span>
                        <div class="d-flex gap-2">
                            <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>"
                                class="badge text-bg-primary text-decoration-none">Detail</a>
                            <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>"
                                class="badge text-bg-danger text-decoration-none"
                                onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs['id'] ?>"
                                class="badge text-bg-success text-decoration-none tampilModalUbah" data-bs-toggle="modal"
                                data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>">Ubah</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASEURL ?>/mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3 form-group">
                        <label for=" nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" name="nrp" class="form-control" id="nrp">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select form-select-lg" id="jurusan" name="jurusan"
                            aria-label="Large select example">
                            <option value="Teknik Informatika">
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi">
                                Sistem Informasi
                            </option>
                            <option value="Teknik Elektro">
                                Teknik Elektro
                            </option>
                            <option value="Teknik Lingkungan">
                                Teknik Lingkungan
                            </option>
                            <option value="Teknik Mesin">
                                Teknik Mesin
                            </option>
                            <option value="Arsitektur">
                                Arsitektur
                            </option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>