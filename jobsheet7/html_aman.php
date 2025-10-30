    <?php
    $input = "";
    $output_text = "Silakan masukkan input di bawah dan submit.";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['input'])) {
            $input = $_POST['input'];
            $input_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            $output_text = "
                <p><strong>Input Mentah (sebelum dibersihkan):</strong> <pre>" . $input . "</pre></p>
                <p><strong>Output Aman (setelah htmlspecialchars):</strong> <pre>" . $input_aman . "</pre></p>
                <p><em>Jika Anda memasukkan kode HTML/script, Anda akan melihatnya tampil sebagai teks biasa di Output Aman.</em></p>
            ";
        } else {
            $output_text = "Error: Kunci 'input' tidak ditemukan dalam data POST.";
        }
    }
    ?>
    <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
        <?php echo $output_text; ?>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input_field">Masukkan Teks/Kode </label><br>
        <input type="text" name="input" id="input_field" size="50" required><br><br>
        <input type="submit" value="Submit Input">
    </form>
