
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>

    <link rel="stylesheet" href="css/tambahdata.css">
</head>
<body>

    <div class="form-container">

        <div class="form-header">
            <div class="header-icon">♙</div>
            <div>
                <h2>Tambah Data Siswa</h2>
                <p>Silakan lengkapi informasi siswa di bawah ini.</p>
            </div>
        </div>

        <form action="" method="POST">

            <div class="form-group">
                <label for="nis">NIS</label>
                <input
                    type="text"
                    id="nis"
                    name="nis"
                    placeholder="Masukkan NIS"
                    required
                >
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="contoh@email.com"
                    required
                >
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input
                    type="text"
                    id="jurusan"
                    name="jurusan"
                    placeholder="Masukkan jurusan"
                    required
                >
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input
                    type="text"
                    id="gambar"
                    name="gambar"
                    placeholder="Masukkan nama atau lokasi gambar"
                >
            </div>

            <button type="submit" name="submit">
                <span class="plus-icon">+</span>
                Tambah Data
            </button>

        </form>

    </div>

</body>
</html>
