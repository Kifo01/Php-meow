<?php
$title = "Activity 1";
require('sa2_header.php');

$fruits = [
    [
        'name' => 'Apple',
        'description' => 'A sweet, edible fruit produced by an apple tree.',
        'facts' => 'Rich in fiber, Contains vitamin C, Helps heart health',
        'image' => 'https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=100'
    ],
    [
        'name' => 'Banana',
        'description' => 'An elongated, edible fruit produced by large herbaceous flowering plants.',
        'facts' => 'High in potassium, Good source of vitamin B6, Provides quick energy',
        'image' => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=100'
    ],
    [
        'name' => 'Blueberry',
        'description' => 'A perennial flowering plant with blue or purple berries.',
        'facts' => 'High in antioxidants, Supports brain health, Rich in vitamin K',
        'image' => 'https://images.unsplash.com/photo-1498557850523-fd3d118b962e?w=100'
    ],
    [
        'name' => 'Grapes',
        'description' => 'A fruit of the deciduous woody vines of the flowering plant genus Vitis.',
        'facts' => 'Contains resveratrol, Supports heart health, Good for eye health',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Grapes%2C_Rostov-on-Don%2C_Russia.jpg/1280px-Grapes%2C_Rostov-on-Don%2C_Russia.jpg'
    ],
    [
        'name' => 'Kiwi',
        'description' => 'The edible berry of a multi-species genus of woody vines.',
        'facts' => 'High in vitamin C, Contains vitamin K, Supports digestive health',
        'image' => 'https://cdn.wikifarmer.com/images/detailed/2024/12/11%20Interesting%20Facts%20about%20Kiwifruit.png'
    ],
    [
        'name' => 'Mango',
        'description' => 'A juicy stone fruit produced from tropical trees.',
        'facts' => 'Rich in vitamin C, Contains digestive enzymes, Good for skin health',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Carabao_mangoes_%28Philippines%29.jpg'
    ],
    [
        'name' => 'Orange',
        'description' => 'The fruit of the citrus species Citrus x sinensis.',
        'facts' => 'Excellent source of vitamin C, Contains folate, Supports immune system',
        'image' => 'https://www.quanta.org/orange/orange.jpg'
    ],
    [
        'name' => 'Pineapple',
        'description' => 'A tropical plant with an edible fruit.',
        'facts' => 'Contains bromelain enzyme, Rich in manganese, May reduce inflammation',
        'image' => 'https://images.unsplash.com/photo-1550258987-190a2d41a8ba?w=100'
    ],
    [
        'name' => 'Strawberry',
        'description' => 'A widely grown hybrid species of the genus Fragaria.',
        'facts' => 'High in vitamin C, Contains antioxidants, May improve heart health',
        'image' => 'https://images.unsplash.com/photo-1464965911861-746a04b4bca6?w=100'
    ],
    [
        'name' => 'Watermelon',
        'description' => 'A flowering plant species of the Cucurbitaceae family.',
        'facts' => '92% water content, Contains lycopene, Good for hydration',
        'image' => 'https://images.unsplash.com/photo-1587049352846-4a222e784d38?w=100'
    ]
];

// Sort fruits alphabetically by name
usort($fruits, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<h2 style="text-align:center; color:#4a6fa5; margin-bottom:40px;">Fruit Directory</h2>

<table style="width:100%; border-collapse:collapse; margin-top:20px;">
    <thead>
        <tr style="background:#4a6fa5; color:white;">
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Image</th>
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Name</th>
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Description</th>
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Facts</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fruits as $index => $fruit): ?>
        <tr style="<?= $index % 2 == 0 ? 'background:#f9f9f9;' : 'background:white;' ?>">
            <td style="padding:12px; border:1px solid #ddd;">
                <img src="<?= $fruit['image'] ?>" alt="<?= $fruit['name'] ?>" style="width:60px; height:60px; object-fit:cover; border-radius:50%;">
            </td>
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#4a6fa5;"><?= $fruit['name'] ?></td>
            <td style="padding:12px; border:1px solid #ddd; color:#555;"><?= $fruit['description'] ?></td>
            <td style="padding:12px; border:1px solid #ddd; color:#555;"><?= $fruit['facts'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require('sa2_footer.php'); ?>