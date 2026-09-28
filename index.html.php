<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
    import { getDatabase, ref, set, get, onValue, remove } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-database.js";

    const firebaseConfig = {
        databaseURL: "https://jahitnadi-default-rtdb.asia-southeast1.firebasedatabase.app"
    };

    let app, db;
    try {
        app = initializeApp(firebaseConfig);
        db = getDatabase(app);
    } catch (e) {
        console.log("Firebase tidak disambung, mod fallback diaktifkan.");
    }

    // SENARAI 7 DATA CONTOH PELANGGAN
    const MOCK_DATA = [
        { idKey: "101", nama: "Siti Nurhaliza", telefon: "0123456789", pakaian: "Baju Kurung Moden", harga: 120.00, bayaran: 50.00, statusKerja: "proses", ukuran: "Bahu 14.5, Dada 36, Labuh 42. Tangan ada zip hidden.", tarikhSiap: "2026-10-05" },
        { idKey: "102", nama: "Ahmad Khairul", telefon: "0198765432", pakaian: "Baju Melayu Cekak Musang", harga: 150.00, bayaran: 150.00, statusKerja: "siap", ukuran: "Bahu 17, Dada 40, Pinggang 32. Butang 5.", tarikhSiap: "2026-09-28" },
        { idKey: "103", nama: "Farah Amina", telefon: "0171122334", pakaian: "Baju Kurung Pahang", harga: 110.00, bayaran: 110.00, statusKerja: "siap", ukuran: "Bahu 15, Pinggul 38, Labuh kain 39.", tarikhSiap: "2026-09-25" },
        { idKey: "104", nama: "Mohd Razali", telefon: "0134455667", pakaian: "Pengubahsuaian (Alteration)", harga: 35.00, bayaran: 0.00, statusKerja: "proses", ukuran: "Potong kaki seluar jean 2 inci.", tarikhSiap: "2026-10-02" },
        { idKey: "105", nama: "Norain Suraya", telefon: "0119988776", pakaian: "Lain-lain", harga: 200.00, bayaran: 100.00, statusKerja: "proses", ukuran: "Dress labuh kembang, lace di bahagian lengan.", tarikhSiap: "2026-10-10" },
        { idKey: "106", nama: "Khairul Amri", telefon: "0182233445", pakaian: "Baju Melayu Teluk Belanga", harga: 140.00, bayaran: 80.00, statusKerja: "proses", ukuran: "Bahu 16.5, Pinggang seluar 34. Poket berzip.", tarikhSiap: "2026-10-03" },
        { idKey: "107", nama: "Nurul Izzah", telefon: "0165544332", pakaian: "Baju Kurung Kedah", harga: 90.00, bayaran: 90.00, statusKerja: "siap", ukuran: "Bahu 14, Labuh baju 32. Kain lipat batik.", tarikhSiap: "2026-09-29" }
    ];

    let senaraiData = [];
    let isLoggedIn = false;
    let currentUser = null;

    window.toggleAuth = function(mode) {
        document.getElementById('loginBox').style.display = (mode === 'signup') ? 'none' : 'block';
        document.getElementById('signupBox').style.display = (mode === 'signup') ? 'block' : 'none';
    };

    window.handleLogin = function(e) {
        e.preventDefault();
        const user = document.getElementById('loginUser').value.trim().toLowerCase();
        const pass = document.getElementById('loginPass').value.trim();

        if (user === 'demo' && pass === '123') {
            isLoggedIn = true;
            currentUser = 'demo';
            localStorage.setItem('jahitnadi_session', 'demo');
            alert("Selamat Datang, Akaun Demo Panel!");
            updateUIState();
            showPage('tempahanPage', 'btnTempahan');
            return;
        }

        // Semakan akaun biasa menerusi Firebase
        if (db) {
            get(ref(db, 'users/' + user)).then(snapshot => {
                if (snapshot.exists() && snapshot.val().password === pass) {
                    isLoggedIn = true;
                    currentUser = user;
                    localStorage.setItem('jahitnadi_session', user);
                    alert(`Selamat Datang, ${user}!`);
                    updateUIState();
                    showPage('tempahanPage', 'btnTempahan');
                } else {
                    alert('ID Penjahit atau kata laluan tidak sah!');
                }
            }).catch(err => alert("Gagal sambung Firebase: " + err.message));
        } else {
            alert("Akaun biasa memerlukan Realtime Database yang aktif.");
        }
    };

    window.muatAwalDataDemo = function() {
        senaraiData = [...MOCK_DATA];
        paparData();
        kemaskiniRingkasanStat();
        semakNotifikasiTempahan();
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
            muatData();
        }
    };

    function muatData() {
        if (currentUser === 'demo') {
            muatAwalDataDemo();
            return;
        }

        if (db) {
            onValue(ref(db, 'tempahan/' + currentUser), (snapshot) => {
                const data = snapshot.val();
                senaraiData = [];
                if (data) {
                    Object.keys(data).forEach(key => senaraiData.push({ idKey: key, ...data[key] }));
                }
                paparData();
                kemaskiniRingkasanStat();
                semakNotifikasiTempahan();
            });
        }
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
            tbody.innerHTML = `<tr><td colspan="4" style="text-align:center; color:#94a3b8; padding: 20px;">Tiada rekod pelanggan.</td></tr>`;
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
                    <button class="btn-edit">✏️ Edit</button>
                    <button class="btn-delete">🗑️ Padam</button>
                </td>
            `;

            tr.querySelector('.btn-edit').onclick = () => editCatatan(item.idKey, item);
            tr.querySelector('.btn-delete').onclick = () => padamTempahan(item.idKey);

            tbody.appendChild(tr);
        });
    }

    document.getElementById('orderForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const idAuto = Date.now().toString();
        const tempahanBaru = {
            idKey: idAuto,
            nama: document.getElementById('nama').value,
            telefon: document.getElementById('telefon').value,
            pakaian: document.getElementById('pakaian').value,
            harga: parseFloat(document.getElementById('harga').value) || 0,
            bayaran: parseFloat(document.getElementById('bayaran').value) || 0,
            statusKerja: document.getElementById('statusKerja').value,
            ukuran: document.getElementById('ukuran').value,
            tarikhSiap: document.getElementById('tarikhSiap').value
        };

        if (currentUser === 'demo') {
            senaraiData.unshift(tempahanBaru);
            paparData();
            kemaskiniRingkasanStat();
            document.getElementById('orderForm').reset();
            alert('Maklumat pelanggan berjaya ditambah pada Akaun Demo!');
        } else if (db) {
            set(ref(db, `tempahan/${currentUser}/${idAuto}`), tempahanBaru);
            document.getElementById('orderForm').reset();
            alert('Maklumat pelanggan disimpan ke Firebase!');
        }
    });

    function editCatatan(idKey, item) {
        const statusBaru = confirm("Klik OK jika tempahan telah SIAP, atau CANCEL untuk kekal SEDANG DIPROSES") ? "siap" : "proses";
        const bayaranBaru = prompt("Masukkan jumlah bayaran terkumpul (RM):", item.bayaran);

        if (bayaranBaru !== null) {
            item.statusKerja = statusBaru;
            item.bayaran = parseFloat(bayaranBaru) || 0;

            if (currentUser === 'demo') {
                paparData();
                kemaskiniRingkasanStat();
            } else if (db) {
                set(ref(db, `tempahan/${currentUser}/${idKey}`), item);
            }
        }
    }

    function padamTempahan(idKey) {
        if (confirm("Padam rekod pelanggan ini?")) {
            senaraiData = senaraiData.filter(d => d.idKey !== idKey);
            paparData();
            kemaskiniRingkasanStat();
            if (currentUser !== 'demo' && db) {
                remove(ref(db, `tempahan/${currentUser}/${idKey}`));
            }
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

    window.onload = function() {
        updateUIState();
        if (currentUser) {
            muatData();
        }
    };
</script>