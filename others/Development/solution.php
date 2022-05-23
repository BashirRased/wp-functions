<?php

// Solution - 01
foreach($values as $key => $value){
    $value = array();
    $value[] = $value->name;
}

fetch
while($data = $req->fetch()){
    $pass = $data['password'];
    print_r($data);
}

$user = $req->fetch(PDO::FETCH_OBJ);
  if ($user && password_verify($_POST['password'], $user->password)) {


$terms = get_terms( array(
    'taxonomy'   => 'custom_taxonomy_name', // Swap in your custom taxonomy name
    'hide_empty' => true, 
));

https://gist.github.com/dalethedeveloper/3823530

if ( 'page' === get_option('show_on_front') && get_option('page_for_posts'));

<?php echo get_permalink(get_option('page_for_posts')); ?>


get_queried_object()->term_id;

$post_parent = wp_get_post_parent_id(get_the_ID());

get_term_link();
get_category_link();
get_category_parents();


// Get the queried object and sanitize it
$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());
// Get the page slug
$slug = $current_page->post_name;


$permalink_structure = get_option('permalink_structure',true);

$permalink_items = array_filter(explode('/',$permalink_structure));

/** */
Instead of

$name = $field[‘name’];

I wrote:

if( is_array($field) ) {

$name = $field[‘name’];

}
/** */

// The field key. 
$field_key = null; 
  
// The post id. 
$post_id = false; 
  
// The options. 
$options = array(); 
  
// NOTICE! Understand what this does before running. 
$result = get_field_object($field_key, $post_id, $options); 