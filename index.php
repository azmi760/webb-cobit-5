<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard COBIT</title>
    
    <!-- CSS Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Style untuk navigasi horizontal */
        .navbar {
            display: flex;
            background-color: #333;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            flex: 1;
            padding: 14px 16px;
            text-align: center;
            color: white;
            text-decoration: none;
            font-size: 17px;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #575757;
            color: white;
        }

        .content {
            padding: 20px;
        }

        /* Style untuk bagian konten */
        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        /* Style untuk tabel dan formulir penilaian domain */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group select,
        .form-group input {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Style khusus untuk teks di bagian tentang */
        .content-section p {
            text-align: justify;
        }

        /* Footer style */
        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            width: 100%;
            margin-top: 120px;
            top: 30px;
            right: 20px;
        }

        .footer .social-icons {
            margin-top: 10px;
        }

        .footer .social-icons a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .footer .social-icons a:hover {
            color: #007bff;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }

        /* Responsive media queries */
        @media (max-width: 768px) {
            .navbar a {
                font-size: 15px;
            }

            button {
                width: 100%;
            }
        }
        /* Style untuk logo di header */
        .navbar img {
            height: 50px; /* Sesuaikan ukuran logo agar kecil */
            margin-right: 10px;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <!-- Navigasi horizontal -->
    <div class="navbar">
        <!-- Menambahkan logo kecil di bagian navbar -->
        <img src="logo.png" alt="Logo COBIT 5">
        
        <a href="#" onclick="showSection('tentang')">Tentang COBIT</a>
        <a href="#" onclick="showSection('penilaian')">Penilaian Domain</a>
    </div>

    <!-- Bagian konten -->
    <div class="content">
        <!-- Tentang COBIT -->
        <div id="tentang" class="content-section active">
            <h2>Tentang COBIT</h2>
            <p>
                COBIT 5 (Control Objectives for Information and Related Technologies) adalah kerangka tata kelola 
                dan manajemen Teknologi Informasi (TI) yang dikembangkan oleh ISACA. COBIT 5 dirancang untuk membantu 
                organisasi mengelola serta mengatur penggunaan TI dengan cara yang mendukung tujuan bisnis.
            </p>
            <p>
                COBIT 5 menyediakan panduan terbaik untuk mencapai keseimbangan antara manfaat, risiko, dan sumber daya dalam penggunaan TI.
                Kerangka kerja ini juga menyediakan panduan bagaimana organisasi bisa mengadopsi praktik terbaik 
                dalam tata kelola TI melalui proses, kebijakan, prosedur, dan kontrol yang efektif.
            </p>
            <h3>Manfaat COBIT 5:</h3>
            <ul>
                <li>Menyelaraskan TI dengan tujuan bisnis untuk menciptakan nilai.</li>
                <li>Mengelola risiko dan mengurangi potensi gangguan yang mungkin diakibatkan oleh TI.</li>
                <li>Mengoptimalkan penggunaan sumber daya TI.</li>
            </ul>
            <h3>Prinsip-Prinsip Utama COBIT 5:</h3>
            <ol>
                <li>Memenuhi kebutuhan pemangku kepentingan.</li>
                <li>Mencakup seluruh organisasi dari ujung ke ujung.</li>
                <li>Menerapkan pendekatan tunggal yang terintegrasi.</li>
                <li>Memungkinkan pendekatan berbasis holistik.</li>
                <li>Memisahkan Tata Kelola dan Manajemen.</li>
            </ol>

            <h3>Tingkat Maturitas (Maturity Levels) COBIT 5:</h3>
            <p>COBIT 5 juga menyediakan model penilaian tingkat maturitas yang digunakan untuk mengukur seberapa baik suatu organisasi dalam menerapkan tata kelola TI. Berikut adalah Enam tingkat maturitas dalam COBIT 5:</p>
            <ul>
                <li><strong>Level 0 – Incomplete:</strong> Proses tidak diimplementasikan atau gagal mencapai tujuan prosesnya.</li>
                <li><strong>Level 1 – Performed:</strong> Proses yang diimplementasikan mencapai tujuan prosesnya.</li>
                <li><strong>Level 2 – Managed:</strong> Proses dikelola, dan hasilnya ditentukan, dikendalikan, dan dipelihara.</li>
                <li><strong>Level 3 – Established:</strong> Proses standar didefinisikan dan digunakan di seluruh organisasi.</li>
                <li><strong>Level 4 – Predictable:</strong> Proses dijalankan secara konsisten dalam batas yang ditentukan.</li>
                <li><strong>Level 5 – Optimizing:</strong> Proses ini terus ditingkatkan untuk memenuhi tujuan bisnis yang relevan saat ini dan yang diproyeksikan.</li>
            </ul>
        </div>

        <!-- Formulir Penilaian Domain COBIT -->
        <div id="penilaian" class="content-section">
            <h2>Penilaian Domain COBIT</h2>
            <form action="activity.php" method="GET">
                <div class="form-group">
                    <label for="domain">Domain COBIT:</label>
                    <select name="domain" id="domain" required>
                        <option value="">Pilih domain</option>
                        <option value="EDM">EDM (Evaluate, Direct and Monitor)</option>
                        <option value="APO">APO (Align, Plan and Organize)</option>
                        <option value="BAI">BAI (Build, Acquire and Implement)</option>
                        <option value="DSS">DSS (Deliver, Service and Support)</option>
                        <option value="MEA">MEA (Monitor, Evaluate and Assess)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="practice">Practice:</label>
                    <!-- Tambahkan id "practice" agar inisialisasi Select2 berfungsi -->
                    <select name="practice" id="practice" required>
                        <option value="">Pilih practice</option>
    
                        <script>
    // Fungsi untuk menampilkan bagian konten yang sesuai
    function showSection(sectionId) {
        // Sembunyikan semua section
        var sections = document.getElementsByClassName('content-section');
        for (var i = 0; i < sections.length; i++) {
            sections[i].classList.remove('active');
        }

        // Tampilkan section yang dipilih
        var selectedSection = document.getElementById(sectionId);
        selectedSection.classList.add('active');
    }

    // Menambahkan pemilih domain untuk memfilter praktik
    document.addEventListener('DOMContentLoaded', function() {
        var domainSelect = document.getElementById('domain');
        var practiceSelect = document.getElementById('practice');

        domainSelect.addEventListener('change', function() {
            var selectedDomain = this.value;

            // Mengosongkan praktik yang ada
            practiceSelect.innerHTML = '<option value="">Pilih practice</option>';

            // Menambahkan opsi praktik berdasarkan domain yang dipilih
            if (selectedDomain === 'EDM') {
                practiceSelect.innerHTML += `
                    <option value="EDM01 - Ensure Governance Framework Setting and Maintenance">EDM01 – Ensure Governance Framework Setting and Maintenance</option>
                    <option value="EDM02 - Ensure Benefits Delivery">EDM02 – Ensure Benefits Delivery</option>
                    <option value="EDM03 - Ensure Risk Optimisation">EDM03 – Ensure Risk Optimisation</option>
                    <option value="EDM04 - Ensure Resource Optimisation">EDM04 – Ensure Resource Optimisation</option>
                    <option value="EDM05 - Ensure Stakeholder Transparency">EDM05 – Ensure Stakeholder Transparency</option>
                `;
            } else if (selectedDomain === 'APO') {
                practiceSelect.innerHTML += `
                    <option value="APO01 - Manage the IT Management Framework">APO01 – Manage the IT Management Framework</option>
                    <option value="APO02 - Manage Strategy">APO02 – Manage Strategy</option>
                    <option value="APO03 - Manage Enterprise Architecture">APO03 – Manage Enterprise Architecture</option>
                    <option value="APO04 - Manage Innovation">APO04 – Manage Innovation</option>
                    <option value="APO05 - Manage Portfolio">APO05 – Manage Portfolio</option>
                    <option value="APO06 - Manage Budget and Costs">APO06 – Manage Budget and Costs</option>
                    <option value="APO07 - Manage Human Resources">APO07 – Manage Human Resources</option>
                    <option value="APO08 - Manage Relationships">APO08 – Manage Relationships</option>
                    <option value="APO09 - Manage Service Agreements">APO09 – Manage Service Agreements</option>
                    <option value="APO10 - Manage Suppliers">APO10 – Manage Suppliers</option>
                    <option value="APO11 - Manage Quality">APO11 – Manage Quality</option>
                    <option value="APO12 - Manage Risk">APO12 – Manage Risk</option>
                    <option value="APO13 - Manage Security">APO13 – Manage Security</option>
                `;
            } else if (selectedDomain === 'BAI') {
                practiceSelect.innerHTML += `
                    <option value="BAI01 - Manage Programmes and Projects">BAI01 – Manage Programmes and Projects</option>
                    <option value="BAI02 - Manage Requirements Definition">BAI02 – Manage Requirements Definition</option>
                    <option value="BAI03 - Manage Solutions Identification and Build">BAI03 – Manage Solutions Identification and Build</option>
                    <option value="BAI04 - Manage Availability and Capacity">BAI04 – Manage Availability and Capacity</option>
                    <option value="BAI05 - Manage Organisational Change Enablement">BAI05 – Manage Organisational Change Enablement</option>
                    <option value="BAI06 - Manage Changes">BAI06 – Manage Changes</option>
                    <option value="BAI07 - Manage Change Acceptance and Transitioning">BAI07 – Manage Change Acceptance and Transitioning</option>
                    <option value="BAI08 - Manage Knowledge">BAI08 – Manage Knowledge</option>
                    <option value="BAI09 - Manage Assets">BAI09 – Manage Assets</option>
                    <option value="BAI10 - Manage Configuration">BAI10 – Manage Configuration</option>
                `;
            } else if (selectedDomain === 'DSS') {
                practiceSelect.innerHTML += `
                    <option value="DSS01 - Manage Operations">DSS01 – Manage Operations</option>
                    <option value="DSS02 - Manage Service Requests and Incidents">DSS02 – Manage Service Requests and Incidents</option>
                    <option value="DSS03 - Manage Problems">DSS03 – Manage Problems</option>
                    <option value="DSS04 - Manage Continuity">DSS04 – Manage Continuity</option>
                    <option value="DSS05 - Manage Security Services">DSS05 – Manage Security Services</option>
                    <option value="DSS06 - Manage Business Process Controls">DSS06 – Manage Business Process Controls</option>
                `;
            } else if (selectedDomain === 'MEA') {
                practiceSelect.innerHTML += `
                    <option value="MEA01 - Monitor, Evaluate and Assess Performance and Conformance">MEA01 – Monitor, Evaluate and Assess Performance and Conformance</option>
                    <option value="MEA02 - Monitor, Evaluate and Assess the System of Internal Control">MEA02 – Monitor, Evaluate and Assess the System of Internal Control</option>
                    <option value="MEA03 - Monitor, Evaluate and Assess Compliance with External Requirements">MEA03 – Monitor, Evaluate and Assess Compliance with External Requirements</option>
                `;
            } 
            // Inisialisasi Select2 kembali
            $('#practice').select2({
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: $('.content'),
                dropdownPosition: 'below'
            });
        });
    });
</script>

                </select>
                </div>

               
                <button type="submit">Pilih Activity</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Copyright &copy; 2024 COBIT 5 Dashboard. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

    <!-- JavaScript Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>
        // Inisialisasi Select2 pada elemen <select> dengan id "practice"
        $(document).ready(function() {
            $('#practice').select2({
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: $('.content'), // Untuk memastikan dropdown berada di area yang benar
                dropdownPosition: 'below' // Memaksa dropdown muncul ke bawah
            });
        });

        // Fungsi untuk menampilkan bagian konten yang sesuai
        function showSection(sectionId) {
            // Sembunyikan semua section
            var sections = document.getElementsByClassName('content-section');
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove('active');
            }

            // Tampilkan section yang dipilih
            var selectedSection = document.getElementById(sectionId);
            selectedSection.classList.add('active');
        }
    </script>

</body>
</html>
