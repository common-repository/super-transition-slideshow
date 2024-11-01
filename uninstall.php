<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('sts_title');
delete_option('sts_dir');
delete_option('sts_title_yes');
delete_option('sts_pause');
delete_option('sts_transduration');
delete_option('sts_dir_1');
delete_option('sts_dir_2');
delete_option('sts_dir_3');
delete_option('sts_dir_4');
 
// for site options in Multisite
delete_site_option('sts_title');
delete_site_option('sts_dir');
delete_site_option('sts_title_yes');
delete_site_option('sts_pause');
delete_site_option('sts_transduration');
delete_site_option('sts_dir_1');
delete_site_option('sts_dir_2');
delete_site_option('sts_dir_3');
delete_site_option('sts_dir_4');