<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo "<h2>User</h2>
<form method='POST' action='form_user.php'>
<input type='submit' value='Tambah User'>
</form>
<table>
<tr><th>no</th><th>username</th><th>nama lengkap</th><th>email</th><th>aksi</th></tr>";

include "../config/koneksi.php";
$koneksi = mysqli_connect("localhost", "root", "", "cms");

$tampil = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user");
$no = 1;
while ($r = mysqli_fetch_array($tampil)) {
    echo "<tr><td>$no</td>
    <td>$r[id_user]</td>
    <td>$r[nama_lengkap]</td>
    <td><a href='mailto:$r[email]'>$r[email]</a></td>
    <td><a href='edit_user.php?id=$r[id_user]'>Edit</a> |
    <a href='hapus_user.php?id=$r[id_user]'>Hapus</a>
    </td></tr>";
    $no++;
}

echo "</table>";
?>
