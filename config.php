<?php 
$app_config = array();

/**
 * Configure where the engine should look to
 * find entries for this blog/article collection
 */
$app_config['post_directory'] = 'site-data/blog/entries';

$app_config['page_directory'] = 'site-data/blog/static';

/**
 * Configure the id of the blog (this is where the
 * blog is on the web, i.e example.com/yourblog)
 */
$app_config['id'] = 'blog';

/**
 * Configure the title of the blog 
 */
$app_config['title'] = 'My Blog';
$app_config['short_title'] = '';

/**
 * Configure the blog's (brief) description/catchline
 */
$app_config['catchline'] = "Read My Posts";

/**
 * Insert any comment code (such as disqus) or 
 * other code you would like inserted on each 
 * post page here.
 */
$app_config['comment_code'] = '';

/**
 * Location of the page template
 */
$app_config['template'] = NWEB_ROOT.'/config/template.d/generic_template.php';


?>
