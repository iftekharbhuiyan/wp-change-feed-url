<?php 
/**
 * change the default RSS Feed URL
 * with your desired URL using WP hook.
 * Reference: https://developer.wordpress.org/reference/hooks/bloginfo_url/
 * Reference: https://developer.wordpress.org/reference/hooks/feed_link/
 */
add_filter('bloginfo_url','custom_rss_feed',10, 2);
add_filter('feed_link','custom_rss_feed',10, 2);
function custom_rss_feed($output, $show) {
	if (in_array($show, array('rss_url','rss2_url','rss','rss2',''))) {
		$output = 'http://your-domain.com/feed';
		return $output; 
	}
}
?>