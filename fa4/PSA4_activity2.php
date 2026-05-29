<?php
$title = "Activity 2";

$names = [
    "ana reyes", "carlos santos", "maria garcia", "jose cruz",
    "pedro lopez", "sofia diaz", "juan dela cruz", "elena flores",
    "miguel torres", "lucia gomez", "rafael mendez", "carmen ruiz",
    "antonio morales", "isabel ortiz", "francisco jimenez", "teresa romero",
    "daniel vazquez", "patricia ramos", "alejandro castro", "gabriela silva"
];

require('header.php');
?>

<h2>PHP String Functions</h2>

<table class="data-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Original Name</th>
            <th>Char Count</th>
            <th>Uppercase First</th>
            <th>Vowels Replaced</th>
            <th>Pos of 'a'</th>
            <th>Reversed</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $count = 1;
        foreach ($names as $name): 
            $charCount = strlen($name);
            $upperFirst = ucfirst($name);
            $vowelsReplaced = preg_replace('/[aeiou]/i', '@', $name);
            $posOfA = strpos($name, 'a');
            $reversed = strrev($name);
        ?>
        <tr>
            <td><?= $count++ ?></td>
            <td><?= $name ?></td>
            <td><?= $charCount ?></td>
            <td><?= $upperFirst ?></td>
            <td><?= $vowelsReplaced ?></td>
            <td><?= $posOfA !== false ? $posOfA : '-' ?></td>
            <td><?= $reversed ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
<?php require('footer.php'); ?>