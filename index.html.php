<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JahitNadi - Nadi Usahawan Jahitan</title>
    <style>
        :root {
            --primary: #1e3d59;
            --primary-hover: #173046;
            --accent: #ff6e40;
            --accent-hover: #e55b2b;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-dark: #1e293b;
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

        header {
            background-color: var(--primary);
            color: #fff;
            padding: 25px 20px 15px 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5rem;
            letter-spacing: 1px;
            margin-bottom: 2px;
        }

        header p {
            font-size: 1.1rem;
            color: #cbd5e1;
            font-weight: 500;
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
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
        }

        .hero-banner {
            background: linear-gradient(135deg, var(--primary), #2c5282);
            color: white;
            padding: 40px 30px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .hero-banner h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .hero-banner p {
            max-width: 650px;
            margin: 0 auto 20px auto;
            font-size: 1.05rem;
            color: #e2e8f0;
        }

        /* BAHAGIAN STATISTIK DIGITAL REAL-TIME */
        .stats-section {
            background: #ffffff;
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            padding: 30px 20px;
            margin-bottom: 35px;
            text-align: center;
        }

        .stats-title {
            font-size: 1.2rem;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .stat-card {
            background: #f1f5f9;
            padding: 20px;
            border-radius: 10px;
            border-bottom: 4px solid var(--accent);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.95rem;
            color: #475569;
            font-weight: 600;
        }

        .info-section-title {
            text-align: center;
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 35px;
        }

        .info-card-static {
            background: #f8fafc;
            padding: 25px;
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            position: relative;
            cursor: default;
            user-select: none;
        }

        .info-badge {
            display: inline-block;
            background: #e2e8f0;
            color: #475569;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 4px;
            margin-bottom: 12px;
            text-transform: uppercase;
        }

        .info-card-static h3 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .info-card-static p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.5;
        }

        .auth-card {
            background: var(--card-bg);
            max-width: 440px;
            margin: 0 auto 35px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border: 1px solid var(--border-color);
        }

        .auth-card h3 {
            color: var(--primary);
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.35rem;
            border-bottom: 2px solid var(--accent);
            padding-bottom: 8px;
        }

        .auth-toggle {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .auth-toggle a {
            color: var(--accent);
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .auth-toggle a:hover {
            text-decoration: underline;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 25px;
        }

        @media (max-width: 900px) {
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

        .alert-box {
            background-color: #fef2f2;
            border-left: 5px solid #ef4444;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            color: #991b1b;
            font-weight: 500;
            display: none;
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

        .btn-edit {
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
            font-weight: bold;
            margin-bottom: 4px;
            width: 100%;
        }

        .btn-edit:hover {
            background-color: #2563eb;
        }

        .btn-delete {
            background-color: #ef4444;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
            font-weight: bold;
            width: 100%;
        }

        .btn-delete:hover {
            background-color: #dc2626;
        }

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

        .status-hampir {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fca5a5;
            animation: pulse 1.5s infinite;
        }

        .status-selesai {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.6; }
            100% { opacity: 1; }
        }

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
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: var(--primary);
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .catatan-tag {
            display: block;
            margin-top: 6px;
            padding: 6px 8px;
            background-color: #f1f5f9;
            border-left: 3px solid var(--accent);
            border-radius: 4px;
            font-size: 0.83rem;
            color: #475569;
            word-wrap: break-word;
        }

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

    <header>
        <h1>JahitNadi</h1>
        <p>Nadi Usahawan Jahitan</p>
    </header>

    <nav>
        <button id="btnHome" class="active" onclick="showPage('homePage', 'btnHome')">🏠 Halaman Utama</button>
        <button id="btnTempahan" style="display: none;" onclick="showPage('tempahanPage', 'btnTempahan')">📋 Pengurusan Tempahan</button>
        <button id="btnLogout" style="display: none; background-color: #ef4444;" onclick="handleLogout()">🚪 Log Keluar</button>
    </nav>

    <div class="container">

        <!-- HALAMAN 1: HOMEPAGE / AUTHENTICATION -->
        <div id="homePage" class="page-section active">
            
            <div class="hero-banner">
                <h2>Selamat Datang ke JahitNadi</h2>
                <p>Platform digital utama untuk menguruskan tempahan jahitan, rekod pelanggan, dan jadual siap dengan pantas, sistematik, dan efisien.</p>
            </div>

            <!-- BAHAGIAN STATISTIK DIGITAL SEBENAR (DINAMIK) -->
            <div class="stats-section">
                <div class="stats-title">📊 Statistik Penggunaan Sistem JahitNadi</div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number" id="counterUsahawan">0</div>
                        <div class="stat-label">Usahawan Jahitan Aktif</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" id="counterTempahan">0</div>
                        <div class="stat-label">Jumlah Tempahan Diuruskan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number" id="counterSelesai">0</div>
                        <div class="stat-label">Tempahan Telah Disiapkan</div>
                    </div>
                </div>
            </div>

            <!-- BORANG LOG MASUK / SIGN UP -->
            <div id="loginBox" class="auth-card">
                <h3>🔐 Log Masuk Penjahit</h3>
                <form id="loginForm" onsubmit="handleLogin(event)">
                    <div class="form-group">
                        <label for="loginUser">Nama Pengguna / ID:</label>
                        <input type="text" id="loginUser" placeholder="Masukkan ID penjahit" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPass">Kata Laluan:</label>
                        <input type="password" id="loginPass" placeholder="Masukkan kata laluan" required>
                    </div>
                    <button type="submit" class="btn-submit">Log Masuk</button>
                </form>
                <div class="auth-toggle">
                    Belum ada akaun? <a onclick="toggleAuth('signup')">Daftar Akaun Baharu (Sign Up)</a>
                </div>
            </div>

            <div id="signupBox" class="auth-card" style="display: none;">
                <h3>📝 Daftar Akaun Penjahit</h3>
                <form id="signupForm" onsubmit="handleSignUp(event)">
                    <div class="form-group">
                        <label for="signupUser">Nama Pengguna / ID Baharu:</label>
                        <input type="text" id="signupUser" placeholder="Cipta ID penjahit" required>
                    </div>
                    <div class="form-group">
                        <label for="signupPass">Kata Laluan:</label>
                        <input type="password" id="signupPass" placeholder="Cipta kata laluan" required>
                    </div>
                    <button type="submit" class="btn-submit" style="background-color: var(--accent);">Daftar Akaun</button>
                </form>
                <div class="auth-toggle">
                    Sudah ada akaun? <a onclick="toggleAuth('login')">Log Masuk</a>
                </div>
            </div>

            <!-- KOTAK INFO STATIC -->
            <h3 class="info-section-title">💡 Fungsi & Kelebihan JahitNadi</h3>
            <div class="grid-3">
                <div class="info-card-static">
                    <span class="info-badge">ℹ️ Fungsi Sistem</span>
                    <h3>📝 Pengurusan Rekod Pelanggan</h3>
                    <p>Menyimpan maklumat pelanggan, jenis pakaian, serta ukuran secara sistematik dan tersusun rapat tanpa risiko rekod fizikal hilang.</p>
                </div>

                <div class="info-card-static">
                    <span class="info-badge">ℹ️ Fungsi Sistem</span>
                    <h3>🔍 Carian Pantas & Tepat</h3>
                    <p>Memudahkan anda mencari rekod pelanggan sedia ada dalam masa beberapa saat dengan menaip nama atau nombor telefon.</p>
                </div>

                <div class="info-card-static">
                    <span class="info-badge">ℹ️ Fungsi Sistem</span>
                    <h3>🔔 Sistem Peringatan Automatik</h3>
                    <p>Memberikan notifikasi serta-merta untuk tempahan yang menghampiri tarikh siap supaya kerja-kerja jahitan berjalan mengikut jadual.</p>
                </div>
            </div>

        </div>

        <!-- HALAMAN 2: PENGURUSAN TEMPAHAN -->
        <div id="tempahanPage" class="page-section">
            
            <div id="alertBox" class="alert-box">
                ⚠️ <strong>Peringatan Tempahan Urgent:</strong> <span id="alertMessage"></span>
            </div>

            <div class="dashboard-grid">
                
                <div class="card">
                    <h2>Borang Tempahan Pelanggan</h2>
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
                            <label for="ukuran">Ukuran / Catatan Tambahan:</label>
                            <textarea id="ukuran" rows="3" placeholder="Contoh: Bahu 15, Dada 36, Labuh 40, Nak poket tepi..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tarikhSiap">Tarikh Jangka Siap:</label>
                            <input type="date" id="tarikhSiap" required>
                        </div>
                        <button type="submit" class="btn-submit">Simpan Rekod Pelanggan</button>
                    </form>
                </div>

                <div class="card">
                    <h2>Senarai Rekod Pelanggan</h2>
                    
                    <div class="search-box">
                        <input type="text" id="searchInput" onkeyup="searchCustomer()" placeholder="🔍 Cari nama atau no. tel pelanggan...">
                    </div>

                    <div style="overflow-x:auto;">
                        <table id="tempahanTable">
                            <thead>
                                <tr>
                                    <th>Maklumat Pelanggan & Catatan</th>
                                    <th>Pakaian</th>
                                    <th>Tarikh Siap</th>
                                    <th>Status</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody id="senaraiTempahan">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <footer>
        <p>&copy; 2026 JahitNadi - Nadi Usahawan Jahitan.</p>
    </footer>

    <script>
        let senaraiData = [];
        let isLoggedIn = false;

        // KEMASKINI STATISTIK SECARA DINAMIK DARI LOCALSTORAGE
        function kemaskiniStatistikSebenar() {
            // 1. Ambil bilangan pengguna berdaftar
            const users = JSON.parse(localStorage.getItem('jahitnadi_users')) || [];
            const jumlahUsahawan = users.length;

            // 2. Ambil bilangan tempahan
            const tempahan = JSON.parse(localStorage.getItem('jahitnadi_tempahan')) || [];
            const jumlahTempahan = tempahan.length;

            // 3. Ambil bilangan tempahan siap
            let jumlahSelesai = 0;
            tempahan.forEach(item => {
                const info = dapatkanStatusTarikh(item.tarikhSiap);
                if (info.status === 'selesai') {
                    jumlahSelesai++;
                }
            });

            // Kemaskini terus angka di skrin
            document.getElementById('counterUsahawan').innerText = jumlahUsahawan;
            document.getElementById('counterTempahan').innerText = jumlahTempahan;
            document.getElementById('counterSelesai').innerText = jumlahSelesai;
        }

        function toggleAuth(mode) {
            if (mode === 'signup') {
                document.getElementById('loginBox').style.display = 'none';
                document.getElementById('signupBox').style.display = 'block';
            } else {
                document.getElementById('signupBox').style.display = 'none';
                document.getElementById('loginBox').style.display = 'block';
            }
        }

        function handleSignUp(e) {
            e.preventDefault();
            const user = document.getElementById('signupUser').value.trim();
            const pass = document.getElementById('signupPass').value.trim();

            let users = JSON.parse(localStorage.getItem('jahitnadi_users')) || [];

            if (users.some(u => u.username === user)) {
                alert('ID Penjahit ini telah wujud. Sila gunakan ID lain.');
                return;
            }

            users.push({ username: user, password: pass });
            localStorage.setItem('jahitnadi_users', JSON.stringify(users));

            alert('Akaun Penjahit berjaya didaftarkan! Sila log masuk.');
            document.getElementById('signupForm').reset();
            toggleAuth('login');

            // TERUS KEMASKINI STATISTIK APABILA ADA PENDAFTARAN BAHARU
            kemaskiniStatistikSebenar();
        }

        function handleLogin(e) {
            e.preventDefault();
            const user = document.getElementById('loginUser').value.trim();
            const pass = document.getElementById('loginPass').value.trim();

            let users = JSON.parse(localStorage.getItem('jahitnadi_users')) || [];

            // Akaun lalai admin untuk pengujian awal
            if (users.length === 0) {
                users.push({ username: 'admin', password: '123' });
                localStorage.setItem('jahitnadi_users', JSON.stringify(users));
            }

            const validUser = users.find(u => u.username === user && u.password === pass);

            if (validUser) {
                isLoggedIn = true;
                localStorage.setItem('jahitnadi_session', user);
                alert(`Selamat Datang, ${user}!`);
                
                updateUIState();
                showPage('tempahanPage', 'btnTempahan');
            } else {
                alert('ID Penjahit atau kata laluan tidak sah!');
            }
        }

        function handleLogout() {
            isLoggedIn = false;
            localStorage.removeItem('jahitnadi_session');
            alert('Anda telah log keluar.');
            updateUIState();
            showPage('homePage', 'btnHome');
        }

        function updateUIState() {
            const session = localStorage.getItem('jahitnadi_session');
            if (session) {
                isLoggedIn = true;
                document.getElementById('btnTempahan').style.display = 'inline-block';
                document.getElementById('btnLogout').style.display = 'inline-block';
                document.getElementById('loginBox').style.display = 'none';
                document.getElementById('signupBox').style.display = 'none';
            } else {
                isLoggedIn = false;
                document.getElementById('btnTempahan').style.display = 'none';
                document.getElementById('btnLogout').style.display = 'none';
                document.getElementById('loginBox').style.display = 'block';
            }
        }

        function showPage(pageId, btnId) {
            if (pageId === 'tempahanPage' && !isLoggedIn) {
                alert('Akses Ditolak! Sila log masuk atau daftar akaun terlebih dahulu.');
                return;
            }

            document.querySelectorAll('.page-section').forEach(section => {
                section.classList.remove('active');
            });
            document.querySelectorAll('nav button').forEach(btn => {
                btn.classList.remove('active');
            });

            document.getElementById(pageId).classList.add('active');
            document.getElementById(btnId).classList.add('active');

            if (pageId === 'tempahanPage') {
                semakNotifikasiTempahan();
            } else if (pageId === 'homePage') {
                kemaskiniStatistikSebenar();
            }
        }

        window.onload = function() {
            let users = JSON.parse(localStorage.getItem('jahitnadi_users')) || [];
            if (users.length === 0) {
                users.push({ username: 'admin', password: '123' });
                localStorage.setItem('jahitnadi_users', JSON.stringify(users));
            }

            updateUIState();

            const storedData = localStorage.getItem('jahitnadi_tempahan');
            if (storedData) {
                senaraiData = JSON.parse(storedData);
            } else {
                senaraiData = [];
            }

            paparData();
            kemaskiniStatistikSebenar();
        };

        function simpanKeStorage() {
            localStorage.setItem('jahitnadi_tempahan', JSON.stringify(senaraiData));
            kemaskiniStatistikSebenar();
        }

        function dapatkanStatusTarikh(tarikhSiapStr) {
            const hariIni = new Date();
            hariIni.setHours(0, 0, 0, 0);

            const tarikhSiap = new Date(tarikhSiapStr);
            tarikhSiap.setHours(0, 0, 0, 0);

            const perbezaanMasa = tarikhSiap.getTime() - hariIni.getTime();
            const perbezaanHari = Math.ceil(perbezaanMasa / (1000 * 3600 * 24));

            if (perbezaanHari < 0) {
                return { status: 'selesai', html: '<span class="status-badge status-selesai">✓ Selesai</span>', hari: perbezaanHari };
            } else if (perbezaanHari <= 3) {
                return { status: 'hampir', html: `<span class="status-badge status-hampir">⚠️ Hampir Siap (${perbezaanHari} Hari Lagi)</span>`, hari: perbezaanHari };
            } else {
                return { status: 'proses', html: `<span class="status-badge status-proses">⏳ Dalam Proses (${perbezaanHari} Hari Lagi)</span>`, hari: perbezaanHari };
            }
        }

        function semakNotifikasiTempahan() {
            let tempahanUrgent = [];

            senaraiData.forEach(item => {
                const infoTarikh = dapatkanStatusTarikh(item.tarikhSiap);
                if (infoTarikh.status === 'hampir') {
                    tempahanUrgent.push(`${item.nama} (${item.pakaian}) - Siap dalam ${infoTarikh.hari} hari!`);
                }
            });

            const alertBox = document.getElementById('alertBox');
            const alertMessage = document.getElementById('alertMessage');

            if (tempahanUrgent.length > 0) {
                alertMessage.innerHTML = `Terdapat ${tempahanUrgent.length} tempahan yang perlu disiapkan dalam masa 3 hari lagi!`;
                alertBox.style.display = 'block';
            } else {
                alertBox.style.display = 'none';
            }
        }

        function paparData() {
            const tbody = document.getElementById('senaraiTempahan');
            tbody.innerHTML = '';

            senaraiData.forEach(item => {
                const infoTarikh = dapatkanStatusTarikh(item.tarikhSiap);
                const catatanTeks = item.ukuran ? item.ukuran : 'Tiada catatan khas';

                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td class="nama-col">
                        <strong>👤 ${item.nama}</strong><br>
                        <small style="color:#64748b;">📞 ${item.telefon}</small>
                        <span class="catatan-tag">📝 <strong>Catatan:</strong> ${catatanTeks}</span>
                    </td>
                    <td>${item.pakaian}</td>
                    <td>${item.tarikhSiap}</td>
                    <td>${infoTarikh.html}</td>
                    <td style="min-width: 100px;">
                        <button class="btn-edit" onclick="editCatatan(${item.id})">✏️ Edit Catatan</button>
                        <button class="btn-delete" onclick="padamTempahan(${item.id})">🗑️ Padam</button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        function editCatatan(id) {
            const index = senaraiData.findIndex(item => item.id === id);
            if (index !== -1) {
                const catatanLama = senaraiData[index].ukuran || '';
                const catatanBaru = prompt("Kemaskini Ukuran / Catatan Pelanggan:", catatanLama);

                if (catatanBaru !== null) {
                    senaraiData[index].ukuran = catatanBaru;
                    simpanKeStorage();
                    paparData();
                    alert("Catatan berjaya dikemaskini!");
                }
            }
        }

        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const tempahanBaru = {
                id: Date.now(),
                nama: document.getElementById('nama').value,
                telefon: document.getElementById('telefon').value,
                pakaian: document.getElementById('pakaian').value,
                ukuran: document.getElementById('ukuran').value,
                tarikhSiap: document.getElementById('tarikhSiap').value
            };

            senaraiData.push(tempahanBaru);
            simpanKeStorage();
            paparData();
            semakNotifikasiTempahan();

            document.getElementById('orderForm').reset();
            alert('Maklumat pelanggan & tempahan berjaya disimpan!');
        });

        function searchCustomer() {
            let input = document.getElementById("searchInput");
            let filter = input.value.toLowerCase();
            let table = document.getElementById("tempahanTable");
            let tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let namaCol = tr[i].getElementsByClassName("nama-col")[0];
                
                if (namaCol) {
                    let text = namaCol.textContent || namaCol.innerText;
                    if (text.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function padamTempahan(id) {
            if (confirm("Adakah anda pasti mahu memadam rekod pelanggan ini?")) {
                senaraiData = senaraiData.filter(item => item.id !== id);
                simpanKeStorage();
                paparData();
                semakNotifikasiTempahan();
            }
        }
    </script>
</body>
</html>