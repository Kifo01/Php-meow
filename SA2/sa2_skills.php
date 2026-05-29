<?php
$title = "Skills";
require('sa2_header.php');

$skills = [
    'Web Development' => ['HTML/CSS', 'PHP', 'JavaScript'],
    'Programming' => ['Python', 'Java'],
    'Database' => ['Database Management', 'MySQL'],
    'Tools & Platforms' => ['GitHub', 'VS Code', 'Sales and CRM Tools'],
    'Other Skills' => ['Problem Solving', 'Team Collaboration', 'Adaptive Communication']
];
?>

<div class="resume-section">
    <h2>Technical & Professional Skills</h2>
    
    <?php foreach ($skills as $category => $skillList): ?>
    <div style="margin-bottom:25px;">
        <h3 style="color:#4a6fa5; margin-bottom:12px;"><?= $category ?></h3>
        <div class="skills-grid">
            <?php foreach ($skillList as $skill): ?>
            <div class="skill-item"><?= $skill ?></div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php require('sa2_footer.php'); ?>