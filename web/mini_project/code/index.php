<?php 
include 'koneksi.php';
include 'header.php'; 

// Nama tabel disesuaikan: tranksaksi_servis
$query = "SELECT tranksaksi_servis.*, admin.id_admin 
          FROM tranksaksi_servis 
          JOIN admin ON tranksaksi_servis.id_admin = admin.id_admin 
          ORDER BY tranksaksi_servis.id_servis DESC";

$result = mysqli_query($koneksi, $query);
?>

<!-- Kartu Statistik (Analytics) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <!-- Card 1 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4 border-l-4 border-orange-500">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center text-2xl">⏳</div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Dalam Antrean</p>
                            <p class="text-2xl font-black text-slate-800">5 <span class="text-xs font-normal text-slate-400">Unit</span></p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4 border-l-4 border-blue-500">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-2xl">🔧</div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Sedang Diproses</p>
                            <p class="text-2xl font-black text-slate-800">3 <span class="text-xs font-normal text-slate-400">Unit</span></p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4 border-l-4 border-emerald-500">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-2xl">✅</div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Selesai (Bulan Ini)</p>
                            <p class="text-2xl font-black text-slate-800">0 <span class="text-xs font-normal text-slate-400">Unit</span></p>
                        </div>
                    </div>
                </div>

                <!-- Tabel Data Terbaru -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50 flex justify-between items-center">
                        <h4 class="font-bold text-slate-800">Servis Sedang Berjalan</h4>
                        <a href="#" class="text-xs font-bold text-indigo-600 hover:text-indigo-800">Lihat Semua →</a>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-slate-50 border-b border-slate-200">
            <tr>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">TGL-MASUK</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Pelanggan</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Perangkat</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">STATUS</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">Aksi</th>
</tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr class="hover:bg-slate-50/50 transition-colors">
                <td class="px-6 py-4 text-slate-800 font-bold"><?php echo $row['tgl_masuk']; ?></td>
                <td class="px-6 py-4 text-slate-600"><?php echo $row['nama_pelanggan']; ?></td>
                </td>
                <td class="px-6 py-4 text-slate-800 font-bold"><?php echo $row['tipe_hp']; ?></td>
                <td class="px-6 py-4 text-slate-600 font-bold"><?php echo $row['status_service']; ?></td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center gap-2">
                                       <span>
            <a href="hapus.php?id=<?php echo $row['id_servis']; ?>" onclick="return confirm('Hapus data?')" class="p-2 text-red-500 hover:bg-red-50 rounded-lg">UPDATE</a>    
            </span>
                    </div>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
                </div>

            </main>

<?php include 'footer.php'; ?>