<?php

// Viser reklamebanner i header
function vis_undertoner_reklamebanner() {
    if ( get_option( 'undertoner_reklamebanner_boolean' ) === '1' ) {
        echo '<div class="reklamebanner_container">
				<div class="reklamebanner">
					<a href="' . get_option( 'undertoner_reklamebanner_hjemmeside' ). '" target="_blank">
						<img src="' . get_option( 'undertoner_reklamebanner_reklamebillede' ). '" width="' . get_option( 'undertoner_reklamebanner_bredde' ). 'px" height="' . get_option( 'undertoner_reklamebanner_hoejde' ). 'px" />
					</a>
				</div>
			</div>';
    }
}

// Forbinder plugin CSS-fil til Undertoners design
function undertoner_reklamebanner_css() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'undertoner_reklamebanner_style', $plugin_url . '/undertoner-reklamebanner.css' );
}
add_action( 'wp_enqueue_scripts', 'undertoner_reklamebanner_css' );

?>
