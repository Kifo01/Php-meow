<?php
$title = "Activity 1";
require('header.php');
?>

<h1 style="text-align:center; margin-bottom:30px; color:#4a6fa5;">GAMING STORIES</h1>

<div style="display:flex; width:100%; border:3px solid #000; border-radius:8px; overflow:hidden; align-items:stretch;">
    
    <a href="story1.php" class="story-banner" style="flex:1; text-decoration:none; border-right:2px solid #000; display:block;">
        <img src="https://images8.alphacoders.com/716/thumb-1920-716460.jpg" 
             alt="Story 1" style="width:100%; height:700px; object-fit:cover; display:block;">
        <div class="story-label">Call of Duty: Infinite Warfare</div>
    </a>
    
    <a href="story2.php" class="story-banner" style="flex:1; text-decoration:none; border-right:2px solid #000; display:block;">
        <img src="https://i.pinimg.com/1200x/89/95/e3/8995e32b6fbc1940cada571dc5ffe2f9.jpg" 
             alt="Story 2" style="width:100%; height:700px; object-fit:cover; display:block;">
        <div class="story-label">Assassins Creed: Odyssey</div>
    </a>
    
    <a href="story3.php" class="story-banner" style="flex:1; text-decoration:none; border-right:2px solid #000; display:block;">
        <img src="https://www.wallpaperflare.com/static/640/564/898/uncharted-4-a-thief-s-end-video-games-uncharted-thief-wallpaper.jpg" 
             alt="Story 3" style="width:100%; height:700px; object-fit:cover; display:block;">
        <div class="story-label">Uncharted 4</div>
    </a>
    
    <a href="story4.php" class="story-banner" style="flex:1; text-decoration:none; border-right:2px solid #000; display:block;">
        <img src="https://wallpapers.com/images/high/v-portrait-photo-in-cyberpunk-2077-for-android-utmix59jtm9wug8t.webp" 
             alt="Story 4" style="width:100%; height:700px; object-fit:cover; display:block;">
        <div class="story-label">Cyberpunk 2077</div>
    </a>
 
    <a href="story5.php" class="story-banner" style="flex:1; text-decoration:none; display:block;">
        <img src="https://i.pinimg.com/1200x/e3/1f/af/e31faffbd31e968017a7bb1ead22bc1a.jpg" 
             alt="Story 5" style="width:100%; height:700px; object-fit:cover; display:block;">
        <div class="story-label">Tomb Raider</div>
    </a>
    
</div>

<?php require('footer.php'); ?>