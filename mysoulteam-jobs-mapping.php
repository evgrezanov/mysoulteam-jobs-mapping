<?php
/**
 * Plugin Name: Mysoulteam jobs mapping for Toolset
 * Description: Automatic relationship created
 * Plugin URI: https://github.com/evgrezanov/mysoulteam-jobs-mapping
 * Version: 0.1
 * Author: Evgeniy Rezanov
 * Author URI: https://github.com/evgrezanov/
 * 
 */

defined('ABSPATH') || exit;
//https://github.com/soflyy/wp-all-import-action-reference/blob/master/all-import/pmxi_saved_post.php

class MysoulteamJobsMapping {

    public static function init(){
        add_action('pmxi_saved_post', array( __CLASS__, 'mst_company_jobs_mapping'), 10, 1);
    }

    public static function mst_company_jobs_mapping(){
        // Make wpdb object available.
        global $wpdb;
        
        // Define target database table.
        $table_name = $wpdb->prefix . "your_table_name";
        
        // Insert value into database table.
        $wpdb->insert($table_name, array('post_id' => $id, 'column_name' => $value), array('%s','%s'));
    }
}
MysoulteamJobsMapping::init();