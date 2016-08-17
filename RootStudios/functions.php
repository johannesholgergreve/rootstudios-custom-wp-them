<?php
function title_filter($where, &$wp_query){
global $wpdb;

if($search_term = $wp_query->get( 'search_prod_title' )){
    /*using the esc_like() in here instead of other esc_sql()*/
    $search_term = $wpdb->esc_like($search_term);
    $search_term = ' \'%' . $search_term . '%\'';
    $where .= ' AND ' . $wpdb->posts . '.post_title LIKE '.$search_term;
}

return $where;
}

?>