<?php
// Include WordPress functions
require_once('wp-load.php');

// Number of posts per page
$posts_per_page = 10;

// Get the current page number
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Arguments for the query
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $posts_per_page,
    'paged' => $paged
);

// Query posts
$query = new WP_Query($args);

// Display posts
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Display post title and content
        ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
        <?php
    endwhile;

    // Pagination
    $total_pages = $query->max_num_pages;
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        echo '<div class="pagination">';
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('&laquo; Prev'),
            'next_text' => __('Next &raquo;'),
        ));
        echo '</div>';
    }
else :
    // No posts found
    echo 'No posts found';
endif;

// Reset post data
wp_reset_postdata();

