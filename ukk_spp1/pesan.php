<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Pesan</title>


    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
    }

    .chat-box {
        border: 1px solid #ccc;
        padding: 10px;
        max-height: 300px;
        overflow-y: auto;
        margin-bottom: 10px;
    }

    .input-container {
        display: flex;
    }

    input[type="text"] {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <a href="halaman_admin.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button>
            <-- LOGOUT</button> </a>
    <div class="container">
        <h1>Ketik "Bayar" Ketika Sudah Membayar!</h1>
        <div class="chat-box" id="chat-box">
            <!-- Pesan-pesan akan ditampilkan di sini -->
        </div>
        <div class="input-container">
            <input type="text" id="pesan" placeholder="Tulis pesan...">
            <button id="kirim">Kirim</button>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const chatBox = document.getElementById("chat-box");
        const pesanInput = document.getElementById("pesan");
        const kirimButton = document.getElementById("kirim");
        const pesanArray = [];

        kirimButton.addEventListener("click", function() {
            const pesanText = pesanInput.value.trim();
            if (pesanText !== "") {
                tambahPesan("Anda",
                    pesanText); // Menambahkan pesan pengguna ke chat box
                pesanInput.value = "";
                pesanInput.focus();

                setTimeout(function() {
                    tambahPesan("Bot", "Terima Kasih Telah Membayar..");
                }, 1000);

            }
        });

        pesanInput.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                kirimButton.click();
            }
        });

        function tambahPesan(pengirim, teks) {
            const pesanElement = document.createElement("div");
            pesanElement.classList.add("pesan");
            pesanElement.innerHTML = `<strong>${pengirim}:</strong> ${teks}`;
            chatBox.appendChild(pesanElement);
            chatBox.scrollTop = chatBox.scrollHeight; // Agar chat box scroll ke bawah otomatis
        }
    });
    </script>
</body>

</html>