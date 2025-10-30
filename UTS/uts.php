<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UTS</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function() {
                // menambah baris
                $("#add-row").click(function() {
                    var name = $("#fname").val();
                    var email = $("#femail").val();
                    var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
                    $("table tbody").append(markup);
                });
                // menghapus baris yang dicentang
                $(".delete-row").click(function() {
                    $("table tbody").find('input[name="record"]').each(function() {
                        if($(this).is(":checked")){
                            $(this).parents("tr").remove();
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
    <div class="outer">
    <div class="biodata">
        <b>PROFIL MAHASISWA <br><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $email = $_POST["email"];
        echo " Nama : " . $nama . "<br>";
        echo " Kelas : " . $kelas . "<br>";
        echo " Email : " . $email;
        } 
        ?>
        </b>
    </div>
    <div class="dashboard">
        <h1>List Daftar Tugas</h1>
    </div>
    <div class="form">
        
    </div>
    <div class="comment">
        <form>
        <input type="text" id="fname" placeholder="Mata Kuliah">
        <input type="text" id="femail" placeholder="Comment">
        <input type="button" class="add-row" value="Tambah Tugas" id="add-row">
    </form>
    <table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Mata Kuliah</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <button type="button" class="delete-row">Done</button>
    </div>
    </div>
    </body>
</html>
