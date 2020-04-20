<?php

$showFeature = true;
$divClass= 'entry__feature';
$a_featured_asset = get_field('article_featured_media_type');

if($a_featured_asset == 'none') {
	$showFeature = false;
} elseif ($a_featured_asset == 'image') {
	$imgObj = get_field('article_featured_image');
	$featureAsset = '<img src="' . $imgObj["url"] . '" alt="' . $imgObj["alt"] . '" class="img-responsive"/>';
} elseif ($a_featured_asset == 'video') {
	$vidType = get_field('article_featured_vid_type');
    $divClass .= ' entry__feature__video';
	if($vidType == 'hosted') {
		$vidObj = get_field('article_featured_vid_hosted');
		$featureAsset = '<video width="100%" height="auto" controls><source src="' . $vidObj["url"] . '" type="video/mp4">Your browser does not support the video tag.</video>';
	} elseif($vidType == 'embed') {
		$featureAsset = '<div class="videoWrapper">';
			$featureAsset .= get_field('article_featured_vid_ytembed');
		$featureAsset .= '</div>';
	}
}

if($showFeature):
    $html = '<div class="' . $divClass . '">' . $featureAsset . '</div>';
    echo $html;
endif;