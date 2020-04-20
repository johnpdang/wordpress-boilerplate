<?php

$results = get_query_results($caseStudyArgs);
$total_count = count($results);
$display_count = 0;

?>


<section id="case-studies" class="section__wrapper bg_gradient">
    <div class="container">
        <div class="grid__header grid__header-lg">
            <h3>Case Studies</h3>
            <p>Take a look at some of our success stories, showcasing challenges met and solutions achieved through the knowledge, expertise and dedication that SYASL provides.</p>
        </div>
        <div class="flex-grid flex-start">
            <?php foreach($results as $rid):
                $termTitle = get_the_terms($rid, 'case-study-type')[0]->name;
                ?>
                <div class="case-study item flex-2">
                    <p class="eyebrow"><?php echo $termTitle; ?></p>
                    <h6><?php echo get_the_title($rid); ?></h6>
                    <a href="<?php echo get_the_permalink($rid); ?>" class="button">READ MORE</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
