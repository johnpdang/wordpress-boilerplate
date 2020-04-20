<?php
$quote_text = get_field('block_quote_text');
$quote_src = get_field('block_quote_src');
$quote_cta = get_field('block_quote_cta');
$isHome = false;
$quoteClass = 'blockquote';
if(is_front_page() || is_home()) {
    $isHome = true;
    $quoteStyleClass = 'blockquote_bg bg_image quote--featured text-center';
    $quoteClass .= ' blockquote_alt';
// } elseif (is_page('association-management')) {
//     $quoteStyleClass = 'blockquote_bg-alt';
} else {
    $quoteStyleClass = 'blockquote_bg-alt offsety';
}
?>
<?php if($quote_text): ?>
    <div data-animate="fade-in-up-0" class="<?php echo $quoteStyleClass; ?>">
        <div class="container">
            <blockquote class="<?php echo $quoteClass; ?>">
                <?php if($quote_text): ?><h2><?php echo $quote_text; ?></h2><?php endif; ?>
                <?php if($quote_src): ?><p><?php echo $quote_src; ?></p><?php endif; ?>
                <?php if($quote_cta): ?><a class="button" href="<?php echo $quote_cta["url"]; ?>"><?php echo $quote_cta["title"]; ?></a><?php endif; ?>
            </blockquote>
        </div>
    </div>
<?php endif; ?>
