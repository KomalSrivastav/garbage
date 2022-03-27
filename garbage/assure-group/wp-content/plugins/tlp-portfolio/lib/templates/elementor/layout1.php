<?php

/**
 * @var string $img
 * @var string $link
 * @var string $item_link
 * @var string $link_target
 * @var string $title
 * @var string $imgFull
 * @var string $grid
 * @var string $isoFilter
 * @var string $short_d
 * @var string $image_area
 * @var string $content_area
 * @var string $client_name
 * @var string $completed_date
 * @var string $tools
 * @var string categories
 */

$html = null;
$html .= "<div class='tlp-col-lg-{$grid} tlp-col-md-{$grid} tlp-col-sm-{$tgrid} tlp-col-xs-{$mgrid} tlp-single-item tlp-grid-item tlp-equal-height'>";
$html .= '<div class="tlp-portfolio-item">';
if ( $img ) {
	$html .= '<div class="tlp-portfolio-thum tlp-item">';
	$html .= $img;
	$html .= '<div class="tlp-overlay">';
	$html .= '<p class="link-icon">';
	if( $image_zoom ){
		$html .= '<a class="tlp-zoom" href="' . $imgFull . '"><i class="demo-icon icon-zoom-in"></i></a>';
	}
	if( !empty( $enable_page_link ) ){
		$html .= '<a target="'.$link_target.'" href="' . $plink . '"><i class="demo-icon icon-link-ext"></i></a>';
	}
	
	$html .= '</p>';
	$html .= '</div>';
	$html .= '</div>';
}

$optional_field = null ;
$optional_content = null ;

if( !empty( $client_name ) ){
	$optional_content .= '<li class="client-name"><label>'.__('Client Name','tlp-portfolio').':</label>'.$client_name.'</li>';
}
if( !empty( $project_url ) ){
	$optional_content .= '<li class="client-name"><label>'.__('Project URL','tlp-portfolio').':</label><a  href="' . esc_url($plink) . '" target="_blank">'.esc_url($plink).'</a></li>';
}

if( !empty( $completed_date ) ){
	$optional_content .= '<li class="client-name"><label>'.__('Completed Date','tlp-portfolio').':</label>'.$completed_date.'</li>';
}
if( !empty( $categories ) ){
	$optional_content .= '<li class="pfp-categories"><label>'.__("Categories :", 'tlp-portfolio').'</label>' . $categories . '</li>';
}
if( !empty( $tools ) ){
	$optional_content .= '<li class="client-name"><label>'.__('Tools','tlp-portfolio').':</label>'.$tools.'</li>';
}

if( $optional_content ){
	$optional_field = sprintf( '<ul>%s</ul>', $optional_content );
}

$description_html = sprintf( '<div class="tlp-portfolio-sd">%s</div>', $short_d );
if( !empty( $enable_page_link ) ){
	$display_title = sprintf( '<h3><a target="%s" href="%s">%s </a></h3>',
		$link_target,
		$plink,
		$title
	);
}else{
	$display_title = sprintf( '<h3>%s</h3>',$title );
}

if( !empty( $title ) || !empty( $short_d )){ 
	
	$html .= sprintf( '<div class="tlp-content"><div class="tlp-content-holder"> %s %s %s</div ></div > ',
		!empty( $title ) ? $display_title : '',
		!empty( $short_d ) ? $description_html : '',//
		$optional_field
	);
}
$html .= '</div>';
$html .= '</div>';

echo wp_kses_post( $html );