<?php
require_once "fa6_db.php";

$result = $connection->query("SELECT id, dog_name, breed, age, address, color, height, weight, created_at FROM fa6_dogs ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA6 Dog Records</title>
    <link rel="stylesheet" href="fa6_styles.css">
</head>
<body>
    <main class="page-shell wide">
        <header class="page-header">
            <div>
                <p class="eyebrow">Pre-Summative Assessment 6</p>
                <h1>Dog Records</h1>
            </div>
            <nav class="nav-actions" aria-label="Dog pages">
                <a href="fa6_dog_register.php">Register</a>
                <a href="fa6_dog_view.php" class="active">View Records</a>
            </nav>
        </header>

        <section class="table-panel">
            <div class="table-header">
                <h2>Registered Dogs</h2>
                <span><?= $result ? $result->num_rows : 0 ?> record(s)</span>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Breed</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Color</th>
                            <th>Height</th>
                            <th>Weight</th>
                            <th>Date Saved</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result && $result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= fa6_clean_text($row["id"]) ?></td>
                                    <td><?= fa6_clean_text($row["dog_name"]) ?></td>
                                    <td><?= fa6_clean_text($row["breed"]) ?></td>
                                    <td><?= fa6_clean_text($row["age"]) ?></td>
                                    <td><?= fa6_clean_text($row["address"]) ?></td>
                                    <td><?= fa6_clean_text($row["color"]) ?></td>
                                    <td><?= fa6_clean_text($row["height"]) ?> cm</td>
                                    <td><?= fa6_clean_text($row["weight"]) ?> kg</td>
                                    <td><?= fa6_clean_text($row["created_at"]) ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="empty-state">No dog records yet. Add a record from the registration page.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>
<?php
$connection->close();
?>
