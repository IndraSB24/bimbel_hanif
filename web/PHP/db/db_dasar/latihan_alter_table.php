<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan SQL 2: Alter Table</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #fff8e1; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #f39c12; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #f39c12; }
        .instruction { background-color: #fff3e0; padding: 10px; border-radius: 4px; border: 1px solid #ffe0b2; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; white-space: pre-wrap; }
    </style>
</head>
<body>

    <h1>Latihan 2: Revisi Struktur (ALTER)</h1>
    <p style="text-align:center">Klien meminta perubahan pada tabel yang sudah ada. Gunakan <code>ALTER TABLE</code>.</p>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <h3>Soal 1: Lupa Kolom Email</h3>
        <div class="instruction">
            Tabel <code>karyawan</code> sudah dibuat, tapi lupa kolom <code>email</code>.<br>
            Tugas: Tambahkan kolom <code>email</code> (VARCHAR 50) ke tabel <code>karyawan</code>.
        </div>

        <?php
        // --- TULIS JAWABAN ANDA DI BAWAH ---
        // Hint: ALTER TABLE ... ADD COLUMN ...
        $sql_1 = "ALTER TABLE karyawan ADD COLUMN email VARCHAR(50);";
        ?>

        <div class="output-preview">
            <strong>Jawaban SQL Anda:</strong><br>
            <?php echo htmlspecialchars($sql_1); ?>
        </div>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <h3>Soal 2: Alamat Kurang Panjang</h3>
        <div class="instruction">
            Kolom <code>alamat</code> saat ini tipenya <strong>VARCHAR(50)</strong>, ternyata tidak cukup.<br>
            Tugas: Ubah kolom <code>alamat</code> pada tabel <code>siswa</code> menjadi tipe <strong>TEXT</strong>.
        </div>

        <?php
        // --- TULIS JAWABAN ANDA DI BAWAH ---
        // Hint: ALTER TABLE ... MODIFY COLUMN ...
        $sql2 = "ALTER TABLE siswa MODIFY COLUMN alamat TEXT;";
        ?>

        <div class="output-preview">
            <strong>Jawaban SQL Anda:</strong><br>
            <?php echo htmlspecialchars($sql2); ?>
        </div>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <h3>Soal 3: Menghapus Kolom Tidak Penting</h3>
        <div class="instruction">
            Kolom <code>hobi</code> di tabel <code>guru</code> dianggap tidak relevan.<br>
            Tugas: Hapus kolom <code>hobi</code> dari tabel <code>guru</code>.
        </div>

        <?php
        // --- TULIS JAWABAN ANDA DI BAWAH ---
        // Hint: ALTER TABLE ... DROP COLUMN ...
        $sql_3 = "ALTER TABLE guru DROP COLUMN hobi;";
        ?>

        <div class="output-preview">
            <strong>Jawaban SQL Anda:</strong><br>
            <?php echo htmlspecialchars($sql_3); ?>
        </div>
    </div>

</body>
</html>
