<?php 
include 'koneksi.php';
include 'header.php'; 

$query = "SELECT * FROM admin ORDER BY id_admin DESC";
$result = mysqli_query($koneksi, $query);
?>

<div class="mb-6 flex justify-between items-center">
    <h3 class="text-2xl font-black text-slate-800">Data Admin</h3>
    <a href="tambah_admin.php" class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-bold text-sm"> + Tambah </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 bg-indigo-500 rounded-full flex items-center justify-center text-white font-bold">
                <?php echo strtoupper(substr($row['nama_lengkap'], 0, 1)); ?>
            </div>
            <div>
                <h4 class="font-bold text-slate-800"><?php echo $row['nama_lengkap']; ?></h4>
                <p class="text-xs text-slate-500">User: @<?php echo $row['username']; ?></p>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<?php include 'footer.php'; ?>