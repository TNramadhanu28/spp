<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    * {
        margin: 0;
        padding: 0;
        list-style: circle;
        text-decoration: none;
    }

    .sidebar {
        position: fixed;
        left: 0;
        width: 250px;
        height: 100%;
        background: black;
    }

    .sidebar header {
        font-size: 22px;
        color: white;
        text-align: center;
        line-height: 70px;
        background: #063146;
        user-select: none;
    }

    .sidebar ul a {
        display: block;
        height: 100%;
        width: 100%;
        line-height: 65px;
        font-size: 20px;
        color: white;
        padding-left: 40px;
        box-sizing: border-box;
        border-top: 1px solid rgba(255, 255, 255, .1);
        border-bottom: 1px solid black;
        transition: .4s;
    }

    ul li:hover a {
        padding-left: 50px;
    }

    .sidebar ul a i {
        margin-right: 16px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

    }

    .container img {
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translateX(-50%);
        max-width: 100%;
    }

    .kelas-container {
        display: flex;
        justify-content: space-between;
        margin-top: 90px;
    }

    .kelas {
        width: 48%;
        /* Lebar kelas */
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    label {
        font-weight: bold;
        margin-right: 10px;
    }

    select {
        margin-top: 100px;
    }

    h1 {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ccc;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    thead {
        background-color: #007bff;
        color: #fff;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <header><img src="ava.png" width="30px" height="30px">ADMIN</header>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="data.php?page=" DATA SISWA"">DATA SISWA</a></li>
            <li><a href="bayar.php?page=" PEMBAYARAN"">PEMBAYARAN</a></li>
            <li><a href="pesan.php?page=" PESAN"">PESAN</a></li>
            <br>
            <a href="Login_admin.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                LOGOUT
            </a>


        </ul>
    </div>
    <div class="container">
        <img src="smk4.png" width="100px" align-items="center">
        <h1>Data Siswa</h1>
        <label for="kelasDropdown">Pilih Kelas:</label>
        <select id="kelasDropdown">
            <option value="XII PPLG">Kelas XII PPLG</option>
            <option value="XII IPS 2">Kelas XII TJKT 1</option>
            <option value="XII IPS 2">Kelas XII TJKT 2</option>
            <option value="XII IPS 2">Kelas XII TJKT 3</option>
            <option value="XII IPS 2">Kelas XII TJKT 4</option>
            <option value="XII IPS 2">Kelas XII AKL 1</option>
            <option value="XII IPS 2">Kelas XII AKL 2</option>
            <option value="XII IPS 2">Kelas XII AKL 4</option>
            <option value="XII IPS 2">Kelas XII PHT 1</option>
            <option value="XII IPS 2">Kelas XII PHT 2</option>
            <option value="XII IPS 2">Kelas XII PHT 3</option>
            <option value="XII IPS 2">Kelas XII PHT 4</option>
            <option value="XII IPS 2">Kelas XII TABUS 1</option>
            <option value="XII IPS 2">Kelas XII TABUS 2</option>
            <option value="XII IPS 2">Kelas XII TABUS 3</option>
            <option value="XII IPS 2">Kelas XII TABUS 4</option>
            <option value="XII IPS 2">Kelas XII KULINER 1</option>
            <option value="XII IPS 2">Kelas XII KULINER 2</option>
            <option value="XII IPS 2">Kelas XII KULINER 3</option>
            <option value="XII IPS 2">Kelas XII KULINER 4</option>
            <option value="XII IPS 2">Kelas XII UPW 1</option>
            <option value="XII IPS 2">Kelas XII UPW 2</option>
            <option value="XII IPS 2">Kelas XII UPW 3</option>
            <option value="XII IPS 2">Kelas XII UPW 4</option>
            <option value="XII IPS 2">Kelas XII BDP 1</option>
            <option value="XII IPS 2">Kelas XII BDP 2</option>
            <option value="XII IPS 2">Kelas XII BDP 3</option>
            <option value="XII IPS 2">Kelas XII BDP 4</option>
            <option value="XII IPS 2">Kelas XII OTKP 1</option>
            <option value="XII IPS 2">Kelas XII OTKP 2</option>
            <option value="XII IPS 2">Kelas XII OTKP 3</option>
            <option value="XII IPS 2">Kelas XII OTKP 4</option>
            <option value="XII IPS 2">Kelas XII DKV 1</option>
            <option value="XII IPS 2">Kelas XII DKV 2</option>
            <option value="XII IPS 2">Kelas XII DKV 3</option>
            <option value="XII IPS 2">Kelas XII DKV 4</option>
            <option value="XII IPS 2">Kelas XI PPLG 1</option>

            <!-- Tambahkan opsi kelas lainnya di sini -->
        </select>
        <div class="kelas-container" id="kelasContainer">
            <!-- Tabel data siswa akan ditampilkan di sini berdasarkan pilihan dropdown -->
        </div>
    </div>



    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const kelasDropdown = document.getElementById("kelasDropdown");
        const kelasContainer = document.getElementById("kelasContainer");

        // Data siswa untuk setiap kelas
        const dataSiswa = {
            "XII PPLG": [{
                    nama: "Sajid",
                    usia: 17,
                    jenisKelamin: "Laki-laki"
                },
                {
                    nama: "Ghalib",
                    usia: 17,
                    jenisKelamin: "Laki-laki"
                },
                {
                    nama: "Ramadhanu",
                    usia: 17,
                    jenisKelamin: "Laki-laki"
                },
                {
                    nama: "Bimo",
                    usia: 17,
                    jenisKelamin: "Laki-laki"
                },
                {
                    nama: "Figo",
                    usia: 17,
                    jenisKelamin: "Laki-laki"
                },

            ],
            "XII IPS 2": [{
                    nama: "Jane Smith",
                    usia: 16,
                    jenisKelamin: "Perempuan"
                },
                // Tambahkan data siswa lainnya
            ],
            // Tambahkan data kelas dan siswa lainnya sesuai kebutuhan
        };

        // Fungsi untuk menampilkan data siswa berdasarkan kelas yang dipilih
        function tampilkanDataSiswa(kelas) {
            const siswaKelas = dataSiswa[kelas];
            if (siswaKelas) {
                const tabelHTML = `
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${siswaKelas.map(siswa => `
                            <tr>
                                <td>${siswa.nama}</td>
                                <td>${siswa.usia}</td>
                                <td>${siswa.jenisKelamin}</td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
            `;
                kelasContainer.innerHTML = tabelHTML;
            } else {
                kelasContainer.innerHTML = "<p>Data siswa tidak ditemukan untuk kelas ini.</p>";
            }
        }

        // Panggil fungsi tampilkanDataSiswa saat pilihan dropdown berubah
        kelasDropdown.addEventListener("change", function() {
            const kelasTerpilih = kelasDropdown.value;
            tampilkanDataSiswa(kelasTerpilih);
        });

        // Inisialisasi tampilan data siswa dengan kelas awal yang terpilih
        const kelasAwal = kelasDropdown.value;
        tampilkanDataSiswa(kelasAwal);
    });
    </script>
</body>

</html>