<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JahitNadi - Nadi Usahawan Jahitan</title>
    <style>
        :root {
            --primary: #1e3d59;
            --accent: #ff6e40;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-dark: #1e293b;
            --border-color: #e2e8f0;
        }

        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; }
        body { background-color: var(--bg-color); color: var(--text-dark); line-height: 1.6; }
        header { background-color: var(--primary); color: #fff; padding: 25px 20px 15px 20px; text-align: center; }
        header h1 { font-size: 2.5rem; }
        header p { color: #cbd5e1; }
        nav { display: flex; justify-content: center; background-color: #152c41; padding: 10px; gap: 10px; }
        nav button { background: none; border: none; color: #cbd5e1; padding: 10px 22px; font-size: 1rem; font-weight: 600; cursor: pointer; border-radius: 6px; }
        nav button.active, nav button:hover { background-color: var(--accent); color: #fff; }
        .container { max-width: 1200px; margin: 30px auto; padding: 0 20px; }
        .page-section { display: none; }
        .page-section.active { display: block; }
        .hero-banner { background: linear-gradient(135deg, var(--primary), #2c5282); color: white; padding: 40px 30px; border-radius: 12px; text-align: center; margin-bottom: 30px; }
        .stats-section { background: #ffffff; border: 2px dashed #cbd5e1; border-radius: 12px; padding: 30px 20px; margin-bottom: 35px; text-align: center; }
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; }
        .stat-card { background: #f1f5f9; padding: 20px; border-radius: 10px; border-bottom: 4px solid var(--accent); }
        .stat-number { font-size: 2.3rem; font-weight: 800; color: var(--accent); }
        .user-summary-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; margin-bottom: 25px; }
        .summary-card { background: white; padding: 15px; border-radius: 8px; border: 1px solid var(--border-color); text-align: center; }
        .summary-card .num { font-size: 1.6rem; font-weight: 700; color: var(--primary); }
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 35px; }
        .info-card-static { background: #f8fafc; padding: 25px; border-radius: 10px; border: 1px solid #cbd5e1; }
        .auth-card { background: var(--card-bg); max-width: 440px; margin: 0 auto 35px auto; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid var(--border-color); }
        .auth-card h3 { color: var(--primary); text-align: center; margin-bottom: 20px; border-bottom: 2px solid var(--accent); padding-bottom: 8px; }
        .auth-toggle { text-align: center; margin-top: 15px; font-size: 0.9rem; }
        .auth-toggle a { color: var(--accent); cursor: pointer; font-weight: bold; }
        .demo-hint { background: #e0f2fe; border: 1px solid #bae6fd; color: #0369a1; padding: 10px; border-radius: 6px; font-size: 0.85rem; margin-bottom: 15px; text-align: center; }
        .dashboard-grid { display: grid; grid-template-columns: 1fr 1.5fr; gap: 25px; }
        @media (max-width: 900px) { .dashboard-grid { grid-template-columns: 1fr; } }
        .card { background: var(--card-bg); padding: 22px; border-radius: 8px; border: 1px solid var(--border-color); }
        .card h2 { margin-bottom: 18px; color: var(--primary); border-bottom: 2px solid var(--accent); padding-bottom: 6px; }
        .alert-box { background-color: #fef2f2; border-left: 5px solid #ef4444; padding: 12px 15px; margin-bottom: 20px; border-radius: 6px; color: #991b1b; display: none; }
        .search-box { margin-bottom: 15px; display: flex; gap: 10px; }
        .search-box input { flex: 1; padding: 10px 12px; border: 2px solid #cbd5e1; border-radius: 6px; }
        .btn-reset-demo { background-color: #0284c7; color: white; border: none; padding: 8px 12px; border-radius: 6px; cursor: pointer; font-size: 0.85rem; font-weight: bold; }
        .form-group { margin-bottom: 14px; }
        .form-row { display: flex; gap: 10px; }
        .form-row .form-group { flex: 1; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.88rem; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; }
        .btn-submit { background-color: var(--primary); color: white; border: none; padding: 12px 20px; border-radius: 6px; cursor: pointer; width: 100%; font-size: 1rem; font-weight: bold; }
        .btn-submit:disabled { background-color: #94a3b8; cursor: not-allowed; }
        .btn-edit { background-color: #3b82f6; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer; font-size: 0.8rem; margin-bottom: 4px; width: 100%; }
        .btn-delete { background-color: #ef4444; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer; font-size: 0.8rem; width: 100%; }
        .tag-badge { display: inline-block; padding: 3px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 700; margin-top: 4px; }
        .tag-proses { background-color: #fef3c7; color: #b45309; }
        .tag-selesai { background-color: #d1fae5; color: #047857; }
        .tag-lunas { background-color: #e0e7ff; color: #3730a3; }
        .tag-belum-lunas { background-color: #ffe4e6; color: #be123c; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; font-size: 0.88rem; }
        table, th, td { border: 1px solid var(--border-color); }
        th, td { padding: 10px; text-align: left; vertical-align: top; }
        th { background-color: var(--primary); color: white; }
        tr:nth-child(even) { background-color: #f8fafc; }
        .catatan-tag { display: block; margin-top: 6px; padding: 6px 8px; background-color: #f1f5f9; border-left: 3px solid var(--accent); border-radius: 4px; font-size: 0.83rem; color: #475569; }
        footer { text-align: center; padding: 20px; margin-top: 40px; background-color: var(--primary); color: white; font-size: 0.85rem; }
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
                <p>Platform digital utama untuk menguruskan tempahan jahitan, rekod pelanggan, dan jadual siap secara pantas dan efisien.</p>
            </div>

            <div class="stats-section">
                <div style="font-size: 1.2rem; color: var(--primary); font-weight: 700; margin-bottom: 20px;">📊 Statistik JahitNadi</div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">41</div>
                        <div>Usahawan Jahitan</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">587</div>
                        <div>Tempahan Diuruskan</div>
                    </div>
                </div>
            </div>

            <!-- BORANG LOG MASUK -->
            <div id="loginBox" class="auth-card">
                <h3>🔐 Log Masuk Penjahit</h3>
                <div class="demo-hint">
                    💡 <strong>Guna Akaun Demo Panel:</strong><br>
                    ID: <code>demo</code> | Pass: <code>123</code>
                </div>
                <form id="loginForm" onsubmit="handleLogin(event)">
                    <div class="form-group">
                        <label for="loginUser">Nama Pengguna / ID:</label>
                        <input type="text" id="loginUser" placeholder="Masukkan ID penjahit" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPass">Kata Laluan:</label>
                        <input type="password" id="loginPass" placeholder="Masukkan kata laluan" required>
                    </div>
                    <button type="submit" id="btnLoginSubmit" class="btn-submit">Log Masuk</button>
                </form>
                <div class="auth-toggle">
                    Belum ada akaun? <a onclick="toggleAuth('signup')">Daftar Akaun Baharu</a>
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
                    <button type="submit" id="btnSignupSubmit" class="btn-submit" style="background-color: var(--accent);">Daftar Akaun</button>
                </form>
                <div class="auth-toggle">
                    Sudah ada akaun? <a onclick="toggleAuth('login')">Log Masuk</a>
                </div>
            </div>

            <h3 style="text-align: center; color: var(--primary); margin-bottom: 20px;">💡 Fungsi & Kelebihan JahitNadi</h3>
            <div class="grid-3">
                <div class="info-card-static">
                    <h3>📝 Rekod Pelanggan</h3>
                    <p>Menyimpan maklumat pelanggan dan ukuran secara sistematik tanpa risiko fizikal hilang.</p>
                </div>
                <div class="info-card-static">
                    <h3>🔍 Carian Pantas</h3>
                    <p>Mencari rekod pelanggan sedia ada dengan carian nama atau nombor telefon.</p>
                </div>
                <div class="info-card-static">
                    <h3>🔔 Peringatan Tarikh</h3>
                    <p>Notifikasi automatik bagi tempahan yang menghampiri tarikh siap.</p>
                </div>
            </div>

        </div>

        <!-- HALAMAN 2: TEMPAHAN -->
        <div id="tempahanPage" class="page-section">
            <div id="alertBox" class="alert-box">
                ⚠️ <strong>Peringatan Tempahan Urgent:</strong> <span id="alertMessage"></span>
            </div>

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
                    <h4>Belum Lunas</h4>
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
                            <label for="ukuran">Ukuran / Catatan:</label>
                            <textarea id="ukuran" rows="3" placeholder="Ukuran / Catatan khas..."></textarea>
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
                        <input type="text" id="searchInput" onkeyup="searchCustomer()" placeholder="🔍 Cari nama atau no. tel...">
                        <button type="button" class="btn-reset-demo" onclick="muatAwalDataDemo(true)">🔄 Muat Semula Contoh</button>
                    </div>
                    <div style="overflow-x:auto;">
                        <table id="tempahanTable">
                            <thead>
                                <tr>
                                    <th>Maklumat Pelanggan</th>
                                    <th>Pakaian</th>
                                    <th>Tarikh Siap</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody id="senaraiTempahan"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <p>&copy; 2026 JahitNadi - Nadi Usahawan Jahitan.</p>
    </footer>

    <!-- SKRIP FIREBASE REALTIME DATABASE -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
        import { getDatabase, ref, set, get, onValue, remove } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";

        const firebaseConfig = {
            databaseURL: "https://jahitnadi-default-rtdb.asia-southeast1.firebasedatabase.app"
        };

        const app = initializeApp(firebaseConfig);
        const db = getDatabase(app);

        // SENARAI MOCK DATA CONTOH PELANGGAN BAHARU (LEBIH BANYAK)
        const MOCK_DATA = {
            "101": { nama: "Siti Nurhaliza", telefon: "0123456789", pakaian: "Baju Kurung Moden", harga: 120.00, bayaran: 50.00, statusKerja: "proses", ukuran: "Bahu 14.5, Dada 36, Labuh 42. Tangan ada zip hidden.", tarikhSiap: "2026-10-05" },
            "102": { nama: "Ahmad Khairul", telefon: "0198765432", pakaian: "Baju Melayu Cekak Musang", harga: 150.00, bayaran: 150.00, statusKerja: "siap", ukuran: "Bahu 17, Dada 40, Pinggang 32. Butang 5.", tarikhSiap: "2026-09-28" },
            "103": { nama: "Farah Amina", telefon: "0171122334", pakaian: "Baju Kurung Pahang", harga: 110.00, bayaran: 110.00, statusKerja: "siap", ukuran: "Bahu 15, Pinggul 38, Labuh kain 39.", tarikhSiap: "2026-09-25" },
            "104": { nama: "Mohd Razali", telefon: "0134455667", pakaian: "Pengubahsuaian (Alteration)", harga: 35.00, bayaran: 0.00, statusKerja: "proses", ukuran: "Potong kaki seluar jean 2 inci.", tarikhSiap: "2026-10-02" },
            "105": { nama: "Norain Suraya", telefon: "0119988776", pakaian: "Lain-lain", harga: 200.00, bayaran: 100.00, statusKerja: "proses", ukuran: "Dress labuh kembang, lace di bahagian lengan.", tarikhSiap: "2026-10-10" },
            "106": { nama: "Khairul Amri", telefon: "0182233445", pakaian: "Baju Melayu Teluk Belanga", harga: 140.00, bayaran: 80.00, statusKerja: "proses", ukuran: "Bahu 16.5, Pinggang seluar 34. Poket berzip.", tarikhSiap: "2026-10-03" },
            "107": { nama: "Nurul Izzah", telefon: "0165544332", pakaian: "Baju Kurung Kedah", harga: 90.00, bayaran: 90.00, statusKerja: "siap", ukuran: "Bahu 14, Labuh baju 32. Kain lipat batik.", tarikhSiap: "2026-09-29" }
        };

        let senaraiData = [];
        let isLoggedIn = false;
        let currentUser = null;

        function fetchWithTimeout(promise, ms = 5000) {
            return Promise.race([
                promise,
                new Promise((_, reject) => setTimeout(() => reject(new Error("Masa tamat! Sila semak sambungan internet/Firebase anda.")), ms))
            ]);
        }

        window.toggleAuth = function(mode) {
            document.getElementById('loginBox').style.display = (mode === 'signup') ? 'none' : 'block';
            document.getElementById('signupBox').style.display = (mode === 'signup') ? 'block' : 'none';
        };

        window.handleSignUp = async function(e) {
            e.preventDefault();
            const btn = document.getElementById('btnSignupSubmit');
            const user = document.getElementById('signupUser').value.trim().toLowerCase();
            const pass = document.getElementById('signupPass').value.trim();

            if (!user || !pass) return;

            btn.disabled = true;
            btn.innerText = "Sila tunggu...";

            try {
                const userRef = ref(db, 'users/' + user);
                const snapshot = await fetchWithTimeout(get(userRef));

                if (snapshot.exists()) {
                    alert('ID Penjahit ini telah wujud. Sila guna ID lain.');
                } else {
                    await set(userRef, { username: user, password: pass });
                    alert('Akaun Penjahit berjaya didaftarkan! Sila log masuk.');
                    document.getElementById('signupForm').reset();
                    toggleAuth('login');
                }
            } catch (err) {
                alert(err.message);
            } finally {
                btn.disabled = false;
                btn.innerText = "Daftar Akaun";
            }
        };

        window.handleLogin = async function(e) {
            e.preventDefault();
            const btn = document.getElementById('btnLoginSubmit');
            const userInput = document.getElementById('loginUser').value.trim();
            const passInput = document.getElementById('loginPass').value.trim();

            if (!userInput || !passInput) return;

            btn.disabled = true;
            btn.innerText = "Sila tunggu...";

            // PINTASAN AKAUN DEMO
            if (userInput.toLowerCase() === 'demo' && passInput === '123') {
                isLoggedIn = true;
                currentUser = 'demo';
                localStorage.setItem('jahitnadi_session', 'demo');
                
                alert("Selamat Datang, Akaun Demo Panel!");
                
                updateUIState();
                showPage('tempahanPage', 'btnTempahan');
                await muatAwalDataDemo();
                muatDataFirebase();
                
                btn.disabled = false;
                btn.innerText = "Log Masuk";
                return;
            }

            // SEMAKAN AKAUN BIASA
            try {
                const userRef = ref(db, 'users/' + userInput.toLowerCase());
                const snapshot = await fetchWithTimeout(get(userRef));

                if (snapshot.exists() && snapshot.val().password === passInput) {
                    isLoggedIn = true;
                    currentUser = userInput.toLowerCase();
                    localStorage.setItem('jahitnadi_session', currentUser);
                    
                    alert(`Selamat Datang, ${currentUser}!`);
                    
                    updateUIState();
                    showPage('tempahanPage', 'btnTempahan');
                    muatDataFirebase();
                } else {
                    alert('ID Penjahit atau kata laluan tidak sah!');
                }
            } catch (err) {
                alert("Ralat Log Masuk: " + err.message);
            } finally {
                btn.disabled = false;
                btn.innerText = "Log Masuk";
            }
        };

        // FUNGSI UNTUK MEMASTIKAN AKAUN DEMO MEMPUNYAI MOCK DATA
        window.muatAwalDataDemo = async function(paksaReset = false) {
            if (currentUser !== 'demo') return;
            try {
                const tempahanRef = ref(db, 'tempahan/demo');
                const snapshot = await get(tempahanRef);
                if (!snapshot.exists() || paksaReset) {
                    await set(tempahanRef, MOCK_DATA);
                    if (paksaReset) alert("Contoh rekod pelanggan berjaya dimuat semula!");
                }
            } catch(e) {
                console.log("Ralat muat data contoh: ", e);
            }
        };

        window.handleLogout = function() {
            isLoggedIn = false;
            currentUser = null;
            senaraiData = [];
            localStorage.removeItem('jahitnadi_session');
            alert('Anda telah log keluar.');
            updateUIState();
            showPage('homePage', 'btnHome');
        };

        window.updateUIState = function() {
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
        };

        window.showPage = function(pageId, btnId) {
            if (pageId === 'tempahanPage' && !isLoggedIn) {
                alert('Akses Ditolak! Sila log masuk terlebih dahulu.');
                return;
            }

            document.querySelectorAll('.page-section').forEach(s => s.classList.remove('active'));
            document.querySelectorAll('nav button').forEach(b => b.classList.remove('active'));

            document.getElementById(pageId).classList.add('active');
            document.getElementById(btnId).classList.add('active');

            if (pageId === 'tempahanPage') {
                muatDataFirebase();
            }
        };

        function muatDataFirebase() {
            if (!currentUser) return;

            const tempahanRef = ref(db, 'tempahan/' + currentUser);
            onValue(tempahanRef, (snapshot) => {
                const data = snapshot.val();
                senaraiData = [];

                if (data) {
                    Object.keys(data).forEach(key => {
                        senaraiData.push({ idKey: key, ...data[key] });
                    });
                }

                paparData();
                kemaskiniRingkasanStat();
                semakNotifikasiTempahan();
            });
        }

        function kemaskiniRingkasanStat() {
            let total = senaraiData.length;
            let proses = 0, siap = 0, totalBelumLunasRM = 0, totalLunasRM = 0;

            senaraiData.forEach(item => {
                if (item.statusKerja === 'siap') siap++;
                else proses++;

                const harga = parseFloat(item.harga) || 0;
                const bayaran = parseFloat(item.bayaran) || 0;
                const baki = harga - bayaran;

                totalLunasRM += bayaran;
                if (baki > 0) totalBelumLunasRM += baki;
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
                tbody.innerHTML = `<tr><td colspan="4" style="text-align:center; color:#94a3b8; padding: 20px;">Tiada rekod pelanggan. Tekan butang '🔄 Muat Semula Contoh' jika mahu memuatkan rekod contoh.</td></tr>`;
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
                        <button class="btn-edit" data-id="${item.idKey}">✏️ Edit</button>
                        <button class="btn-delete" data-id="${item.idKey}">🗑️ Padam</button>
                    </td>
                `;

                tr.querySelector('.btn-edit').onclick = () => editCatatan(item.idKey, item);
                tr.querySelector('.btn-delete').onclick = () => padamTempahan(item.idKey);

                tbody.appendChild(tr);
            });
        }

        document.getElementById('orderForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (!currentUser) return;

            const idAuto = Date.now().toString();
            const tempahanBaru = {
                nama: document.getElementById('nama').value,
                telefon: document.getElementById('telefon').value,
                pakaian: document.getElementById('pakaian').value,
                harga: parseFloat(document.getElementById('harga').value) || 0,
                bayaran: parseFloat(document.getElementById('bayaran').value) || 0,
                statusKerja: document.getElementById('statusKerja').value,
                ukuran: document.getElementById('ukuran').value,
                tarikhSiap: document.getElementById('tarikhSiap').value
            };

            await set(ref(db, `tempahan/${currentUser}/${idAuto}`), tempahanBaru);
            document.getElementById('orderForm').reset();
            alert('Maklumat pelanggan berjaya disimpan ke Firebase!');
        });

        async function editCatatan(idKey, item) {
            const statusBaru = confirm("Klik OK jika tempahan telah SIAP, atau CANCEL untuk kekal SEDANG DIPROSES") ? "siap" : "proses";
            const bayaranBaru = prompt("Masukkan jumlah bayaran terkumpul daripada pelanggan (RM):", item.bayaran);

            if (bayaranBaru !== null) {
                await set(ref(db, `tempahan/${currentUser}/${idKey}`), {
                    ...item,
                    statusKerja: statusBaru,
                    bayaran: parseFloat(bayaranBaru) || 0
                });
                alert("Rekod pelanggan berjaya dikemaskini!");
            }
        }

        async function padamTempahan(idKey) {
            if (confirm("Adakah anda pasti mahu memadam rekod pelanggan ini?")) {
                await remove(ref(db, `tempahan/${currentUser}/${idKey}`));
                alert("Rekod telah dipadam!");
            }
        }

        window.searchCustomer = function() {
            let filter = document.getElementById("searchInput").value.toLowerCase();
            let tr = document.getElementById("tempahanTable").getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let namaCol = tr[i].getElementsByClassName("nama-col")[0];
                if (namaCol) {
                    let text = namaCol.textContent || namaCol.innerText;
                    tr[i].style.display = text.toLowerCase().includes(filter) ? "" : "none";
                }
            }
        };

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
                    if (diffDays <= 3 && diffDays >= 0) urgent++;
                }
            });

            if (urgent > 0) {
                alertMessage.innerHTML = `Terdapat ${urgent} tempahan belum siap yang menghampiri tarikh jangkaan (3 hari lagi)!`;
                alertBox.style.display = 'block';
            } else {
                alertBox.style.display = 'none';
            }
        }

        window.onload = async function() {
            updateUIState();
            if (currentUser) {
                if (currentUser === 'demo') {
                    await muatAwalDataDemo();
                }
                muatDataFirebase();
            }
        };
    </script>
</body>
</html>