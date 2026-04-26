<?php include 'header.php'; ?>

<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-indigo-600 px-8 py-5 text-white">
            <h4 class="font-black uppercase text-lg">Formulir Penerimaan Servis</h4>
        </div>

        <form action="proses_tambah.php" method="POST" class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Nomor WhatsApp</label>
                        <input type="text" name="no_hp" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Tipe HP</label>
                        <input type="text" name="tipe_hp" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                    </div>
                     <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Biaya</label>
                        <input type="text" name="biaya" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                    </div>
                    <div>
                       <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Masuk</label>
                        <input type="date" 
                        name="tgl_masuk" 
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm" 
                        required>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Admin Penanggung Jawab</label>
                        <select name="id_admin" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                            <option value="" disabled selected>-- Pilih Admin --</option>
                            <?php
                            include 'koneksi.php';
                            $query_admin = mysqli_query($koneksi, "SELECT * FROM admin");
                            while($admin = mysqli_fetch_assoc($query_admin)) {
                                echo "<option value='".$admin['id_admin']."'>".$admin['nama_admin']."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Keluhan</label>
                        <textarea name="keluhan" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <button type="submit" name="simpan" class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold uppercase text-sm shadow-lg hover:bg-indigo-700 transition">Simpan Data</button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>