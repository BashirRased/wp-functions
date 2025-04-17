

<!-- Post Comment Count Show -->
<?php comments_popup_link( false|string $zero = false, false|string $one = false, false|string $more = false, string $css_class = '', false|string $none = false ) ?>

Parameters #
01. $zero
    (false|string) (Optional) String to display when no comments.
    Default value: false

02. $one
    (false|string) (Optional) String to display when only one comment is available.
    Default value: false

03. $more
    (false|string) (Optional) String to display when there are more than one comment.
    Default value: false

04. $css_class
    (string) (Optional) CSS class to use for comments.
    Default value: ''

05. $none
    (false|string) (Optional) String to display when comments have been turned off.
    Default value: false

<!-- Post Author Link Show -->
<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'), $author_nicename)); ?>" title="<?php echo esc_attr(get_the_author()); ?>"><?php the_author(); ?></a>

<!-- Post Date -->
<?php 
    $rb_archive_year  = get_the_time('Y'); 
    $rb_archive_month = get_the_time('m'); 
    $rb_archive_day   = get_the_time('d'); 
?>
<a href="<?php echo esc_url( get_day_link( $rb_archive_year, $rb_archive_month, $rb_archive_day) ); ?>"><?php echo esc_html( get_the_date('j F Y') ); ?></a>

<!-- Post Edit -->
<?php edit_post_link( string $text = null, string $before = '', string $after = '', int|WP_Post $id, string $class = 'post-edit-link' ); ?>
<?php if(is_user_logged_in()):
edit_post_link(__('Edit','rb-martin'),'<span>','</span>');
endif; ?>

Parameters #
01. $text
    (string) (Optional) Anchor text. If null, default is 'Edit This'.
    Default value: null

02. $before
    (string) (Optional) Display before edit link.
    Default value: ''

03. $after
    (string) (Optional) Display after edit link.
    Default value: ''

04. $id
    (int|WP_Post) (Optional) Post ID or post object. Default is the global $post.

05. $class
    (string) (Optional) Add custom class to link.
    Default value: 'post-edit-link'

<!-- Post Category Links Show -->
<?php get_category_parents( int $category_id, bool $link = false, string $separator = '/', bool $nicename = false, array $deprecated = array() ); ?>


<?php if (has_category()) : the_category(); endif; ?>
<?php the_category(string $separator = '', string $parents = '', int $post_id = false); ?>

01. $separator
(string) (Optional) Separator between the categories. By default, the links are placed in an unordered list. An empty string will result in the default behavior.
Default value: ''

02. $parents
(string) (Optional) How to display the parents.
Default value: ''

03. $post_id
(int) (Optional) Post ID to retrieve categories.
Default value: false

<!-- Post Tags Links Show -->
<?php the_tags($before, $separator, $after); ?>

<!-- Post Taxonomy Links Show -->
<?php get_the_terms(int|WP_Post $post, string $taxonomy); ?>

WP_Term Object
(
[term_id] =>
[name] =>
[slug] =>
[term_group] =>
[term_taxonomy_id] =>
[taxonomy] =>
[description] =>
[parent] =>
[count] =>
[filter] =>
)

<?php
    $rb_portfolio_one_taxs = get_the_terms(get_the_ID(),'portfolio-cat');
    if (!empty($rb_portfolio_one_taxs)) :
    foreach($rb_portfolio_one_taxs as $rb_portfolio_one_tax) :
    $rb_portfolio_one_link_text = $rb_portfolio_one_tax->name;
    $rb_portfolio_one_link = get_term_link($rb_portfolio_one_tax,'portfolio-cat');
    endforeach;
    endif;
?>
<?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>
<?php echo $term->name; // will show the name ?>

You can use it for the all of the following values:
01. term_id
02. name
03. slug
04. term_group
05. term_taxonomy_id
06. taxonomy
07. description
08. parent
09. count

<?php the_taxonomies(array $args = array('post','before','sep','after')); ?>

01. 'post'
(int|WP_Post) Post ID or object to get taxonomies of. Default current post.

02. 'before'
(string) Displays before the taxonomies. Default empty string.

03. 'sep'
(string) Separates each taxonomy. Default is a space.

04. 'after'
(string) Displays after the taxonomies. Default empty string.

Default value: array()


<!-- Post Number of Words Show -->
<?php echo wp_trim_words(get_the_content(), $num_words, $more); ?>


// Category Post Query
<?php
$tech = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => 4,
	'order' => 'DESC',
	'orderby' => 'title',
	'category_name' => 'Technology'
));
?>

// Random Post Query
<?php
$tech = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => 4,
	'order' => 'DESC',
	'orderby' => 'rand',
	'category_name' => 'Technology'
));
?>