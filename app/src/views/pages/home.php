<?php include '../app/src/views/layouts/header.php'; ?>
<?php include '../app/src/views/layouts/nav.php'; ?>
<main>
    <link rel="stylesheet" href="http://localhost/SenSchool/public/assets/css/main_style.css?v=<?php echo time(); ?>">
    <?php foreach ($data['levels'] as $level): ?>
        <div class="level-band">
            <div class="level-header" style="background-image: url('http://localhost/SenSchool/public/assets/images/<?php echo urlencode($level['level']->icon_name); ?>');">
                <h2><?php echo htmlspecialchars($level['level']->level_name); ?></h2>
                <img src="path/to/icon.png" alt="Level Icon">
            </div>
            <div class="level-content">
                <?php foreach ($level['sub_levels'] as $subLevel): ?>
                    <div class="sub-level">
                        <h3><?php echo htmlspecialchars($subLevel['sub_level']->sub_level_name); ?></h3>
                        <p>Description or additional info here</p>
                        <div class="courses">
                            <?php foreach ($subLevel['courses'] as $course): ?>
                                <div class="course">
                                    <h4><?php echo htmlspecialchars($course->course_name); ?></h4>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php include '../app/src/views/layouts/footer.php'; ?>
