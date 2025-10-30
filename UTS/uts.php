<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            function saveData() {
                var data = [];
                $("table tbody tr").each(function() {
                    var mk = $(this).find("td:eq(1)").text();
                    var comment = $(this).find("td:eq(2)").text();
                    var deadline = $(this).find("td:eq(3)").text();
                    data.push({ mk: mk, comment: comment, deadline: deadline });
                });
                localStorage.setItem("daftarTugas", JSON.stringify(data));
            }
            function loadData() {
                var data = localStorage.getItem("daftarTugas");
                if (data) {
                    var tugas = JSON.parse(data);
                    tugas.forEach(function(item) {
                        var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + 
                            item.mk + "</td><td>" + item.comment + "</td><td>" + item.deadline + "</td></tr>";
                        $("table tbody").append(markup);
                    });
                }
            }
            loadData();
            
            $("#add-row").click(function() {
                var mk = $("#fmk").val();
                var comment = $("#fc").val();
                var deadlineInput = $("#fdeadline").val();
                if (!mk || !comment) {
                    alert("Mohon isi Mata Kuliah dan Comment!");
                    return;
                }

                var deadlineText = "Tidak ada";
                if (deadlineInput) {
                    var deadline = new Date(deadlineInput);
                    var day = deadline.getDate();
                    var monthNames = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
                    var month = monthNames[deadline.getMonth()];
                    var year = deadline.getFullYear();
                    deadlineText = day + " " + month + " " + year;
                }

                var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + 
                    mk + "</td><td>" + comment + "</td><td>" + deadlineText + "</td></tr>";

                $("table tbody").append(markup);
                saveData();
                $("#fmk").val('');
                $("#fc").val('');
                $("#fdeadline").val('');
            });

            $(".delete-row").click(function() {
                var checkedRows = $("table tbody").find('input[name="record"]:checked');
                if (checkedRows.length === 0) {
                    alert("Pilih tugas yang sudah selesai!");
                    return;
                }
                checkedRows.each(function() {
                    $(this).closest("tr").remove();
                });
                saveData(); 
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
        <form>
            <h2>Form Tugas</h2>
            <input type="text" id="fmk" placeholder="Mata Kuliah">
            <input type="text" id="fc" placeholder="Comment">
            <div class="deadline-input">
                <label for="fdeadline">Deadline:</label>
                <input type="date" id="fdeadline">
            </div>
            <br>
            <input type="button" class="add-row" value="Tambah Tugas" id="add-row">
        </form>
    </div>

    <div class="comment">
        <h1>List Daftar Tugas</h1>
        <table>
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Mata Kuliah</th>
                    <th>Comment</th>
                    <th>Deadline</th>
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
