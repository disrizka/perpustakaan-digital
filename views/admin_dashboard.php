<h2>Admin Dashboard</h2>
<ul>
<?php while ($row = $guests->fetch(PDO::FETCH_ASSOC)) { ?>
    <li>
        <?= htmlspecialchars($row['name']) ?>: <?= htmlspecialchars($row['comment']) ?>
        <a href="admin.php?delete_id=<?= $row['id'] ?>">Delete</a>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
    </li>
<?php } ?>
</ul>
<a href="logout.php">Logout</a>
