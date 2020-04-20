<div class="section__wrapper">
    <div class="container">
    <?php
        $infoSec = $data["layout_cols"];
        if($infoSec == '1col'): ?>
        <div class="flex-grid featured">
            <div class="grid-item flex-1">
                <?php handle_section_data($data['left_content'], true); ?>
            </div>
        </div>
    <?php elseif($infoSec == '2coltitle'): ?>
        <div class="grid__header" data-sr-id="5">
            <!-- <h2 class="column-header">What We Do</h2> -->
            <?php handle_section_data($data['top_content'], true); ?>
        </div>
        <div class="flex-grid">
            <div class="grid-item flex-2" data-sr-id="5">
                <?php handle_section_data($data['left_content'], true); ?>
            </div>
            <div class="grid-item flex-2" data-sr-id="5">
                <?php handle_section_data($data['right_content'], true); ?>
            </div>
        </div>
    </div>
        <?php else: ?>
            <div class="flex-grid" style="background-color:<?php echo $data['bg_color']; ?>">
                <div class="grid-item left-content <?php echo $data['left_content']['col_width'];?> <?php echo $data['left_content']['content_type']; ?>-content <?php if($data['left_content']['content_type'] != 'slider'): echo $data['left_content']['animation_type']; ?> load-hidden <?php endif; ?>">
                    <?php handle_section_data($data['left_content'], true); ?>
                </div>
                <div class="grid-item right-content <?php echo $data['right_content']['col_width'];?> <?php echo $data['right_content']['content_type']; ?>-content <?php if($data['right_content']['content_type'] != 'slider'): echo $data['right_content']['animation_type']; ?> load-hidden <?php endif; ?>">
                    <?php handle_section_data($data['right_content'], true); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>
