<!DOCTYPE html>
<html>
<head>
    <title>Attendance List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Attendance List<h1>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Attendance ID</th>
                        <th class="text-center">Title Short</th>
                        <th class="text-center">Date Attendance</th>
                        <th class="text-center">Time Attendance</th>
                        <th class="text-center">ID Class</th>
                        <th class="text-center">Name Subject</th>
                        <th class="text-center">Email Lecturer</th>
                        <th class="text-center">Name Lecturer</th>
                        <th class="text-center">Building Room</th>
                        <th class="text-center">Room Latitude</th>
                        <th class="text-center">Room Longitude</th>
                        <th class="text-center">Max Radius</th>
                        <th class="text-center">Created At</th>
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
                    $sql = "SELECT * FROM tbl_attendance_list";
                    $result = mysqli_query($conn, $sql);

                    //Tampilkan data dalam tabel
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id_attendance'] . "</td>";
                            echo "<td>" . $row['title_short'] . "</td>";
                            echo "<td>" . $row['date_attendance'] . "</td>";
                            echo "<td>" . $row['time_attendance'] . "</td>";
                            echo "<td>" . $row['id_class'] . "</td>";
                            echo "<td>" . $row['name_subject'] . "</td>";
                            echo "<td>" . $row['email_lecturer'] . "</td>";
                            echo "<td>" . $row['name_lecturer'] . "</td>";
                            echo "<td>" . $row['room_latitude'] . "</td>";
                            echo "<td>" . $row['room_longitude'] . "</td>";
                            echo "<td>" . $row['max_radius'] . "</td>"; 
                            echo "<td>" . $row['created_at'] . "</td>";
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