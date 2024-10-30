<?php
require('../../../../wp-blog-header.php');
header('Content-Type: text/xml');
echo '<!-- <?xml version="1.0" encoding="UTF-8"?> -->';
?>
<kakiheboh>
<?php
$args = array( 'numberposts' => 1, 'orderby' => 'rand' );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
	<tajuk><?php the_title(); ?></tajuk>
	<hyperlink><?php the_permalink(); ?></hyperlink>
<?php endforeach; ?>
</kakiheboh>