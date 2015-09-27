<?php
require( $_SERVER['DOCUMENT_ROOT'].'/wp-load.php' ); // TESTING PAGE DIRECTLY

//$categories = array();
  $mycategories = get_categories();

    foreach( $mycategories as $category ) : ;
        $categories[] = array(
            'id' => $category->cat_ID,
      'cat_name' => $category->cat_name,
      'category_nicename' => $category->category_nicename,
            'category_description' => $category->category_description,
            'category_parent' => $category->category_parent,
            'category_count' => $category->category_count,
        );
    endforeach;
    if($_GET['id']){
      echo(json_encode(array('categories' => get_the_category($_GET['id']))));
    }else{
      echo(json_encode(array('categories' => $categories)));
    }
      //echo $_GET['jsoncallback'].'('.json_encode(array('categories' => $categories)).')';
?>
