<?php
get_header();

$projectTitle = get_the_title();
$projectDescription = get_field('description');
$projectContent = get_the_content();

?>

<div class="single-projects">
    <section class="section projects-section">
        <section class="section dark-bg headline-container">
            <div class="container" data-before="<?php echo $projectTitle ?>">
                <div class="headline-side">
                    <h1 class="headline-title"><?php echo $projectTitle ?></h1>
                    <p class="headline-desc"><?php echo $projectDescription ?></p>
                </div>
            </div>
        </section>
    </section>
</div>

<?php
get_footer();
?>
