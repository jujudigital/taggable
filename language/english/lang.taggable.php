<?php if (!defined("BASEPATH")) die("No direct script access allowed");
/**
 * Taggable
 *
 * A powerful, easy to use folksonomy
 * engine for ExpressionEngine 2.0.
 *
 * @author Jamie Rumbelow <http://jamierumbelow.net>
 * @copyright Copyright (c)2010 Jamie Rumbelow
 * @license http://getsparkplugs.com/taggable/docs#license
 * @version 1.2.1
 **/

$lang = array(
	// Module Information
	'taggable_module_name' 			=> 'Taggable',
	'taggable_module_description'	=> 'A powerful, easy to use folksonomy engine for ExpressionEngine 2',
	'taggable'						=> 'Tags',
	
	// Preferences
	'taggable_preferences_title'					=> 'Preferences',
	'taggable_preferences_saved'					=> 'Successfully saved preferences',
	'taggable_preference_convert_to_lowercase'		=> 'Convert tags to lowercase?',
	'taggable_preference_maximum_tags_per_entry'	=> 'Maximum tags per channel entry',
	'taggable_preference_saef_separator'			=> 'SAEF Separator',
	'taggable_preference_saef_field_name'			=> 'SAEF Field Name',
	'taggable_preference_license_key'				=> 'License Key',
	'taggable_preference_key'						=> 'Key',
	'taggable_preference_value'						=> 'Value',
	'taggable_no_preferences'						=> 'There are currently no set preferences.',
	'taggable_preferences_save'						=> 'Save',
		
	// Tags
	'taggable_tags_title'				=> 'Tags',
	'taggable_browse_tags'				=> 'Browse Used Tags',
	'taggable_no_tags'					=> 'There are no tags to display',
	'taggable_tag'						=> 'Tag',
	'taggable_tag_description'			=> 'Description',
	'taggable_delete'					=> 'Delete',
	'taggable_delete_marked_tags'		=> 'Delete Marked Tags',
	'taggable_create_tag'				=> 'Create Tag',
	'taggable_tags_field_instructions'	=> 'Type the beginning of a tag and Taggable will try to find it. If it can\'t, hit enter and the tag will be created for you.',
	
	// Search
	'taggable_search_order'				=> 'Order',
	'taggable_search_order_alphabet'	=> 'Alphabetically',
	'taggable_search_order_entries'		=> 'by Number of Entries',
	'taggable_search_order_id'			=> 'by ID',
	'taggable_search_search_by'			=> 'Search by',
	'taggable_search_order_sw'			=> 'Starts with',
	'taggable_search_order_co'			=> 'Contains',
	'taggable_search_order_ew'			=> 'Ends with',
	'taggable_search_with'				=> 'With',
	'taggable_search_with_mt'			=> 'More than',
	'taggable_search_with_et'			=> 'Equal to',
	'taggable_search_with_lt'			=> 'Less than',
	'taggable_search'					=> 'Search',
	'taggable_reset'					=> 'Reset',
	'taggable_tag_name'					=> 'Tag Name',
	'taggable_tag_description'			=> 'Tag Description',
	
	// Entries
	'taggable_entries'				=> 'Entries',
	'taggable_id'					=> 'ID',
	'taggable_entries_title'		=> 'Title',
	'taggable_entries_url_title'	=> 'URL Title',
	'taggable_edit'					=> 'Edit',
	'taggable_tags_entries_title'	=> 'Tag Entries',
	'taggable_edit_tag'				=> 'Edit Tag',
	'taggable_tag_updated'			=> 'Tag Updated',
	'taggable_no_entries'			=> 'There aren\'t any entries for this tag!',
	'taggable_update_tag'			=> 'Update Tag',
	
	// Stats
	'taggable_stats_title'					=> 'Stats',
	'taggable_stats_total_tags'				=> 'Total Tags',
	'taggable_stats_total_tagged_entries'	=> 'Total Tagged Entries',
	'taggable_stats_top_five_tags'			=> 'Top Five Tags',
	
	// Tools
	'taggable_tools_title'			=> 'Tools',
	'taggable_tools_message'		=> 'The tools section of Taggable allows you to access the Import and Export functionality and run diagnostics tests to aid in support requests.',
	'taggable_diagnostics_download' => 'Download Diagnostics Report',
	'taggable_diagnostics_download_info' => 'Diagnostics reports can be extremely helpful in answering support requests. If you are having an issue with Taggable, use the link below to download the results file, which you can then attach to a support ticket.',
	'taggable_diagnostics'			=> 'Diagnostics',
	'taggable_diagnostics_message'  => 'The Diagnostics Tool runs a few tests on your install of Taggable, gathering important information about your ExpressionEngine environment. This can be extremely helpful in answering support requests. If you are having an issue with Taggable, run the diagnostics tool and download the results file, which you can then attach to a support ticket.',
	'taggable_run_diagnostics'		=> 'Run Diagnostics',
	'taggable_diagnostics_test' 	=> 'Test',
	'taggable_diagnostics_value'	=> 'Value',
	'taggable_diagnostics_passed'	=> 'Passed?',
	'taggable_download_report' 		=> 'Download Report',
	'taggable_import_and_export'	=> 'Import and Export',
	'taggable_import_and_export_message' => "If you are moving servers, upgrading from a previous version of ExpressionEngine or are moving from a separate CMS, you can use Taggable's Import and Export functionality to export your tags and import from a variety of platforms.",
	'taggable_import'				=> 'Import',
	'taggable_from'					=> 'From',
	'taggable_export'				=> 'Export',
	'taggable_upload'				=> 'Upload',
	'taggable_export_to_json'		=> 'Export to JSON',
	'taggable_solspace_message'		=> "The Solspace's Tag importer allows you to import tags from Solspace's Tag for ExpressionEngine 1 and 2. To connect to Tag and import the tags, we need your database connection details.",
	'taggable_taggable_message'		=> "The Taggable importer allows you to import tags from another install of Taggable. It's very easy to do, all you need to do is upload the export file and run the importer engine, and Taggable will import all your tags into the system.",
	'taggable_tagger_message'		=> "The Tagger Lite importer allows you to import tags from Tagger Lite for ExpressionEngine 1 and 2. To connect to Tagger Lite and import the tags, we need your database connection details.",
	'taggable_wordpress_message'	=> "The WordPress importer allows you to import tags from WordPress. To connect to WordPress and download the tags, we need your database connection details.",
	'taggable_upgrade_utility'		=> 'Upgrade Utility',
	'taggable_run_upgrade'			=> 'Run Upgrade',
	'taggable_entries_upgraded'		=> 'Upgraded All Tags',
	
	// Diagnosics
	'taggable_diagnostics_generic' 						=> 'Generic',
	'taggable_diagnostics_generic_php_version'			=> 'PHP Version',
	'taggable_diagnostics_generic_ee_version'			=> 'ExpressionEngine Version',
	'taggable_diagnostics_generic_ee_build'				=> 'ExpressionEngine Build',
	'taggable_diagnostics_generic_extensions_enabled'	=> 'Extensions enabled?',
	
	// Errors
	'taggable_errors_tag_name' 		=> 'Please enter a tag name!',
	'taggable_errors_database'		=> "Couldn't connect to the database, please ensure your details are correct",
	'taggable_errors_file'			=> "Couldn't upload file. Please try again",
	
	// JavaScript
	'taggable_javascript_hint'					=> 'Type in a tag',
	'taggable_javascript_no_results'			=> 'No results',
	'taggable_javascript_searching'				=> 'Searching...',
	'taggable_javascript_please_enter'			=> 'Please enter some text into the title field to autotag',
	'taggable_javascript_autotagging_complete'	=> 'Autotagging complete!',
	'taggable_javascript_limit'					=> 'No more tags allowed!',
	
	// Misc
	'taggable_doc_title'			=> 'Docs',
	'taggable_no_license_key'		=> 'Taggable can\'t find a valid license key. Please enter one on the preferences page',
	'taggable_welcome_message'		=> 'Welcome to the Taggable module by Jamie Rumbelow. This is the Taggable Dashboard, where you can view some handy statistics about your Taggable install, browse your tags by letter and access the rest of the Taggable system.',
	'taggable_your_license_key_is'	=> 'Your license key is:',
	'taggable_not_applicable'		=> 'N/A',
	'taggable_autotag'				=> 'Autotagging',
	
	// end
	'' => ''
);