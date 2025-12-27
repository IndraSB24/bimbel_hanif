<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Perulangan & Fungsi</title>
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
            border-bottom: 3px solid #009688; /* Warna Teal untuk tema ini */
            padding-bottom: 10px;
            text-align: center;
        }
        h2 {
            color: #00796b;
            margin-top: 30px;
            border-left: 5px solid #009688;
            padding-left: 10px;
        }
        h3 {
            color: #444;
            margin-top: 20px;
        }
        
        /* Highlight Box (Tips) */
        .highlight {
            background-color: #e0f2f1;
            padding: 15px;
            border-left: 5px solid #009688;
            margin: 20px 0;
            border-radius: 4px;
            color: #004d40;
        }
        
        /* Code Display Styling (Dark Theme) */
        .code-block {
            background-color: #282c34;
            color: #abb2bf;
            border-radius: 6px;
            padding: 20px;
            margin: 15px 0;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
            overflow-x: auto;
            white-space: pre; /* Menjaga spasi/enter otomatis */
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            font-size: 14px;
            line-height: 1.5;
        }
        
        /* Syntax highlighting simulation */
        .kw { color: #c678dd; } /* Keywords: for, function, return */
        .str { color: #98c379; } /* Strings */
        .var { color: #e06c75; } /* Variables */
        .num { color: #d19a66; } /* Numbers */
        .func { color: #61afef; } /* Function names */
        .comment { color: #5c6370; font-style: italic; } /* Comments */
        
        /* Output Styling */
        .output {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-left: 5px solid #ff9800; /* Warna Orange untuk Output */
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
            font-family: 'Segoe UI', sans-serif;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .output-label {
            font-weight: bold;
            color: #ef6c00;
            display: block;
            margin-bottom: 8px;
            text-transform: uppercase;
            font-size: 0.85em;
            letter-spacing: 1px;
        }

        .function-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Materi Ajar PHP: Perulangan & Fungsi</h1>

    <div class="highlight">
        <strong>Konsep Dasar:</strong><br>
        <ul>
            <li><strong>Perulangan (Loop)</strong>: Mengeksekusi blok kode berulang kali selama kondisi terpenuhi.</li>
            <li><strong>Fungsi (Function)</strong>: Blok kode terbungkus yang dapat dipanggil berkali-kali dengan parameter berbeda.</li>
        </ul>
    </div>

    <!-- 1. FOR LOOP -->
    <h2>1. For Loop</h2>
    <p>Digunakan ketika kita sudah tahu pasti berapa kali perulangan harus dilakukan.</p>

    <div class="code-block">&lt;?php
    <span class="comment">// Format: for (inisialisasi; kondisi; increment)</span>
    <span class="kw">for</span> (<span class="var">$i</span> = <span class="num">1</span>; <span class="var">$i</span> <= <span class="num">5</span>; <span class="var">$i</span>++) {
        <span class="kw">echo</span> <span class="str">"Perulangan ke-"</span> . <span class="var">$i</span> . <span class="str">"&lt;br&gt;"</span>;
    }
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi:</span>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Perulangan ke-" . $i . "<br>";
        }
        ?>
    </div>

    <!-- 2. WHILE LOOP -->
    <h2>2. While Loop</h2>
    <p>Mengeksekusi kode selama kondisi bernilai <code>true</code>. Pengecekan dilakukan di awal.</p>

    <div class="code-block">&lt;?php
    <span class="var">$counter</span> = <span class="num">1</span>;
    
    <span class="kw">while</span> (<span class="var">$counter</span> <= <span class="num">5</span>) {
        <span class="kw">echo</span> <span class="str">"Counter: "</span> . <span class="var">$counter</span> . <span class="str">"&lt;br&gt;"</span>;
        <span class="var">$counter</span>++; <span class="comment">// Jangan lupa increment agar tidak infinite loop</span>
    }
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi:</span>
        <?php
        $counter = 1;
        while ($counter <= 5) {
            echo "Counter: " . $counter . "<br>";
            $counter++;
        }
        ?>
    </div>

    <!-- 3. DO-WHILE LOOP -->
    <h2>3. Do-While Loop</h2>
    <p>Mirip dengan while, tapi blok kode dijalankan <strong>minimal satu kali</strong> sebelum kondisi dicek.</p>

    <div class="code-block">&lt;?php
    <span class="var">$num</span> = <span class="num">1</span>;
    
    <span class="kw">do</span> {
        <span class="kw">echo</span> <span class="str">"Number: "</span> . <span class="var">$num</span> . <span class="str">"&lt;br&gt;"</span>;
        <span class="var">$num</span>++;
    } <span class="kw">while</span> (<span class="var">$num</span> <= <span class="num">5</span>);
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi:</span>
        <?php
        $num = 1;
        do {
            echo "Number: " . $num . "<br>";
            $num++;
        } while ($num <= 5);
        ?>
    </div>

    <!-- 4. FOREACH LOOP -->
    <h2>4. Foreach Loop (Khusus Array)</h2>
    <p>Foreach adalah cara paling efisien untuk mengulang isi Array.</p>

    <div class="code-block">&lt;?php
    <span class="var">$buah</span> = <span class="kw">array</span>(<span class="str">"Apel"</span>, <span class="str">"Jeruk"</span>, <span class="str">"Mangga"</span>);

    <span class="comment">// Cara 1: Ambil Value saja</span>
    <span class="kw">foreach</span> (<span class="var">$buah</span> <span class="kw">as</span> <span class="var">$item</span>) {
        <span class="kw">echo</span> <span class="str">"Buah: "</span> . <span class="var">$item</span> . <span class="str">"&lt;br&gt;"</span>;
    }

    <span class="kw">echo</span> <span class="str">"&lt;br&gt;"</span>;

    <span class="comment">// Cara 2: Associative Array (Key => Value)</span>
    <span class="var">$siswa</span> = <span class="kw">array</span>(
        <span class="str">"Nama"</span> => <span class="str">"Budi"</span>, 
        <span class="str">"Kelas"</span> => <span class="str">"XII RPL"</span>
    );
    
    <span class="kw">foreach</span> (<span class="var">$siswa</span> <span class="kw">as</span> <span class="var">$kunci</span> => <span class="var">$nilai</span>) {
        <span class="kw">echo</span> <span class="var">$kunci</span> . <span class="str">": "</span> . <span class="var">$nilai</span> . <span class="str">"&lt;br&gt;"</span>;
    }
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi:</span>
        <?php
        $buah = array("Apel", "Jeruk", "Mangga");
        foreach ($buah as $item) {
            echo "Buah: " . $item . "<br>";
        }

        echo "<br>";

        $siswa = array("Nama" => "Budi", "Kelas" => "XII RPL");
        foreach ($siswa as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        ?>
    </div>

    <!-- 5. BREAK & CONTINUE -->
    <h2>5. Kontrol Loop: Break & Continue</h2>
    <p><code>Break</code> menghentikan total perulangan. <code>Continue</code> melompati satu putaran saat ini.</p>

    <div class="code-block">&lt;?php
    <span class="comment">// Contoh Break</span>
    <span class="kw">for</span> (<span class="var">$i</span> = <span class="num">1</span>; <span class="var">$i</span> <= <span class="num">10</span>; <span class="var">$i</span>++) {
        <span class="kw">if</span> (<span class="var">$i</span> == <span class="num">5</span>) {
            <span class="kw">echo</span> <span class="str">"STOP di 5! &lt;br&gt;"</span>;
            <span class="kw">break</span>; 
        }
        <span class="kw">echo</span> <span class="var">$i</span> . <span class="str">", "</span>;
    }

    <span class="kw">echo</span> <span class="str">"&lt;hr&gt;"</span>;

    <span class="comment">// Contoh Continue (Skip angka 3)</span>
    <span class="kw">for</span> (<span class="var">$j</span> = <span class="num">1</span>; <span class="var">$j</span> <= <span class="num">5</span>; <span class="var">$j</span>++) {
        <span class="kw">if</span> (<span class="var">$j</span> == <span class="num">3</span>) {
            <span class="kw">continue</span>; 
        }
        <span class="kw">echo</span> <span class="str">"Angka: "</span> . <span class="var">$j</span> . <span class="str">"&lt;br&gt;"</span>;
    }
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi:</span>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i == 5) {
                echo "STOP di 5! <br>";
                break;
            }
            echo $i . ", ";
        }

        echo "<hr>";

        for ($j = 1; $j <= 5; $j++) {
            if ($j == 3) {
                continue;
            }
            echo "Angka: " . $j . "<br>";
        }
        ?>
    </div>

    <!-- 6. FUNGSI -->
    <h2>6. Fungsi (Functions)</h2>
    <p>Membuat kode lebih modular dan mudah dikelola.</p>

    <div class="function-section">
        <h3>A. Fungsi Sederhana & Parameter</h3>
        <div class="code-block">&lt;?php
    <span class="comment">// Definisi Fungsi</span>
    <span class="kw">function</span> <span class="func">sapa</span>(<span class="var">$nama</span>) {
        <span class="kw">return</span> <span class="str">"Halo, "</span> . <span class="var">$nama</span> . <span class="str">"!"</span>;
    }

    <span class="kw">function</span> <span class="func">hitung_luas</span>(<span class="var">$p</span>, <span class="var">$l</span>) {
        <span class="kw">return</span> <span class="var">$p</span> * <span class="var">$l</span>;
    }

    <span class="comment">// Pemanggilan Fungsi</span>
    <span class="kw">echo</span> <span class="func">sapa</span>(<span class="str">"Andi"</span>) . <span class="str">"&lt;br&gt;"</span>;
    <span class="kw">echo</span> <span class="str">"Luas: "</span> . <span class="func">hitung_luas</span>(<span class="num">10</span>, <span class="num">5</span>);
?&gt;</div>

        <div class="output">
            <span class="output-label">Hasil Eksekusi:</span>
            <?php
            function sapa($nama) {
                return "Halo, " . $nama . "!";
            }
            function hitung_luas($p, $l) {
                return $p * $l;
            }

            echo sapa("Andi") . "<br>";
            echo "Luas: " . hitung_luas(10, 5);
            ?>
        </div>
    </div>

    <div class="function-section">
        <h3>B. Parameter Default</h3>
        <p>Parameter yang memiliki nilai bawaan jika tidak diisi saat pemanggilan.</p>
        <div class="code-block">&lt;?php
    <span class="kw">function</span> <span class="func">salam</span>(<span class="var">$nama</span>, <span class="var">$waktu</span> = <span class="str">"Pagi"</span>) {
        <span class="kw">return</span> <span class="str">"Selamat "</span> . <span class="var">$waktu</span> . <span class="str">", "</span> . <span class="var">$nama</span>;
    }

    <span class="kw">echo</span> <span class="func">salam</span>(<span class="str">"Budi"</span>) . <span class="str">"&lt;br&gt;"</span>;           <span class="comment">// Pakai default (Pagi)</span>
    <span class="kw">echo</span> <span class="func">salam</span>(<span class="str">"Siti"</span>, <span class="str">"Sore"</span>) . <span class="str">"&lt;br&gt;"</span>;  <span class="comment">// Override default</span>
?&gt;</div>

        <div class="output">
            <span class="output-label">Hasil Eksekusi:</span>
            <?php
            function salam($nama, $waktu = "Pagi") {
                return "Selamat " . $waktu . ", " . $nama;
            }

            echo salam("Budi") . "<br>";
            echo salam("Siti", "Sore") . "<br>";
            ?>
        </div>
    </div>

    <div class="function-section">
        <h3>C. Variable Scope (Lingkup Variabel)</h3>
        <p>Variabel di dalam fungsi (local) tidak bisa diakses dari luar, dan sebaliknya, kecuali menggunakan keyword <code>global</code>.</p>
        <div class="code-block">&lt;?php
    <span class="var">$global_var</span> = <span class="str">"Saya Global"</span>;

    <span class="kw">function</span> <span class="func">cek_scope</span>() {
        <span class="var">$local_var</span> = <span class="str">"Saya Lokal"</span>;
        <span class="kw">global</span> <span class="var">$global_var</span>; <span class="comment">// Tarik variabel luar ke dalam</span>
        
        <span class="kw">return</span> <span class="var">$global_var</span> . <span class="str">" & "</span> . <span class="var">$local_var</span>;
    }

    <span class="kw">echo</span> <span class="func">cek_scope</span>();
?&gt;</div>

        <div class="output">
            <span class="output-label">Hasil Eksekusi:</span>
            <?php
            $global_var = "Saya Global";

            function cek_scope() {
                $local_var = "Saya Lokal";
                global $global_var;
                return $global_var . " & " . $local_var;
            }

            echo cek_scope();
            ?>
        </div>
    </div>

    <div class="highlight">
        <strong>Ringkasan Penting:</strong>
        <ul style="margin-top:5px; margin-bottom:0;">
            <li>Gunakan <code>for</code> jika jumlah perulangan sudah jelas.</li>
            <li>Gunakan <code>foreach</code> untuk memproses data Array.</li>
            <li>Gunakan <code>function</code> untuk memecah program besar menjadi bagian-bagian kecil (modular).</li>
            <li>Hati-hati dengan <strong>Infinite Loop</strong> (perulangan tanpa henti) pada while/do-while.</li>
        </ul>
    </div>

</body>
</html>
