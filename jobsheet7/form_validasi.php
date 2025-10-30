<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <div id="ajax-feedback" style="margin-top: 15px;"></div>
        
        <input type="submit" value="Submit">
    </form>
    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // <-- SELALU Cegah submit standar saat menggunakan AJAX
            
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            
            // --- Validasi Sisi Klien (JQuery) ---
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }
            
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }
            if (password === "") {
                $("#password-error").text("Password harus diisi.");
                valid = false;
            } else if (password.length < 8) { // <-- Pengecekan Panjang
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }
            // ------------------------------------
            
            if (valid) {
                // KIRIM DATA MENGGUNAKAN AJAX
                var formData = $(this).serialize();
                $("#ajax-feedback").html("Memproses..."); // Feedback loading
                
                $.ajax({
                    url: "proses_validasi.php", // File PHP pemroses
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        // Tampilkan hasil dari server di div feedback
                        $("#ajax-feedback").html(response);
                        // Opsional: Reset form jika sukses
                        // $("#myForm")[0].reset();
                    },
                    error: function() {
                        $("#ajax-feedback").html('<span style="color: red;">Terjadi kesalahan koneksi!</span>');
                    }
                });
            } else {
                // Jika validasi JQuery GAGAL
                $("#ajax-feedback").html("");
            }
        });
    });
    </script>
</body>
</html>