<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEL-LEATS | Peminjaman Peralatan</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #263238;
            line-height: 1.6;
        }

        header {
            background: #174a70;
            color: white;
            padding: 20px 8%;
        }

        header h1 {
            font-size: 26px;
        }

        header p {
            color: #dce8f0;
            font-size: 14px;
        }

        nav {
            background: white;
            padding: 14px 8%;
            border-bottom: 1px solid #ddd;
        }

        nav a {
            color: #174a70;
            text-decoration: none;
            margin-right: 22px;
            font-weight: bold;
        }

        main {
            width: 84%;
            max-width: 1100px;
            margin: 45px auto;
        }

        .pembuka {
            background: white;
            padding: 35px;
            border-radius: 10px;
            border: 1px solid #e1e5e8;
        }

        .pembuka h2 {
            color: #174a70;
            font-size: 30px;
            margin-bottom: 12px;
        }

        .pembuka p {
            max-width: 650px;
            color: #59666f;
            margin-bottom: 24px;
        }

        .tombol {
            display: inline-block;
            padding: 11px 18px;
            margin: 5px 8px 5px 0;
            border-radius: 5px;
            background: #174a70;
            color: white;
            text-decoration: none;
        }

        .tombol.kedua {
            background: white;
            color: #174a70;
            border: 1px solid #174a70;
        }

        .bagian {
            margin-top: 32px;
        }

        .bagian h3 {
            margin-bottom: 15px;
        }

        .kartu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .isi-kartu {
            background: white;
            padding: 22px;
            border: 1px solid #e1e5e8;
            border-radius: 8px;
        }

        .isi-kartu h4 {
            color: #174a70;
            margin-bottom: 8px;
        }

        .isi-kartu p {
            color: #59666f;
            font-size: 14px;
        }

        footer {
            text-align: center;
            padding: 24px;
            color: #687780;
            font-size: 13px;
        }

        @media (max-width: 700px) {
            main {
                width: 92%;
                margin: 25px auto;
            }

            .pembuka {
                padding: 24px;
            }

            .pembuka h2 {
                font-size: 24px;
            }

            .kartu {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .kartu {
                grid-template-columns: 1fr;
            }

            nav a {
                display: inline-block;
                margin-bottom: 6px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>DEL-LEATS</h1>
        <p>Sistem Informasi Pengelolaan dan Peminjaman Peralatan</p>
    </header>

    <nav aria-label="Navigasi utama">
        <a href="/">Beranda</a>
        <a href="/equipments">Katalog Peralatan</a>
        <a href="/equipments/create">Tambah Peralatan</a>
        <a href="/loans/create">Ajukan Peminjaman</a>
    </nav>

    <main>
        <section class="pembuka">
            <h2>Selamat Datang di DEL-LEATS</h2>
            <p>
                Aplikasi ini digunakan untuk melihat data peralatan,
                mengetahui kondisi dan ketersediaannya, serta mengajukan
                peminjaman peralatan untuk keperluan kegiatan laboratorium.
            </p>

            <a class="tombol" href="/equipments">
                Lihat Katalog Peralatan
            </a>

            <a class="tombol kedua" href="/loans/create">
                Ajukan Peminjaman
            </a>
        </section>

        <section class="bagian">
            <h3>Layanan Aplikasi</h3>

            <div class="kartu">
                <article class="isi-kartu">
                    <h4>Data Peralatan</h4>
                    <p>
                        Melihat informasi peralatan, kode aset,
                        kategori, dan spesifikasi.
                    </p>
                </article>

                <article class="isi-kartu">
                    <h4>Status Peralatan</h4>
                    <p>
                        Mengetahui apakah peralatan tersedia,
                        sedang dipinjam, atau dalam perbaikan.
                    </p>
                </article>

                <article class="isi-kartu">
                    <h4>Peminjaman</h4>
                    <p>
                        Mengisi pengajuan peminjaman dan
                        menentukan tanggal pengembalian.
                    </p>
                </article>
            </div>
        </section>
    </main>

    <footer>
        DEL-LEATS &copy; 2026 — Sistem Pengelolaan Peralatan
    </footer>
</body>
</html>
