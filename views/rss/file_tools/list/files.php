<?php

	$files = elgg_extract("files", $vars, array());
	$folder = elgg_extract("folder", $vars);
	
	
	if(!($sub_folders = file_tools_get_sub_folders($folder))){
		$sub_folders = array();
	}
	
	$entities = array_merge($sub_folders, $files) ;
	
	if(!empty($entities)) {
		$params = array(
			"full_view" => false,
			"pagination" => false
		);

		echo elgg_view_entity_list($entities, $params);
	}
	