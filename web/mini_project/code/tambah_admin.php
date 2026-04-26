<?php include 'header.php'; ?>

<div class="max-w-md mx-auto">
    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-indigo-600 px-8 py-5 text-white">
            <h4 class="font-black uppercase text-lg text-center">Tambah Admin Baru</h4>
        </div>

        <form action="proses_admin.php" method="POST" class="p-8 space-y-6">
            <div>
                <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Nama Lengkap Admin</label>
                <input type="text" name="nama_admin" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm" placeholder="Contoh: Hanif Musyaffa">
            </div>
            
            <button type="submit" name="simpan_admin" class="w-full bg-indigo-600 text-white py-3 rounded-xl font-bold uppercase text-sm shadow-lg hover:bg-indigo-700 transition">
                Daftarkan Admin
            </button>
            <a href="admin.php" class="block text-center text-xs text-slate-400 hover:text-slate-600 mt-4">Kembali ke Daftar</a>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>