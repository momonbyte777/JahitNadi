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

        /* BAHAGIAN STATISTIK UTAMA PLATFORM */
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
            justify-content: center;
        }

        .stat-card {
            background: #f1f5f9;
            padding: 20px;
            border-radius: 10px;
            border-bottom: 4px solid var(--accent);
        }

        .stat-number {
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.95rem;
            color: #475569;
            font-weight: 600;
        }

        /* DASHBOARD REKOD PENGGUNA */
        .user-summary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .summary-card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.03);
        }

        .summary-card h4 {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .summary-card .num {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary);
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

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
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

        .form-group {
            margin-bottom: 14px;
        }

        .form-row {
            display: flex;
            gap: 10px;
        }

        .form-row .form-group {
            flex: 1;
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

        /* LENCANA STATUS PELANGGAN */
        .tag-badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            margin-top: 4px;
            margin-right: 3px;
        }

        .tag-proses { background-color: #fef3c7; color: #b45309; }
        .tag-selesai { background-color: #d1fae5; color: #047857; }
        .tag-lunas { background-color: #e0e7ff; color: #3730a3; }
        .tag-belum-lunas { background-color: #ffe4e6; color: #be123c; }

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

        <!-- HALAMAN 1: HOMEPAGE -->
        <div id="homePage" class="page-section active">
            
            <div class="hero-banner">
                <h2>Selamat Datang ke JahitNadi</h2>
                <p>Platform digital utama untuk menguruskan tempahan jahitan, rekod pelanggan, dan jadual siap dengan pantas, sistematik, dan efisien.</p>
            </div>

            <!-- STATISTIK UTAMA HOMEPAGE (KOTAK KEPUASAN DIBUANG & NUMBOR DIKEMASKINI) -->
            <div class="stats-section">
                <div class="stats-title">📊 Statistik JahitNadi</div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">41</div>
                        <div class="stat-label">Usahawan Jahitan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">587</div>
                        <div class="stat-label">Tempahan Diuruskan</div>
                    </div>
                </div>
            </div>

            <!-- BORANG LOG MASUK / DAFTAR -->
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

        <!-- HALAMAN 2: PENGURUSAN TEMPAHAN (MAIN PAGE) -->
        <div id="tempahanPage" class="page-section">
            
            <div id="alertBox" class="alert-box">
                ⚠️ <strong>Peringatan Tempahan Urgent:</strong> <span id="alertMessage"></span>
            </div>

            <!-- RINGKASAN REKOD TEMPAHAN STATISTIK (DENGAN TOTAL RM UNTUK BAYARAN) -->
            <div class="user-summary-grid">
                <div class="summary-card">
                    <h4>Tempahan Aktif</h4>
                    <div class="num" id="sumTotal">0</div>
                </div>
                <div class="summary-card">
                    <h4>Sedang Diproses</h4>
                    <div class="num" id="sumProses" style="color: #b45309;">0</div>
                </div>
                <div class="summary-card">
                    <h4>Telah Siap</h4>
                    <div class="num" id="sumSiap" style="color: #047857;">0</div>
                </div>
                <div class="summary-card">
                    <h4>Bayaran Belum Lunas</h4>
                    <div class="num" id="sumBelumBayar" style="color: #be123c;">RM 0.00</div>
                </div>
                <div class="summary-card">
                    <h4>Bayaran Lunas</h4>
                    <div class="num" id="sumLunas" style="color: #3730a3;">RM 0.00</div>
                </div>
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

                        <div class="form-row">
                            <div class="form-group">
                                <label for="harga">Jumlah Harga (RM):</label>
                                <input type="number" id="harga" min="0" step="0.01" placeholder="0.00" required>
                            </div>
                            <div class="form-group">
                                <label for="bayaran">Bayaran Dibuat (RM):</label>
                                <input type="number" id="bayaran" min="0" step="0.01" placeholder="0.00" value="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="statusKerja">Status Jahitan:</label>
                            <select id="statusKerja" required>
                                <option value="proses">Sedang Diproses</option>
                                <option value="siap">Telah Siap</option>
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
                                    <th>Maklumat Pelanggan, Status & Bayaran</th>
                                    <th>Pakaian</th>
                                    <th>Tarikh Siap</th>
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
    // 5 CONTOH DATA PELANGGAN (MOCK DATA HANYA UNTUK AKAUN BAHARU/PERTAMA KALI)
    const MOCK_DATA = [
        { id: 101, nama: "Siti Nurhaliza", telefon: "0123456789", pakaian: "Baju Kurung Moden", harga: 120.00, bayaran: 50.00, statusKerja: "proses", ukuran: "Bahu 14.5, Dada 36, Labuh 42. Tangan ada zip hidden.", tarikhSiap: "2026-10-05" },
        { id: 102, nama: "Ahmad Khairul", telefon: "0198765432", pakaian: "Baju Melayu Cekak Musang", harga: 150.00, bayaran: 150.00, statusKerja: "siap", ukuran: "Bahu 17, Dada 40, Pinggang 32. Butang 5.", tarikhSiap: "2026-09-28" },
        { id: 103, nama: "Farah Amina", telefon: "0171122334", pakaian: "Baju Kurung Pahang", harga: 110.00, bayaran: 110.00, statusKerja: "siap", ukuran: "Bahu 15, Pinggul 38, Labuh kain 39.", tarikhSiap: "2026-09-25" },
        { id: 104, nama: "Mohd Razali", telefon: "0134455667", pakaian: "Pengubahsuaian (Alteration)", harga: 35.00, bayaran: 0.00, statusKerja: "proses", ukuran: "Potong kaki seluar jean 2 inci.", tarikhSiap: "2026-09-29" },
        { id: 105, nama: "Norain Suraya", telefon: "0119988776", pakaian: "Lain-lain", harga: 200.00, bayaran: 100.00, statusKerja: "proses", ukuran: "Dress labuh kembang, lace di bahagian lengan.", tarikhSiap: "2026-10-10" }
    ];

    let senaraiData = [];
    let isLoggedIn = false;
    let currentUser = null;

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

        // Cipta ruang data khas untuk akaun baharu ini (kosong pada mulanya)
        localStorage.setItem(`jahitnadi_tempahan_${user}`, JSON.stringify([]));

        alert('Akaun Penjahit berjaya didaftarkan! Sila log masuk.');
        document.getElementById('signupForm').reset();
        toggleAuth('login');
    }

    function handleLogin(e) {
        e.preventDefault();
        const user = document.getElementById('loginUser').value.trim();
        const pass = document.getElementById('loginPass').value.trim();

        let users = JSON.parse(localStorage.getItem('jahitnadi_users')) || [];

        if (users.length === 0) {
            users.push({ username: 'admin', password: '123' });
            localStorage.setItem('jahitnadi_users', JSON.stringify(users));
        }

        const validUser = users.find(u => u.username === user && u.password === pass);

        if (validUser) {
            isLoggedIn = true;
            currentUser = user;
            localStorage.setItem('jahitnadi_session', user);
            alert(`Selamat Datang, ${user}!`);
            
            muatDataAkaun();
            updateUIState();
            showPage('tempahanPage', 'btnTempahan');
        } else {
            alert('ID Penjahit atau kata laluan tidak sah!');
        }
    }

    function handleLogout() {
        isLoggedIn = false;
        currentUser = null;
        senaraiData = [];
        localStorage.removeItem('jahitnadi_session');
        alert('Anda telah log keluar.');
        updateUIState();
        showPage('homePage', 'btnHome');
    }

    function updateUIState() {
        const session = localStorage.getItem('jahitnadi_session');
        if (session) {
            isLoggedIn = true;
            currentUser = session;
            document.getElementById('btnTempahan').style.display = 'inline-block';
            document.getElementById('btnLogout').style.display = 'inline-block';
            document.getElementById('loginBox').style.display = 'none';
            document.getElementById('signupBox').style.display = 'none';
        } else {
            isLoggedIn = false;
            currentUser = null;
            document.getElementById('btnTempahan').style.display = 'none';
            document.getElementById('btnLogout').style.display = 'none';
            document.getElementById('loginBox').style.display = 'block';
        }
    }

    // FUNGSI MEMUATKAN DATA KHAS MENGIKUT AKAUN
    function muatDataAkaun() {
        if (!currentUser) return;

        const userKey = `jahitnadi_tempahan_${currentUser}`;
        const storedData = localStorage.getItem(userKey);

        if (storedData !== null) {
            // Jika akaun pernah disimpan (walaupun senarai kosong [])
            senaraiData = JSON.parse(storedData);
        } else {
            // Jika akaun pertama kali dibuka (contoh: akaun 'admin' lalai)
            senaraiData = MOCK_DATA;
            localStorage.setItem(userKey, JSON.stringify(senaraiData));
        }

        paparData();
        kemaskiniRingkasanStat();
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
            kemaskiniRingkasanStat();
        }
    }

    window.onload = function() {
        let users = JSON.parse(localStorage.getItem('jahitnadi_users')) || [];
        if (users.length === 0) {
            users.push({ username: 'admin', password: '123' });
            localStorage.setItem('jahitnadi_users', JSON.stringify(users));
        }

        updateUIState();

        if (currentUser) {
            muatDataAkaun();
        }
    };

    function simpanKeStorage() {
        if (currentUser) {
            const userKey = `jahitnadi_tempahan_${currentUser}`;
            localStorage.setItem(userKey, JSON.stringify(senaraiData));
        }
        kemaskiniRingkasanStat();
    }

    function kemaskiniRingkasanStat() {
        let total = senaraiData.length;
        let proses = 0;
        let siap = 0;
        let totalBelumLunasRM = 0;
        let totalLunasRM = 0;

        senaraiData.forEach(item => {
            if (item.statusKerja === 'siap') {
                siap++;
            } else {
                proses++;
            }

            const harga = parseFloat(item.harga) || 0;
            const bayaran = parseFloat(item.bayaran) || 0;
            const baki = harga - bayaran;

            totalLunasRM += bayaran;
            if (baki > 0) {
                totalBelumLunasRM += baki;
            }
        });

        document.getElementById('sumTotal').innerText = total;
        document.getElementById('sumProses').innerText = proses;
        document.getElementById('sumSiap').innerText = siap;
        document.getElementById('sumBelumBayar').innerText = `RM ${totalBelumLunasRM.toFixed(2)}`;
        document.getElementById('sumLunas').innerText = `RM ${totalLunasRM.toFixed(2)}`;
    }

    function paparData() {
        const tbody = document.getElementById('senaraiTempahan');
        tbody.innerHTML = '';

        if (senaraiData.length === 0) {
            tbody.innerHTML = `<tr><td colspan="4" style="text-align:center; color:#94a3b8; padding: 20px;">Tiada rekod pelanggan. Sila tambah rekod baharu.</td></tr>`;
            return;
        }

        senaraiData.forEach(item => {
            const catatanTeks = item.ukuran ? item.ukuran : 'Tiada catatan khas';
            const harga = parseFloat(item.harga) || 0;
            const bayaran = parseFloat(item.bayaran) || 0;
            const baki = harga - bayaran;

            let tagKerjaHtml = item.statusKerja === 'siap' 
                ? `<span class="tag-badge tag-selesai">✓ Telah Siap</span>`
                : `<span class="tag-badge tag-proses">⏳ Sedang Diproses</span>`;

            let tagBayaranHtml = baki <= 0
                ? `<span class="tag-badge tag-lunas">✅ Lunas (RM ${harga.toFixed(2)})</span>`
                : `<span class="tag-badge tag-belum-lunas">⚠️ Belum Lunas (Baki: RM ${baki.toFixed(2)})</span>`;

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td class="nama-col">
                    <strong>👤 ${item.nama}</strong><br>
                    <small style="color:#64748b;">📞 ${item.telefon}</small><br>
                    ${tagKerjaHtml} ${tagBayaranHtml}
                    <span class="catatan-tag">📝 <strong>Catatan:</strong> ${catatanTeks}</span>
                </td>
                <td>${item.pakaian}</td>
                <td>${item.tarikhSiap}</td>
                <td style="min-width: 100px;">
                    <button class="btn-edit" onclick="editCatatan(${item.id})">✏️ Edit Rekod</button>
                    <button class="btn-delete" onclick="padamTempahan(${item.id})">🗑️ Padam</button>
                </td>
            `;
            tbody.appendChild(tr);
        });
    }

    function editCatatan(id) {
        const index = senaraiData.findIndex(item => item.id === id);
        if (index !== -1) {
            const item = senaraiData[index];
            
            const statusBaru = confirm("Klik OK jika tempahan telah SIAP, atau CANCEL untuk kekal SEDANG DIPROSES") ? "siap" : "proses";
            const bayaranBaru = prompt("Masukkan jumlah bayaran terkumpul daripada pelanggan (RM):", item.bayaran);

            if (bayaranBaru !== null) {
                senaraiData[index].statusKerja = statusBaru;
                senaraiData[index].bayaran = parseFloat(bayaranBaru) || 0;
                simpanKeStorage();
                paparData();
                alert("Rekod pelanggan berjaya dikemaskini!");
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
            harga: parseFloat(document.getElementById('harga').value) || 0,
            bayaran: parseFloat(document.getElementById('bayaran').value) || 0,
            statusKerja: document.getElementById('statusKerja').value,
            ukuran: document.getElementById('ukuran').value,
            tarikhSiap: document.getElementById('tarikhSiap').value
        };

        senaraiData.push(tempahanBaru);
        simpanKeStorage();
        paparData();

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
        }
    }

    function semakNotifikasiTempahan() {
        const alertBox = document.getElementById('alertBox');
        const alertMessage = document.getElementById('alertMessage');
        let urgent = 0;

        const hariIni = new Date();
        hariIni.setHours(0,0,0,0);

        senaraiData.forEach(item => {
            if (item.statusKerja !== 'siap') {
                const tSiap = new Date(item.tarikhSiap);
                tSiap.setHours(0,0,0,0);
                const diffDays = Math.ceil((tSiap - hariIni) / (1000 * 3600 * 24));
                if (diffDays <= 3 && diffDays >= 0) {
                    urgent++;
                }
            }
        });

        if (urgent > 0) {
            alertMessage.innerHTML = `Terdapat ${urgent} tempahan belum siap yang menghampiri tarikh jangkaan (3 hari lagi)!`;
            alertBox.style.display = 'block';
        } else {
            alertBox.style.display = 'none';
        }
    }
</script>
</body>
</html>