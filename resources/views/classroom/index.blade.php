<div class="page-container">

    <div id="modal-code-static" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kode Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fs-4 fw-bold text-center">ABC-123-XYZ</p> </div>
            </div>
        </div>
    </div>

    <div id="modal-create-info-static" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Pengumuman Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" rows="3" placeholder="Tulis pengumuman di sini..."></textarea>
                    <button class="btn btn-primary mt-3 float-end">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mw-md py-4">
        
        <div class="banner-class-static p-4 rounded bg-primary text-white">
            <h1 class="fs-3 fw-bold">Pengembangan Web Tingkat Lanjut</h1> <p class="mb-0">Dosen Pengampu: **Budi Santoso**</p> <button type="button" class="btn btn-light btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modal-code-static">
                Lihat Kode Kelas
            </button>
        </div>

        <div class="row mt-3">

            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Stream</a>
                    <a href="#" class="list-group-item list-group-item-action">Tugas Kelas</a>
                    <a href="#" class="list-group-item list-group-item-action">Anggota</a>
                    <a href="#" class="list-group-item list-group-item-action">Nilai (Hanya Guru)</a> </div>
            </div>

            <div class="col-md-8">
                <div class="pt-2 mb-4 d-flex justify-content-between align-items-center">
                    <h2 class="fs-5 fw-bold mt-2">Postingan</h2>
                    
                    <div class="dropdown-post-static">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-create-info-static">
                            Buat Pengumuman
                        </button>
                    </div>
                </div>

                <div class="d-flex flex-column gap-2">
                    
                    <div class="card-post-static card border shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h5 class="card-title fw-bold text-success">Pengumuman: Jadwal Ujian Tengah Semester</h5>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                        ...
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="card-text">UTS akan dilaksanakan pada hari Senin, 15 Januari 2026. Materi yang diujikan meliputi bab 1 hingga bab 4. Harap dipersiapkan dengan baik.</p>
                            <small class="text-muted">Diposting oleh **Budi Santoso** pada 20 November 2025</small>
                        </div>
                    </div>
                    
                    <div class="card-post-static card border shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">Tugas Baru: Proyek Akhir CRUD App</h5>
                            <p class="card-text">Silakan kerjakan proyek akhir membuat aplikasi CRUD sederhana menggunakan framework yang sudah diajarkan. Tenggat waktu: **30 Desember 2025**.</p>
                            <small class="text-muted">Diposting oleh **Budi Santoso** pada 15 November 2025</small>
                        </div>
                    </div>
                    
                    </div>
            </div>
        </div>
    </div>
</div>