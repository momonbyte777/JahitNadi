<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-JAHIT - Sistem Pengurusan Tempahan Jahitan Jasin</title>
    <style>
        :root {
            --primary: #1e3d59;       /* Biru Gelap / Navy */
            --primary-hover: #173046;
            --accent: #ff6e40;        /* Orange Accent */
            --accent-hover: #e55b2b;
            --bg-color: #f5f7fa;      /* Kelabu Soft Modern */
            --card-bg: #ffffff;
            --text-dark: #2b2d42;
            --border-color: #e2e8f0;
        }

        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* HEADER & NAVIGATION */
        header {
            background-color: var(--primary);
            color: #fff;
            padding: 25px 20px 15px 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.2rem;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        header p {
            font-size: 0.95rem;
            color: #cbd5e1;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #152c41;
            padding: 10px;
            gap: 10px;
        }

        nav button {
            background: none;
            border: none;
            color: #cbd5e1;
            padding: 10px 22px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        nav button.active, nav button:hover {
            background-color: var(--accent);
            color: #fff;
        }

        .container {
            max-width: 1150px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* SEKSYEN HALAMAN */
        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
        }

        /* HOMEPAGE DESIGN */
        .hero-banner {
            background: linear-gradient(135deg, var(--primary), #2c5282);
            color: white;
            padding: 45px 30px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .hero-banner h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .hero-banner p {
            max-width: 650px;
            margin: 0 auto 20px auto;
            font-size: 1rem;
            color: #e2e8f0;
        }

        .btn-cta {
            background-color: var(--accent);
            color: white;
            padding: 12px 28px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-cta:hover {
            background-color: var(--accent-hover);
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .info-card {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 5px rgba(0,0,0,0.03);
            text-align: center;
        }

        .info-card h3 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .info-card p {
            color: #64748b;
            font-size: 0.92rem;
        }

        /* DASHBOARD TEMPAHAN DESIGN */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 25px;
        }

        @media (max-width: 850px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        .card {
            background: var(--card-bg);
            padding: 22px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            border: 1px solid var(--border-color);
        }

        .card h2 {
            margin-bottom: 18px;
            color: var(--primary);
            border-bottom: 2px solid var(--accent);
            padding-bottom: 6px;
            font-size: 1.25rem;
        }

        .search-box {
            margin-bottom: 15px;
        }

        .search-box input {
            width: 100%;
            padding: 12px;
            border: 2px solid #cbd5e1;
            border-radius: 6px;
            font-size: 0.95rem;
            outline: none;
        }

        .search-box input:focus {
            border-color: var(--primary);
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 0.88rem;
            color: var(--text-dark);
        }

        .form-group input, 
        .form-group select, 
        .form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 0.9rem;
            outline: none;
        }

        .form-group input:focus, 
        .form-group select:focus, 
        .form-group textarea:focus {
            border-color: var(--primary);
        }

        .btn-submit {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
            font-weight: bold;
            transition: background 0.2s;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
        }

        .btn-delete {
            background-color: #ef4444;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .btn-delete:hover {
            background-color: #dc2626;
        }

        /* BADGES STATUS PROSES */
        .status-badge {
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.78rem;
            font-weight: bold;
            display: inline-block;
            text-align: center;
        }

        .status-proses {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }

        .status-selesai {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* TABLE DESIGN */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 0.88rem;
        }

        table, th, td {
            border: 1px solid var(--border-color);
        }

        th, td {
            padding: 11px;
            text-align: left;
        }

        th {
            background-color: var(--primary);
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f8fafc;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            background-color: var(--primary);
            color: white;
            font-size: 0.85rem;
        }

        footer p {
            color: #cbd5e1;
        }
    </style>
</head>
<body>

    <!-- HEADER SYSTEM -->
    <header>
        <h1>E-JAHIT</h1>
        <p>Sistem Pengurusan Tempahan Jahitan Usahawan Daerah Jasin, Melaka</p>
    </header>

    <!-- NAVIGATION MENU -->
    <nav>
        <button id="btnHome" class="active" onclick="showPage('homePage', 'btnHome')">🏠 Halaman Utama</button>
        <button id="btnTempahan" onclick="showPage('tempahanPage', 'btnTempahan')">📋 Pengurusan Tempahan</button>
    </nav>

    <div class="container">

        <!-- ================= HALAMAN UTAMA (HOMEPAGE) ================= -->
        <div id="homePage" class="page-section active">
            
            <div class="hero-banner">
                <h2>Selamat Datang ke Sistem E-JAHIT</h2>
                <p>Platform pengurusan tempahan jahitan digital yang direka khas untuk memudahkan tukang jahit mengurus pelanggan, rekod pakaian, dan tarikh siap dengan lebih teratur.</p>
                <button class="btn-cta" onclick="showPage('tempahanPage', 'btnTempahan')">Urus Tempahan Sekarang</button>
            </div>

            <!-- CARA GUNA / FUNGSI UTAMA -->
            <div class="grid-3">
                <div class="info-card">
                    <h3>📝 Rekod Tempahan</h3>
                    <p>Simpan maklumat pelanggan, jenis pakaian, dan ukuran dengan pantas tanpa perlu risau rekod hilang.</p>
                </div>

                <div class="info-card">
                    <h3>🔍 Carian Pantas</h3>
                    <p>Cari rekod pelanggan sedia ada dalam masa beberapa saat sahaja dengan hanya menaip nama atau no. telefon.</p>
                </div>

                <div class="info-card">
                    <h3>⏳ Status Tempahan Automatik</h3>
                    <p>Sistem akan mengemaskini status tempahan daripada 'Dalam Proses' kepada 'Selesai' secara automatik mengikut tarikh siap.</p>
                </div>
            </div>

        </div>

        <!-- ================= HALAMAN PENGURUSAN TEMPAHAN ================= -->
        <div id="tempahanPage" class="page-section">
            <div class="dashboard-grid">
                
                <!-- BORANG TAMBAH TEMPAHAN -->
                <div class="card">
                    <h2>Borang Tempahan Baru</h2>
                    <form id="orderForm">
                        <div class="form-group">
                            <label for="nama">Nama Pelanggan:</label>
                            <input type="text" id="nama" required placeholder="Contoh: Siti Aishah">
                        </div>
                        <div class="form-group">
                            <label for="telefon">No. Telefon:</label>
                            <input type="tel" id="telefon" required placeholder="Contoh: 0123456789">
                        </div>
                        <div class="form-group">
                            <label for="pakaian">Jenis Pakaian / Servis:</label>
                            <select id="pakaian" required>
                                <option value="">-- Pilih Jenis --</option>
                                <option value="Baju Kurung Pahang">Baju Kurung Pahang</option>
                                <option value="Baju Kurung Moden">Baju Kurung Moden</option>
                                <option value="Baju Melayu Teluk Belanga">Baju Melayu Teluk Belanga</option>
                                <option value="Baju Melayu Cekak Musang">Baju Melayu Cekak Musang</option>
                                <option value="Pengubahsuaian (Alteration)">Pengubahsuaian (Alteration)</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran / Nota Tambahan:</label>
                            <textarea id="ukuran" rows="3" placeholder="Bahu: 15, Dada: 36, Labuh: 40..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tarikhSiap">Tarikh Jangka Siap:</label>
                            <input type="date" id="tarikhSiap" required>
                        </div>
                        <button type="submit" class="btn-submit">Simpan Tempahan</button>
                    </form>
                </div>

                <!-- CARIAN & SENARAI TEMPAHAN -->
                <div class="card">
                    <h2>Carian & Senarai Tempahan</h2>
                    
                    <div class="search-box">
                        <input type="text" id="searchInput" onkeyup="searchCustomer()" placeholder="🔍 Taip nama atau no. tel untuk cari tempahan...">
                    </div>

                    <div style="overflow-x:auto;">
                        <table id="tempahanTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No. Telefon</th>
                                    <th>Pakaian</th>
                                    <th>Tarikh Siap</th>
                                    <th>Status</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody id="senaraiTempahan">
                                <!-- Data daripada LocalStorage akan dipaparkan di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2026 E-JAHIT - Sistem Pengurusan Tempahan Usahawan Jahitan Jasin, Melaka.</p>
    </footer>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        let senaraiData = [];

        // FUNGSI NAVIGASI TAB (HOME <-> TEMPAHAN)
        function showPage(pageId, btnId) {
            document.querySelectorAll('.page-section').forEach(section => {
                section.classList.remove('active');
            });
            document.querySelectorAll('nav button').forEach(btn => {
                btn.classList.remove('active');
            });

            document.getElementById(pageId).classList.add('active');
            document.getElementById(btnId).classList.add('active');
        }

        // MUAT TURUN DATA DARI LOCALSTORAGE
        window.onload = function() {
            const storedData = localStorage.getItem('ejahit_tempahan');
            if (storedData) {
                senaraiData = JSON.parse(storedData);
            } else {
                senaraiData = [
                    { id: Date.now(), nama: "Ahmad Razi", telefon: "0123456789", pakaian: "Baju Melayu Cekak Musang", tarikhSiap: "2026-09-01" },
                    { id: Date.now() + 1, nama: "Noraini Bemban", telefon: "0198765432", pakaian: "Baju Kurung Moden", tarikhSiap: "2026-10-15" }
                ];
                simpanKeStorage();
            }
            paparData();
        };

        function simpanKeStorage() {
            localStorage.setItem('ejahit_tempahan', JSON.stringify(senaraiData));
        }

        // FUNGSI MENYEMAK SAMA ADA TARIKH SIAP SUDAH DILAMPAUI
        function semakStatusProses(tarikhSiapStr) {
            const hariIni = new Date();
            hariIni.setHours(0, 0, 0, 0); // Tetapkan masa ke permulaan hari

            const tarikhSiap = new Date(tarikhSiapStr);
            tarikhSiap.setHours(0, 0, 0, 0);

            if (hariIni > tarikhSiap) {
                return '<span class="status-badge status-selesai">✓ Selesai</span>';
            } else {
                return '<span class="status-badge status-proses">⏳ Dalam Proses</span>';
            }
        }

        function paparData() {
            const tbody = document.getElementById('senaraiTempahan');
            tbody.innerHTML = '';

            senaraiData.forEach(item => {
                const statusHTML = semakStatusProses(item.tarikhSiap);

                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td class="nama-col"><strong>${item.nama}</strong></td>
                    <td class="tel-col">${item.telefon}</td>
                    <td>${item.pakaian}</td>
                    <td>${item.tarikhSiap}</td>
                    <td>${statusHTML}</td>
                    <td><button class="btn-delete" onclick="padamTempahan(${item.id})">Padam</button></td>
                `;
                tbody.appendChild(tr);
            });
        }

        // TAMBAH TEMPAHAN BARU
        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const tempahanBaru = {
                id: Date.now(),
                nama: document.getElementById('nama').value,
                telefon: document.getElementById('telefon').value,
                pakaian: document.getElementById('pakaian').value,
                tarikhSiap: document.getElementById('tarikhSiap').value
            };

            senaraiData.push(tempahanBaru);
            simpanKeStorage();
            paparData();

            document.getElementById('orderForm').reset();
            alert('Tempahan berjaya disimpan!');
        });

        // CARIAN (SEARCH ENGINE)
        function searchCustomer() {
            let input = document.getElementById("searchInput");
            let filter = input.value.toLowerCase();
            let table = document.getElementById("tempahanTable");
            let tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let namaCol = tr[i].getElementsByClassName("nama-col")[0];
                let telCol = tr[i].getElementsByClassName("tel-col")[0];
                
                if (namaCol || telCol) {
                    let namaText = namaCol.textContent || namaCol.innerText;
                    let telText = telCol.textContent || telCol.innerText;

                    if (namaText.toLowerCase().indexOf(filter) > -1 || telText.indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        // PADAM TEMPAHAN
        function padamTempahan(id) {
            if (confirm("Adakah anda pasti mahu memadam tempahan ini?")) {
                senaraiData = senaraiData.filter(item => item.id !== id);
                simpanKeStorage();
                paparData();
            }
        }
    </script>
</body>
</html>