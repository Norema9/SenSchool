<nav>
    <div class="navbar">
        <a href="./pages/index.php" title='Accueil - SenSchool ' class = 'selected home'>Home</a>
        
        <?php foreach ($data['levels'] as $item): ?>
            <!-- Dropdown for each level -->
            <div class='dropdown'>
                <button class='dropdown_button'><?php echo htmlspecialchars($item['level']->level_name); ?></button>
                <div class='dropdown_content'>
                    <?php foreach ($item['sub_levels'] as $subLevel): ?>
                        <a href="#"><?php echo htmlspecialchars($subLevel['sub_level']->sub_level_name); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <a href="http://localhost/SenSchool/app/src/views/pages/about.php" class = "nav_right">About</a>
        <a href="http://localhost/SenSchool/app/src/views/pages/contact.php" class = "nav_right">Contact</a>
    </div>
</nav> 