<?php
require_once "fa6_db.php";

$message = "";
$message_type = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["save_dog"])) {
    $dog_name = trim($_POST["dog_name"] ?? "");
    $breed = trim($_POST["breed"] ?? "");
    $age = (int) ($_POST["age"] ?? 0);
    $address = trim($_POST["address"] ?? "");
    $color = trim($_POST["color"] ?? "");
    $height = (float) ($_POST["height"] ?? 0);
    $weight = (float) ($_POST["weight"] ?? 0);

    if ($dog_name === "" || $breed === "" || $age <= 0 || $address === "" || $color === "" || $height <= 0 || $weight <= 0) {
        $message = "Please complete all dog information fields with valid values.";
        $message_type = "error";
    } else {
        $statement = $connection->prepare(
            "INSERT INTO fa6_dogs (dog_name, breed, age, address, color, height, weight)
             VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $statement->bind_param("ssissdd", $dog_name, $breed, $age, $address, $color, $height, $weight);

        if ($statement->execute()) {
            $message = "Dog information was saved successfully.";
            $message_type = "success";
        } else {
            $message = "Error saving dog information: " . $connection->error;
            $message_type = "error";
        }

        $statement->close();
    }
}

$connection->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA6 Dog Registration</title>
    <link rel="stylesheet" href="fa6_styles.css">
</head>
<body>
    <main class="page-shell">
        <header class="page-header">
            <div>
                <p class="eyebrow">Formative Assessment 6</p>
                <h1>Dog Registration</h1>
            </div>
            <nav class="nav-actions" aria-label="Dog pages">
                <a href="fa6_dog_register.php" class="active">Register</a>
                <a href="fa6_dog_view.php">View Records</a>
            </nav>
        </header>

        <?php if ($message !== ""): ?>
            <section class="message <?= $message_type ?>">
                <?= fa6_clean_text($message) ?>
            </section>
        <?php endif; ?>

        <section class="content-grid">
            <form method="POST" action="fa6_dog_register.php" class="form-panel">
                <h2>Dog Information</h2>

                <div class="form-row">
                    <label>
                        Name
                        <input type="text" name="dog_name" required placeholder="Julian">
                    </label>
                    <label>
                        Breed
                        <input type="text" name="breed" required placeholder="Golden Retriever">
                    </label>
                </div>

                <div class="form-row three">
                    <label>
                        Age
                        <input type="number" name="age" required min="1" max="99" placeholder="4">
                    </label>
                    <label>
                        Height (cm)
                        <input type="number" name="height" required min="1" step="0.01" placeholder="61.00">
                    </label>
                    <label>
                        Weight (kg)
                        <input type="number" name="weight" required min="1" step="0.01" placeholder="30.50">
                    </label>
                </div>

                <div class="form-row">
                    <label>
                        Color
                        <input type="text" name="color" required placeholder="Golden">
                    </label>
                    <label>
                        Address
                        <input type="text" name="address" required placeholder="Sampaloc, Manila">
                    </label>
                </div>

                <button type="submit" name="save_dog">Save Dog Record</button>
            </form>

            <aside class="side-panel">
                <h2>Database Setup</h2>
                <a href="fa6_dog_view.php" class="panel-link">Open Dog Records</a>
            </aside>
        </section>
    </main>
</body>
</html>
