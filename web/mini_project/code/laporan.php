<?php 
include 'koneksi.php';
include 'header.php';

// 1. Query untuk menghitung total pendapatan dari status yang 'Selesai'
$query_pendapatan = mysqli_query($koneksi, "SELECT SUM(biaya) as total FROM tranksaksi_servis WHERE status_service = 'Selesai'");
$data_pendapatan = mysqli_fetch_assoc($query_pendapatan);
$total_rp = $data_pendapatan['total'] ?? 0;

// 2. Query untuk menghitung jumlah unit yang 'Selesai'
$query_selesai = mysqli_query($koneksi, "SELECT COUNT(*) as total_unit FROM tranksaksi_servis WHERE status_service = 'Selesai'");
$data_selesai = mysqli_fetch_assoc($query_selesai);
$total_unit = $data_selesai['total_unit'] ?? 0;

// 3. Hitung rata-rata
$rata_rata = ($total_unit > 0) ? ($total_rp / $total_unit) : 0;
?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">
    
    <!-- Filter Section (Hanya UI sementara) -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 mb-8">
        <div class="flex flex-col md:flex-row items-end gap-4">
            <div class="flex-1">
                <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Pilih Filter Waktu</label>
                <div class="grid grid-cols-2 gap-3">
                    <select class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm outline-none">
                        <option>Bulan Ini</option>
                        <option>Tahun ini (2026)</option>
                    </select>
                    <select class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm outline-none">
                        <option>Semua Staf Kasir</option>
                    </select>
                </div>
            </div>
            <button class="bg-indigo-600 text-white px-8 py-2 rounded-lg font-bold text-sm">Tampilkan Data</button>
        </div>
    </div>

    <!-- Financial Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <!-- Card Total Pendapatan -->
        <div class="md:col-span-2 bg-gradient-to-br from-indigo-600 to-indigo-800 p-8 rounded-3xl text-white shadow-xl shadow-indigo-200">
            <p class="text-indigo-200 text-sm font-bold uppercase tracking-widest mb-2">Total Pendapatan (Selesai)</p>
            <h3 class="text-4xl font-black mb-4">Rp <?php echo number_format($total_rp, 0, ',', '.'); ?></h3>
        </div>

        <!-- Card Unit Selesai -->
        <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm text-center">
            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-1">Servis Selesai</p>
            <h3 class="text-4xl font-black text-slate-800"><?php echo $total_unit; ?></h3>
            <p class="text-xs font-medium text-slate-400 italic mt-1">Unit Handphone</p>
        </div>

        <!-- Card Rata-rata -->
        <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-1">Rata-rata / Servis</p>
            <h3 class="text-2xl font-black text-indigo-600">Rp <?php echo number_format($rata_rata / 1000, 0); ?>rb</h3>
            <p class="text-[10px] text-slate-400 mt-4 italic">* Berdasarkan total biaya dibagi unit selesai.</p>
        </div>
    </div>

    <!-- Performa Kasir (Contoh menampilkan ID Admin dari Database) -->
    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm max-w-2xl">
        <h4 class="font-black text-slate-800 uppercase tracking-tighter mb-6">Ranking Staf Teraktif</h4>
        <div class="space-y-6">
            <?php 
            // Query untuk melihat admin mana yang paling banyak menyelesaikan servis
            $query_staf = mysqli_query($koneksi, "SELECT admin.nama_lengkap, COUNT(tranksaksi_servis.id_servis) as jumlah 
                                                  FROM tranksaksi_servis 
                                                  JOIN admin ON tranksaksi_servis.id_admin = admin.id_admin 
                                                  WHERE tranksaksi_servis.status_service = 'Selesai'
                                                  GROUP BY admin.id_admin 
                                                  ORDER BY jumlah DESC");
            $no = 1;
            while($staf = mysqli_fetch_assoc($query_staf)):
            ?>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-amber-100 text-amber-700 rounded-lg flex items-center justify-center font-black"><?php echo $no++; ?></div>
                    <div>
                        <p class="text-xs font-black text-slate-800"><?php echo $staf['nama_lengkap']; ?></p>
                        <p class="text-[10px] text-slate-400"><?php echo $staf['jumlah']; ?> Pengerjaan Selesai</p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

</main>
<?php include 'footer.php'; ?>