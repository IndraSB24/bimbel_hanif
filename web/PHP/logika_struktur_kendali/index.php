<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Logika & Struktur Kendali</title>
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
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #2c3e50;
            margin-top: 30px;
        }
        
        /* Box Styles */
        .highlight {
            background-color: #fff8e1;
            padding: 15px;
            border-left: 5px solid #ffc107;
            margin: 20px 0;
            border-radius: 4px;
        }
        
        /* Code Display Styling */
        .code-block {
            background-color: #282c34;
            color: #abb2bf;
            border-radius: 6px;
            padding: 20px;
            margin: 15px 0;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
            overflow-x: auto;
            white-space: pre; /* Preserves spaces/newlines automatically */
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            font-size: 14px;
        }
        
        /* Syntax highlighting simulation for display */
        .kw { color: #c678dd; } /* Keywords (if, else, switch) */
        .str { color: #98c379; } /* Strings */
        .var { color: #e06c75; } /* Variables */
        .num { color: #d19a66; } /* Numbers */
        
        /* Output Styling */
        .output {
            background-color: #e8f5e9;
            border: 1px solid #c8e6c9;
            border-left: 5px solid #4caf50;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
            font-family: 'Segoe UI', sans-serif;
        }
        .output-label {
            font-weight: bold;
            color: #2e7d32;
            display: block;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-size: 0.85em;
        }

        .interactive {
            background-color: #e3f2fd;
            border: 1px solid #2196F3;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Materi Ajar PHP: Logika & Struktur Kendali</h1>

    <div class="highlight">
        <strong>Struktur Kendali</strong> adalah cara untuk mengontrol alur eksekusi program berdasarkan kondisi tertentu. PHP memiliki beberapa struktur kendali: <code>if-else</code>, <code>switch-case</code>, dan <code>ternary operator</code>.
    </div>

    <!-- 1. IF ELSE -->
    <h2>1. If-Else Statement</h2>
    <p>Struktur if-else digunakan untuk mengeksekusi kode berdasarkan kondisi yang benar atau salah.</p>

    <!-- Code Display (Safe HTML) -->
    <div class="code-block">&lt;?php
    <span class="var">$nilai</span> = <span class="num">85</span>;

    <span class="kw">if</span> (<span class="var">$nilai</span> >= <span class="num">90</span>) {
        <span class="kw">echo</span> <span class="str">"Grade: A"</span>;
    } <span class="kw">elseif</span> (<span class="var">$nilai</span> >= <span class="num">80</span>) {
        <span class="kw">echo</span> <span class="str">"Grade: B"</span>;
    } <span class="kw">elseif</span> (<span class="var">$nilai</span> >= <span class="num">70</span>) {
        <span class="kw">echo</span> <span class="str">"Grade: C"</span>;
    } <span class="kw">else</span> {
        <span class="kw">echo</span> <span class="str">"Grade: D"</span>;
    }
?&gt;</div>

    <!-- Actual PHP Execution -->
    <div class="output">
        <span class="output-label">Hasil Eksekusi Server:</span>
        <?php
        $nilai = 85;

        if ($nilai >= 90) {
            echo "Grade: A";
        } elseif ($nilai >= 80) {
            echo "Grade: B";
        } elseif ($nilai >= 70) {
            echo "Grade: C";
        } else {
            echo "Grade: D";
        }
        ?>
    </div>

    <!-- 2. SWITCH CASE -->
    <h2>2. Switch-Case Statement</h2>
    <p>Switch-case digunakan untuk memilih salah satu dari banyak blok kode yang akan dieksekusi berdasarkan nilai variabel.</p>

    <div class="code-block">&lt;?php
    <span class="var">$hari</span> = <span class="str">"Senin"</span>;

    <span class="kw">switch</span> (<span class="var">$hari</span>) {
        <span class="kw">case</span> <span class="str">"Senin"</span>:
            <span class="kw">echo</span> <span class="str">"Hari kerja pertama"</span>;
            <span class="kw">break</span>;
        <span class="kw">case</span> <span class="str">"Sabtu"</span>:
            <span class="kw">echo</span> <span class="str">"Hari libur"</span>;
            <span class="kw">break</span>;
        <span class="kw">case</span> <span class="str">"Minggu"</span>:
            <span class="kw">echo</span> <span class="str">"Hari libur"</span>;
            <span class="kw">break</span>;
        <span class="kw">default</span>:
            <span class="kw">echo</span> <span class="str">"Hari kerja biasa"</span>;
    }
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi Server:</span>
        <?php
        $hari = "Senin";

        switch ($hari) {
            case "Senin":
                echo "Hari kerja pertama";
                break;
            case "Sabtu":
                echo "Hari libur";
                break;
            case "Minggu":
                echo "Hari libur";
                break;
            default:
                echo "Hari kerja biasa";
        }
        ?>
    </div>

    <!-- 3. TERNARY -->
    <h2>3. Ternary Operator</h2>
    <p>Ternary operator adalah cara singkat (shorthand) untuk if-else dalam satu baris.</p>

    <div class="code-block">&lt;?php
    <span class="var">$umur</span> = <span class="num">20</span>;
    
    <span class="comment">// Format: (Kondisi) ? Benar : Salah;</span>
    <span class="var">$status</span> = (<span class="var">$umur</span> >= <span class="num">18</span>) ? <span class="str">"Dewasa"</span> : <span class="str">"Anak-anak"</span>;
    
    <span class="kw">echo</span> <span class="str">"Status: "</span> . <span class="var">$status</span>;
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi Server:</span>
        <?php
        $umur = 20;
        $status = ($umur >= 18) ? "Dewasa" : "Anak-anak";
        echo "Status: " . $status;
        ?>
    </div>

    <!-- 4. LOGICAL OPERATORS -->
    <h2>4. Logical Operators</h2>
    <p>Operator logika digunakan untuk menggabungkan dua atau lebih kondisi.</p>

    <div class="code-block">&lt;?php
    <span class="var">$nilai</span> = <span class="num">85</span>;
    <span class="var">$absensi</span> = <span class="num">90</span>;

    <span class="comment">// AND (&&) - kedua kondisi harus true</span>
    <span class="kw">if</span> (<span class="var">$nilai</span> >= <span class="num">80</span> && <span class="var">$absensi</span> >= <span class="num">85</span>) {
        <span class="kw">echo</span> <span class="str">"Lulus dengan baik&lt;br&gt;"</span>;
    }

    <span class="comment">// OR (||) - salah satu kondisi harus true</span>
    <span class="kw">if</span> (<span class="var">$nilai</span> >= <span class="num">90</span> || <span class="var">$absensi</span> >= <span class="num">95</span>) {
        <span class="kw">echo</span> <span class="str">"Berhak mendapat penghargaan&lt;br&gt;"</span>;
    }

    <span class="comment">// NOT (!) - membalikkan kondisi</span>
    <span class="var">$tidak_lulus</span> = !(<span class="var">$nilai</span> >= <span class="num">70</span>);
    <span class="kw">echo</span> <span class="str">"Tidak lulus: "</span> . (<span class="var">$tidak_lulus</span> ? <span class="str">"Ya"</span> : <span class="str">"Tidak"</span>);
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi Server:</span>
        <?php
        $nilai = 85;
        $absensi = 90;

        // AND (&&)
        if ($nilai >= 80 && $absensi >= 85) {
            echo "Lulus dengan baik<br>";
        }

        // OR (||)
        if ($nilai >= 90 || $absensi >= 95) {
            echo "Berhak mendapat penghargaan<br>";
        }

        // NOT (!)
        $tidak_lulus = !($nilai >= 70);
        echo "Tidak lulus: " . ($tidak_lulus ? "Ya" : "Tidak") . "<br>";
        ?>
    </div>

    <!-- 5. NESTED IF -->
    <h2>5. Nested If Statements</h2>
    <p>If bersarang (Nested If) adalah struktur IF di dalam IF lainnya untuk kondisi yang bertingkat.</p>

    <div class="code-block">&lt;?php
    <span class="var">$poin</span> = <span class="num">2500</span>;
    <span class="var">$level</span> = <span class="num">3</span>;

    <span class="kw">if</span> (<span class="var">$poin</span> >= <span class="num">1000</span>) {
        <span class="kw">if</span> (<span class="var">$level</span> >= <span class="num">3</span>) {
            <span class="kw">if</span> (<span class="var">$poin</span> >= <span class="num">2000</span>) {
                <span class="kw">echo</span> <span class="str">"Master Player!"</span>;
            } <span class="kw">else</span> {
                <span class="kw">echo</span> <span class="str">"Advanced Player"</span>;
            }
        } <span class="kw">else</span> {
            <span class="kw">echo</span> <span class="str">"Intermediate Player"</span>;
        }
    } <span class="kw">else</span> {
        <span class="kw">echo</span> <span class="str">"Beginner Player"</span>;
    }
?&gt;</div>

    <div class="output">
        <span class="output-label">Hasil Eksekusi Server:</span>
        <?php
        $poin = 2500;
        $level = 3;

        if ($poin >= 1000) {
            if ($level >= 3) {
                if ($poin >= 2000) {
                    echo "Master Player!";
                } else {
                    echo "Advanced Player";
                }
            } else {
                echo "Intermediate Player";
            }
        } else {
            echo "Beginner Player";
        }
        ?>
    </div>

    <div class="highlight">
        <strong>Tips Penting:</strong>
        <ul style="margin-top: 10px; margin-bottom: 0;">
            <li>Gunakan <code>if-else</code> untuk kondisi sederhana atau pengecekan range nilai.</li>
            <li>Gunakan <code>switch-case</code> jika membandingkan satu variabel dengan banyak nilai spesifik (exact match).</li>
            <li>Jangan lupa <code>break;</code> pada switch case, atau kode akan terus berjalan ke case di bawahnya (fall-through).</li>
            <li>Pastikan tanda kurung <code>{ }</code> seimbang saat menggunakan Nested If agar tidak error.</li>
        </ul>
    </div>
</body>
</html>
