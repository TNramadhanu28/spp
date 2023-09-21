<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
    /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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

    /* Style header */
    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    h1 {

        text-align: center;
    }



    /* Style container */
    .container {

        position: relative;
        height: 70vh;
        max-width: 900px;
        margin: 0 auto;
        padding: 10px;

    }

    .container img {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        max-width: 100%;
    }

    /* Style form */
    form {
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 5px;
        margin-top: 100px;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #555;
    }

    /* Style struk pembayaran */
    .struk {
        display: none;
        margin-top: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #f9f9f9;
    }

    .struk p {
        margin-bottom: 10px;
    }

    .show-struk {
        display: block;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <header><img src="ava.png" width="30px" height="30px">ADMIN</header>
        <ul>
            <li><a href="halaman_admin.php">HOME</a></li>
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

    <a href="halaman_admin.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button>LOGOUT</button>
    </a>
    <h1>PEMBAYARAN</h1>
    <div class="container">
        <img src="smk4.png" width="100px" align-items="center">
        <form id="payment-form">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nomor_invoice">NISN:</label>
            <input type="text" id="nomor_nisn" name="nomor_nisn" required>

            <label for="tanggal_bayar">Tanggal Bayar:</label>
            <input type="date" id="tanggal_bayar" name="tanggal_bayar" required>

            < <label for="jumlah_pembayaran">Jumlah Pembayaran (IDR):</label>
                <input type="number" id="jumlah_pembayaran" name="jumlah_pembayaran" required>

                <input type="submit" value="Bayar">
        </form>

        <!-- Struk-struk pembayaran -->
        <div id="struk-container">

            <!-- Struk pertama -->
            <div class="struk" id="struk-1">
                <h2>Membayar</h2>
                <p>Nama: <span id="nama-struk-1"></span></p>
                <p>NISN: <span id="nomor-nisn-struk-1"></span></p>
                <p>Tanggal Bayar: <span id="tanggal-bayar-struk-1"></span></p>
                <p>Jumlah Pembayaran (IDR): <span id="jumlah-pembayaran-struk-1"></span></p>
            </div>

            <!-- Struk kedua -->
            <div class="struk" id="struk-2">
                <h2>Membayar</h2>
                <p>Nama: <span id="nama-struk-2"></span></p>
                <p>NISN: <span id="nomor-nisn-struk-2"></span></p>
                >>> <p>Tanggal Bayar: <span id="tanggal-bayar-struk-2"></span></p>
                <p>Jumlah Pembayaran (IDR): <span id="jumlah-pembayaran-struk-2"></span></p>
            </div>
        </div>
    </div>

    <script>
    // Tangkap formulir pembayaran
    const paymentForm = document.getElementById("payment-form");

    // Tangkap elemen kontainer struk
    const strukContainer = document.getElementById("struk-container");

    // Tangkap elemen struk untuk menampilkan hasil pembayaran
    const namaStruk1 = document.getElementById("nama-struk-1");
    const nomornisnStruk1 = document.getElementById("nomor-nisn-struk-1");
    const tanggalbayarStruk1 = document.getElementById("tanggal-bayar-struk-1");
    const jumlahPembayaranStruk1 = document.getElementById("jumlah-pembayaran-struk-1");



    const namaStruk2 = document.getElementById("nama-struk-2");
    const nomornisnStruk2 = document.getElementById("nomor-nisn-struk-2");
    const tanggalbayarStruk2 = document.getElementById("tanggal-bayar-struk-2");
    const jumlahPembayaranStruk2 = document.getElementById("jumlah-pembayaran-struk-2");

    // Counter untuk nomor struk
    let strukCounter = 1;

    // Tangani pengiriman formulir
    paymentForm.addEventListener("submit", function(e) {
        e.preventDefault();

        // Ambil nilai dari input
        const namaValue = document.getElementById("nama").value;
        const nomorInvoiceValue = document.getElementById("nomor_nisn").value;
        const tanggalbayarValue = document.getElementById("tanggal_bayar").value;
        const jumlahPembayaranValue = document.getElementById("jumlah_pembayaran").value;

        // Buat elemen struk baru
        const newStruk = document.createElement("div");
        newStruk.classList.add("struk");
        newStruk.id = `struk-${strukCounter}`;
        strukCounter++;

        // Isi elemen struk dengan data dari formulir
        newStruk.innerHTML = `
    <h2>Struk Pembayaran ${strukCounter}</h2>
    <p>Nama: <span id="nama-struk-${strukCounter}">${namaValue}</span></p>
    <p>Nomor nisn: <span id="nomor-nisn-struk-${strukCounter}">${nomorInvoiceValue}</span></p>
    <p>Tanggal Bayar: <span id="tanggal-bayar-struk-${strukCounter}">${tanggalbayarValue}</span></p>
    <p>Jumlah Pembayaran (IDR): <span id="jumlah-pembayaran-struk-${strukCounter}">${jumlahPembayaranValue}</span></p>
`;

        // Tambahkan elemen struk ke dalam kontainer struk
        strukContainer.appendChild(newStruk);

        // Tampilkan struk
        newStruk.classList.add("show-struk");

        // Reset formulir
        paymentForm.reset();
    });
    </script>
</body>

</html>