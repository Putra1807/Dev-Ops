<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa<h1>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Registration Number</th>
                        <th class="text-center">NIM Number</th>
                        <th class="text-center">Email Name</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Created at</th>
                        <th class="text-center">Updated at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Koneksi ke database
                    $conn = mysqli_connect ('localhost', 'root', '12345', 'db_unklab');

                    //Periksa koneksi
                    if(!$conn) {
                        die ("Koneksi Gagal:" . mysqli_connect_error());
                    }

                    //Query untuk mendapatkan data mahasiswa
                    $sql = "SELECT * FROM tbl_students";
                    $result = mysqli_query($conn, $sql);

                    //Tampilkan data dalam tabel
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['reg_number'] . "</td>";
                            echo "<td>" . $row['nim_number'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['fullname'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "<td>" . $row['updated_at'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                    echo "<tr><td colspan='6'>Tidak ada data mahasiswa. </td></tr>";
                    }

                    //Tutup koneksi
                    mysqli_close($conn);
                    ?>
                </tbody>
       </table>
    </div>
</body>
</html>