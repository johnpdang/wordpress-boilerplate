<div id="client-list" class="section__wrapper">
    <div class="container">
        <div class="grid__header">
            <h3><?php echo get_field('block_clients_title'); ?></h3>
            <p><?php echo get_field('block_clients_summary'); ?></p>
        </div>
        <div class="tab__wrapper">
            <div class="tab__list">
                <button type="button" class="active" data-target="tab__1">A-M</button>
                <button type="button" data-target="tab__2">N-Z</button>
            </div>
        </div>
        <div class="tab__content">

            <div id="tab__1" class="tab__display">
                <div class="flex flex-grid">
                    <?php echo get_field('block_clients_a-m'); ?>

                </div>
            </div>

            <div id="tab__2" class="tab__display hidden">
                <div class="flex flex-grid">
                    <?php echo get_field('block_clients_n-z'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
