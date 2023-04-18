<?php
$database = new Database();
$data = $database->main("mahasiswa");
?>
<div class="main">
    <a class="tambah" href="add">Add</a>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach($data as $row) {
        ?>
            <tr>
            <td><?=$row['nim']; ?></td>
            <td><?=$row['nama']; ?></td>
            <td><?=$row['kelas']; ?></td>
            <td>
              <a href="update?nim=<?= $row['nim']; ?>"><button>Update</button></a>
              <a href="hapus?nim=<?= $row['nim']; ?>"><button>Delete</button></a>
            </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
