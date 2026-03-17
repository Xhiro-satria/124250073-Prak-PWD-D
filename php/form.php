<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <div class="container mt-4 mb-4 px-3">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card card-transparan shadow animate__animated animate__fadeInLeft">
                    <div class="card-header text-center">
                        <h4>Form Pendaftaran Pasien</h4>
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="POST">
                            <p>Data Pasien</p>
                            <div class="row mb-3">
                                <div class="col">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                </div>
                                <div class="col">
                                    <label>Umur</label>
                                    <input type="number" name="umur" class="form-control" placeholder="Umur" required min="1">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label>Gender</label>
                                    <select name="gender" class="form-select" required>
                                        <option value="">Pilih</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label>No HP</label>
                                    <input type="text" name="hp" class="form-control" placeholder="No HP" required minlength="6" maxlength="15">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <p>Pilih Dokter</p>
                                    <select name="dokter" class="form-select mb-3" required>
                                        <option value="umum">Dokter Umum</option>
                                        <option value="gigi">Dokter Gigi</option>
                                        <option value="anak">Dokter Anak</option>
                                        <option value="kulit">Dokter Kulit</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <p>Pilih Layanan</p>
                                    <select name="layanan" class="form-select mb-3" required>
                                        <option value="">Pilih Layanan</option>
                                        <option value="konsul">Konsultasi</option>
                                        <option value="pemeriksaan">Pemeriksaan</option>
                                        <option value="vaksin">Vaksin</option>
                                        <option value="teslab">Tes Lab</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <p>Tanggal & Jam Kunjungan</p>
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                                <div class="col">
                                    <label>Jam</label>
                                    <input type="time" name="jam" class="form-control" required>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex gap-2">
                                <button type="reset" class="btn btn-danger w-15">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                                <button type="submit" name="hitung" class="btn btn-primary w-100 fw-bold">
                                    Hitung Biaya
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12 text-klinik animate__animated animate__fadeInRight">
                <h1 class="fw-bold">Trusted Care for Every Patient</h1>
                <p class="lead">Your trusted healthcare partner, providing compassionate care and innovative solutions for a healthier tomorrow.</p>
                <div class="row text-center mt-3">
                    <div class="col-4 stat-item ">
                        <h3 class="fw-bold">99+</h3>
                        <small class="text-light">Medical Services</small>
                    </div>
                    <div class="col-4 stat-item ">
                        <h3 class="fw-bold">20+</h3>
                        <small class="text-light">Professional Doctors</small>
                    </div>
                    <div class="col-4 stat-item ">
                        <h3 class="fw-bold">5000+</h3>
                        <small class="text-light">Happy Patients</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>