<h2>Daftar Komentar</h2>
<ul>
<?php while ($row = $guests->fetch(PDO::FETCH_ASSOC)) { ?>
    <li>
        <?= htmlspecialchars($row['name']) ?>: <?= htmlspecialchars($row['comment']) ?>
        <?php if (isset($_SESSION['admin'])) { ?>
            <a href="admin.php?delete_id=<?= $row['id'] ?>">Delete</a>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <?php } ?>
    </li>
<?php } ?>
</ul>
