<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSERVICE - Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: { colors: { primary: '#4f46e5', secondary: '#10b981' } } }
        }
    </script>
</head>
<body class="bg-slate-100 font-sans text-slate-800">
    <div class="flex h-screen overflow-hidden bg-slate-100 max-w-7xl mx-auto border shadow-xl">
        <aside class="w-64 bg-slate-900 text-white flex flex-col hidden md:flex">
            <div class="h-16 flex items-center justify-center border-b border-slate-700">
                <span class="text-2xl mr-2">📱</span>
                <h1 class="text-xl font-black tracking-widest text-indigo-400">iSERVICE</h1>
            </div>
            <nav class="flex-1 overflow-y-auto py-4">
                <ul class="space-y-2 px-4">
                    <li><a href="index.php" class="flex items-center gap-3 hover:bg-slate-800 text-slate-300 px-4 py-3 rounded-lg font-medium"><span>🏠</span> Dashboard</a></li>
                    <li><a href="tranksaksi_servis.php" class="flex items-center gap-3 bg-indigo-600 text-white px-4 py-3 rounded-lg font-medium"><span>🛠️</span> Transaksi Servis</a></li>
                    <li><a href="laporan.php" class="flex items-center gap-3 hover:bg-slate-800 text-slate-300 px-4 py-3 rounded-lg font-medium"><span>👤</span>Laporan Pendapatan</a></li>                   
                    <li><a href="admin.php" class="flex items-center gap-3 hover:bg-slate-800 text-slate-300 px-4 py-3 rounded-lg font-medium"><span>👤</span> Data Admin</a></li>
                </ul>
            </nav>
            <div class="p-4 border-t border-slate-700">
                <a href="logout.php" class="flex items-center gap-3 hover:bg-red-600/20 text-red-400 px-4 py-2 rounded-lg font-medium"><span>🚪</span> Keluar</a>
            </div>
        </aside>

        <div class="flex flex-col flex-1 overflow-hidden">
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 shadow-sm z-10">
                <div>
                    <h2 class="font-bold text-slate-800 text-lg">Manajemen Sistem</h2>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-indigo-100 rounded-full border-2 border-indigo-500 flex items-center justify-center text-indigo-700 font-black">KS</div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">