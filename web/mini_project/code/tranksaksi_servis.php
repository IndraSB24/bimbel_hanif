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

<div class="mb-6 flex justify-between items-center">
    <div>
        <h3 class="text-2xl font-black text-slate-800">Daftar Transaksi</h3>
        <p class="text-slate-500 text-sm">Kelola semua antrean servis masuk di sini.</p>
    </div>
    <a href="tambah_tranksaksi.php" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-bold text-sm transition-all flex items-center gap-2">
        <span>+</span> Tambah Transaksi
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-slate-200">
    <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
    <table class="w-full text-left border-collapse">
        <thead class="bg-slate-50 border-b border-slate-200">
            <tr>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Pelanggan</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Perangkat</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">ID Admin </th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">Biaya</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">TGL MASUK</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">STATUS</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">Keluhan</th>
                <th>Tgl-Keluar</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr class="hover:bg-slate-50/50 transition-colors">
                <td class="px-6 py-4 font-medium text-slate-600">#<?php echo $row['id_servis']; ?></td>
                <td class="px-6 py-4 text-slate-800 font-bold"><?php echo $row['nama_pelanggan']; ?></td>
                <td class="px-6 py-4 text-slate-600"><?php echo $row['tipe_hp']; ?></td>
                <td class="px-6 py-4">
                    <span class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-xs font-bold">
                        <?php echo $row['id_admin']; ?>
                    </span>
                </td>
                 <td class="px-6 py-4 text-slate-800 font-bold"><?php echo $row['biaya']; ?></td>
                <td class="px-6 py-4 text-slate-800 font-bold"><?php echo $row['tgl_masuk']; ?></td>
                <td class="px-6 py-4 text-slate-600 font-bold"><?php echo $row['status_service']; ?></td>
                <td class="px-6 py-4 text-slate-600 font-bold"><?php echo $row['keluhan']; ?></td>
               <td><?php echo $row['tgl_ambil'];?></td>
                <td class="px-6 py-4 text-center">
                    <div>
                        <a href="edit.php?id_servis=<?php echo $row['id_servis']; ?>" 
   onclick="return confirm('Ingin Update data?')" 
   class="p-2 text-red-500 hover:bg-red-50 rounded-lg">✏️
</a>
<a href="hapus.php?id_servis=<?php echo $row['id_servis']; ?>" 
   onclick="return confirm('Hapus data?')" 
   class="p-2 text-red-500 hover:bg-red-50 rounded-lg">
   🗑️
</a>
</div>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</div>

<?php include 'footer.php'; ?>