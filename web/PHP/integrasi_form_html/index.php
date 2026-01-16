<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Handling Form & Input</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 3px solid #009688;
            padding-bottom: 10px;
            text-align: center;
        }
        h2 {
            color: #00796b;
            margin-top: 40px;
            border-left: 5px solid #009688;
            padding-left: 10px;
            background: #e0f2f1;
            padding: 10px;
            border-radius: 0 4px 4px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        h3 {
            color: #444;
            margin-top: 25px;
            font-weight: 600;
        }
        
        /* Highlight Box (Summary) */
        .highlight {
            background-color: #fff3e0;
            padding: 20px;
            border-left: 5px solid #ff9800;
            margin: 20px 0;
            border-radius: 4px;
            color: #5d4037;
        }

        /* Menu Navigation */
        .nav-menu {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            justify-content: center;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .btn-latihan {
            display: inline-block;
            text-decoration: none;
            background-color: #34495e;
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 0.9em;
            transition: background 0.2s;
        }
        .btn-latihan:hover {
            background-color: #2c3e50;
        }
        .btn-context {
            font-size: 0.7em;
            background-color: #009688;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            margin-left: 10px;
        }
        .btn-context:hover { background-color: #00796b; }

        /* Comparison Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #009688;
            color: white;
        }
        tr:nth-child(even) { background-color: #f9f9f9; }

        /* Code Blocks */
        .code-block {
            background-color: #282c34;
            color: #abb2bf;
            border-radius: 6px;
            padding: 20px;
            margin: 15px 0;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
            overflow-x: auto;
            font-size: 14px;
            line-height: 1.5;
            position: relative;
        }
        
        /* Syntax Colors */
        .tag { color: #e06c75; }
        .attr { color: #d19a66; }
        .str { color: #98c379; }
        .kw { color: #c678dd; } /* keyword: if, echo */
        .var { color: #e06c75; } /* php var */
        .func { color: #61afef; } /* function */
        .comment { color: #5c6370; font-style: italic; }

        .concept-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .alert-security {
            background-color: #ffebee;
            color: #c62828;
            padding: 15px;
            border: 1px solid #ffcdd2;
            border-radius: 4px;
            font-weight: 500;
        }

        /* Visual Example Styles */
        .visual-example {
            background-color: #fff;
            border: 2px dashed #b2dfdb;
            border-radius: 8px;
            padding: 20px;
            margin-top: 10px;
            position: relative;
        }
        .visual-label {
            position: absolute;
            top: -12px;
            left: 20px;
            background: #009688;
            color: white;
            padding: 2px 10px;
            font-size: 0.8em;
            border-radius: 4px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Agar padding tidak merusak lebar */
        }
        .btn-submit {
            background-color: #00796b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-submit:hover { background-color: #004d40; }
        
        /* Arrow Illustration */
        .arrow-down {
            text-align: center;
            font-size: 24px;
            color: #aaa;
            margin: 10px 0;
        }

        /* Popup Simulation */
        .popup-sim {
            border: 1px solid #999;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            background: #fff;
            width: 200px;
            margin: 10px auto;
            border-radius: 5px;
            font-family: sans-serif;
            text-align: center;
            overflow: hidden;
        }
        .popup-header {
            background: #eee;
            padding: 5px;
            font-size: 12px;
            border-bottom: 1px solid #ccc;
        }
        .popup-body {
            padding: 15px;
            color: black;
            font-size: 14px;
        }
        .popup-btn {
            margin-bottom: 10px;
            padding: 2px 10px;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <h1>Materi Ajar: Integrasi Form & PHP</h1>

    <!-- Navigasi Menu Atas -->
    <div class="nav-menu">
        <strong>Akses Cepat Latihan:</strong>
        <a href="latihan_form.php" class="btn-latihan">1. Struktur Form</a>
        <a href="latihan_get_post.php" class="btn-latihan">2. GET vs POST</a>
        <a href="latihan_handling_data.php" class="btn-latihan">3. Handling Data</a>
        <a href="latihan_keamanan_form.php" class="btn-latihan">4. Keamanan</a>
    </div>

    <div class="highlight">
        <strong>Tujuan Pembelajaran:</strong>
        <ul style="margin-bottom:0;">
            <li>Memahami perbedaan metode pengiriman data <b>GET</b> dan <b>POST</b>.</li>
            <li>Menggunakan Superglobals <code>$_POST</code> dan <code>$_GET</code> untuk menangkap input.</li>
            <li>Melakukan validasi dasar (cek tombol submit).</li>
        </ul>
    </div>

    <!-- 1. HTML FORM STRUCTURE -->
    <h2>
        1. Struktur Dasar Form HTML
        <a href="integrasi_form_html/latihan_form.php" class="btn-context">Buka Latihan Praktik ➜</a>
    </h2>
    <div class="concept-card">
        <p>Agar PHP bisa membaca data, elemen HTML Form wajib memiliki 3 hal:</p>
        <ol>
            <li>Tag <code>&lt;form&gt;</code>.</li>
            <li>Atribut <strong><code>name="..."</code></strong> pada input (KTP-nya data).</li>
            <li>Tombol <strong>Submit</strong>.</li>
        </ol>

        <div class="code-block">
<span class="tag">&lt;form</span> <span class="attr">action</span>=<span class="str">"proses.php"</span> <span class="attr">method</span>=<span class="str">"POST"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;label&gt;</span>Nama:<span class="tag">&lt;/label&gt;</span>
    <span class="comment">&lt;!-- 'name' adalah kunci untuk PHP --&gt;</span>
    <span class="tag">&lt;input</span> <span class="attr">type</span>=<span class="str">"text"</span> <span class="attr">name</span>=<span class="str">"nama_lengkap"</span><span class="tag">&gt;</span>
    
    <span class="tag">&lt;button</span> <span class="attr">type</span>=<span class="str">"submit"</span> <span class="attr">name</span>=<span class="str">"kirim"</span><span class="tag">&gt;</span>Kirim Data<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;/form&gt;</span>
        </div>

        <!-- VISUALISASI 1 -->
        <div class="visual-example">
            <span class="visual-label">Hasil Tampilan di Browser</span>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" class="form-control" placeholder="Ketik nama di sini...">
                <small style="color: #e67e22;">(Input ini punya name="nama_lengkap")</small>
            </div>
            <button class="btn-submit">Kirim Data</button>
        </div>
    </div>

    <!-- 2. GET VS POST -->
    <h2>
        2. Metode Pengiriman: GET vs POST
        <a href="integrasi_form_html/latihan_get_post.php" class="btn-context">Buka Latihan Praktik ➜</a>
    </h2>
    <p>Lihat perbedaan visual penggunaannya di bawah ini:</p>

    <!-- Visual Comparison Side by Side -->
    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <!-- KIRI: GET -->
        <div class="concept-card" style="flex: 1; min-width: 300px;">
            <h3>A. Metode GET (Transparan)</h3>
            <p>Cocok untuk <b>Pencarian / Filter</b>.</p>
            
            <div class="visual-example" style="border-color: #3498db;">
                <span class="visual-label" style="background:#3498db">Contoh: Search Bar</span>
                <div class="form-group">
                    <label>Cari Produk:</label>
                    <input type="text" class="form-control" value="Sepatu">
                </div>
                <button class="btn-submit" style="background:#3498db">Cari</button>
            </div>

            <div class="arrow-down">⬇</div>

            <div style="background: #ecf0f1; padding: 10px; border-radius: 4px; font-family: monospace; font-size: 0.9em;">
                <strong>URL Berubah Jadi:</strong><br>
                website.com/cari.php?<span style="color:red">keyword=Sepatu</span>
            </div>
            <p><small>❌ Jangan pakai untuk password!</small></p>
        </div>

        <!-- KANAN: POST -->
        <div class="concept-card" style="flex: 1; min-width: 300px;">
            <h3>B. Metode POST (Rahasia)</h3>
            <p>Cocok untuk <b>Login / Input Data</b>.</p>
            
            <div class="visual-example" style="border-color: #e74c3c;">
                <span class="visual-label" style="background:#e74c3c">Contoh: Form Login</span>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" value="rahasia123">
                </div>
                <button class="btn-submit" style="background:#e74c3c">Login</button>
            </div>

            <div class="arrow-down">⬇</div>

            <div style="background: #ecf0f1; padding: 10px; border-radius: 4px; font-family: monospace; font-size: 0.9em;">
                <strong>URL Tetap Bersih:</strong><br>
                website.com/login.php
            </div>
            <p><small>✅ Data dikirim di belakang layar.</small></p>
        </div>
    </div>

    <!-- 3. MENANGKAP DATA DI PHP -->
    <h2>
        3. Menangkap Data di PHP
        <a href="integrasi_form_html/latihan_handling_data.php" class="btn-context">Buka Latihan Praktik ➜</a>
    </h2>
    <div class="concept-card">
        <p>Bayangkan user mengisi form sebagai berikut:</p>
        
        <!-- Simulasi User Input -->
        <div class="visual-example">
            <span class="visual-label">User Input</span>
            <label>Nama Lengkap:</label>
            <input type="text" class="form-control" value="Budi Santoso" readonly style="background: #f9f9f9;">
        </div>

        <div class="arrow-down">⬇ Dikirim ke Server (PHP) ⬇</div>

        <!-- Kode PHP -->
        <div class="code-block">
<span class="tag">&lt;?php</span>
<span class="comment">// 1. Cek tombol diklik</span>
<span class="kw">if</span> (<span class="func">isset</span>(<span class="var">$_POST</span>[<span class="str">'kirim'</span>])) {

    <span class="comment">// 2. Ambil data dari 'name'</span>
    <span class="var">$nama</span> = <span class="var">$_POST</span>[<span class="str">'nama_lengkap'</span>]; 
    
    <span class="comment">// 3. Tampilkan</span>
    <span class="kw">echo</span> <span class="str">"Halo, "</span> . <span class="var">$nama</span>;
}
<span class="tag">?&gt;</span>
        </div>

        <div class="visual-example" style="background: #2d2d2d; color: #fff; border: none;">
            <span class="visual-label" style="background: #555;">Hasil Output PHP</span>
            Halo, Budi Santoso
        </div>
    </div>

    <!-- 4. KEAMANAN DASAR -->
    <h2>
        4. Keamanan Dasar (Sanitasi)
        <a href="integrasi_form_html/latihan_keamanan_form.php" class="btn-context">Buka Latihan Praktik ➜</a>
    </h2>
    <div class="concept-card">
        <div class="alert-security">
            ⚠️ <strong>BAHAYA XSS (Cross Site Scripting):</strong><br>
            Jangan pernah percaya input user! Jika user iseng memasukkan kode javascript, website Anda bisa di-hack.
        </div>

        <p>Contoh Kasus: Hacker memasukkan input <code>&lt;script&gt;alert('Hacked!');&lt;/script&gt;</code> ke kolom komentar.</p>

        <!-- Visual Comparison Side by Side -->
        <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
            
            <!-- KASUS BURUK -->
            <div style="flex: 1; min-width: 300px; border: 2px solid #e74c3c; border-radius: 8px; overflow: hidden;">
                <div style="background: #e74c3c; color: white; padding: 5px 10px; font-weight: bold; font-size: 0.9em;">
                    ❌ TANPA Sanitasi (Bahaya!)
                </div>
                <div style="padding: 15px; background: #fdf2f2; height: 100%;">
                    <p style="font-size: 0.9em; margin-bottom: 10px;">Browser akan menjalankan kode tersebut:</p>
                    
                    <!-- Simulasi Popup Browser -->
                    <div class="popup-sim">
                        <div class="popup-header">localhost says</div>
                        <div class="popup-body">
                            Hacked!
                        </div>
                        <button class="popup-btn">OK</button>
                    </div>
                    <p style="color: #c0392b; font-size: 0.85em; text-align: center;">(Website terganggu / data dicuri)</p>
                </div>
            </div>

            <!-- KASUS BAIK -->
            <div style="flex: 1; min-width: 300px; border: 2px solid #27ae60; border-radius: 8px; overflow: hidden;">
                <div style="background: #27ae60; color: white; padding: 5px 10px; font-weight: bold; font-size: 0.9em;">
                    ✅ DENGAN htmlspecialchars() (Aman)
                </div>
                <div style="padding: 15px; background: #f0fdf4; height: 100%;">
                    <p style="font-size: 0.9em; margin-bottom: 10px;">Kode diubah menjadi teks biasa:</p>
                    
                    <div style="background: white; border: 1px solid #ccc; padding: 10px; font-family: monospace; color: #333; border-radius: 4px;">
                        &lt;script&gt;alert('Hacked!');&lt;/script&gt;
                    </div>
                    <p style="color: #27ae60; font-size: 0.85em; text-align: center; margin-top: 10px;">(Hanya tampil tulisan, script tidak jalan)</p>
                </div>
            </div>

        </div>

        <br>
        <p><strong>Solusi:</strong> Bungkus variabel dengan fungsi pengaman.</p>

        <div class="code-block">
<span class="tag">&lt;?php</span>
<span class="comment">// Amankan input sebelum ditampilkan</span>
<span class="var">$komentar</span> = <span class="func">htmlspecialchars</span>(<span class="var">$_POST</span>[<span class="str">'komentar'</span>]);
<span class="kw">echo</span> <span class="var">$komentar</span>;
<span class="tag">?&gt;</span>
        </div>
    </div>

</body>
</html>
