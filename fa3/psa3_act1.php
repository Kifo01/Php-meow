<?php
$title = "Activity 1";

$students = [
    ["name" => "Mei", "age" => 20, "bday" => "2004-05-12", "contact" => "09171234567", "img" => "https://davedalessiowrites.wordpress.com/wp-content/uploads/2024/06/mei-aihara.webp"],
    ["name" => "Andrew", "age" => 19, "bday" => "2005-01-20", "contact" => "09189876543", "img" => "https://pbs.twimg.com/media/GV9CnhXaoAMIEcs?format=jpg&name=900x900"],
    ["name" => "Yuna", "age" => 21, "bday" => "2003-11-05", "contact" => "09195554444", "img" => "https://i.pinimg.com/736x/28/ff/e2/28ffe25b246320186be1122edd940f5f.jpg"],
    ["name" => "Haegu", "age" => 35, "bday" => "2004-08-15", "contact" => "09201112222", "img" => "https://i.pinimg.com/1200x/2e/c5/93/2ec593b13fcb7656d0eb4d91ca65eea6.jpg"],
    ["name" => "Seju", "age" => 22, "bday" => "2002-03-30", "contact" => "09213334444", "img" => "https://i.pinimg.com/1200x/b1/e5/06/b1e50689bf38445b1d655481ad487080.jpg"],
    ["name" => "Mafuyu", "age" => 19, "bday" => "2005-07-22", "contact" => "09225556666", "img" => "https://i.pinimg.com/736x/ee/05/38/ee05387ac5f0cee0caa51273a1a063cb.jpg"],
    ["name" => "Kim", "age" => 20, "bday" => "2004-12-01", "contact" => "09237778888", "img" => "https://i.pinimg.com/1200x/d9/31/eb/d931eb7bef556d760c891b877d29545e.jpg"],
    ["name" => "Juyeon", "age" => 21, "bday" => "2003-09-10", "contact" => "09249990000", "img" => "https://i.pinimg.com/1200x/8c/5a/72/8c5a7281492f6f8e392ea6dcde92e4f5.jpg"],
    ["name" => "Rose", "age" => 20, "bday" => "2004-04-18", "contact" => "09251231234", "img" => "https://i.pinimg.com/1200x/f7/42/04/f742049a23e89b101cfa0f6863ce2bd0.jpg"],
    ["name" => "Sera", "age" => 19, "bday" => "2005-02-28", "contact" => "09264567890", "img" => "https://i.pinimg.com/1200x/82/d8/e3/82d8e36caae9bb8f42c1662231cdbc36.jpg"]
];

usort($students, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

require('header.php');
?>

<h2>Directory (Alphabetically)</h2>

<table class="data-table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><img src="<?= $student['img'] ?>" alt="Profile" style="width:40px; height:40px;"></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['age'] ?></td>
            <td><?= $student['bday'] ?></td>
            <td><?= $student['contact'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- NO FOOTER INCLUDED -->
</div>
</body>
</html>