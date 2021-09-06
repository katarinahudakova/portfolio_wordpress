<?php
function portfolio_enqueue_style() {
    wp_enqueue_style("portfolio-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts","portfolio_enqueue_style");
?>