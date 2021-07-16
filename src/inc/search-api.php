<?php

$gurl = 'https://www.googleapis.com/customsearch/v1?';
$cse = 'a9f8a625f3ab4bbd8';
$key = 'AIzaSyDN2itYrZcgnUWNYG5f6gjF9jFLcEyRbdQ';
$this_site = filter_input(INPUT_GET, 'site', FILTER_SANITIZE_ENCODED);
$sites = array('This Site' => $this_site, 'All of UTK.edu' => 'utk.edu', 'Faculty' => 'faculty.utk.edu', 'Events' => 'calendar.utk.edu/event');
$q = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
$query_url = $gurl.'key='.$key.'&cx='.$cse.'&q='.$q;

$formatted_results = '';
$tab_loop = 0;
$panel_loop = 0;

$formatted_results .= '<ul class="nav nav-tabs" id="myTab" role="tablist">';

foreach($sites as $id => $site){
	if($tab_loop == 0){
		$active = ' active';
		$selected = 'true';
	}else{
		$active = '';
		$selected = 'false';
	}
	
	$formatted_results .= '<li class="nav-item" role="presentation">';
	$formatted_results .= '<button class="nav-link'.$active.'" id="panel'.strval($tab_loop).'-tab" data-bs-toggle="tab" data-bs-target="#panel'.strval($tab_loop).'" type="button" role="tab" aria-controls="panel'.strval($tab_loop).'" aria-selected="'.$selected.'">'.$id.'</button>';
	$formatted_results .= '</li>';
	
	$tab_loop++;
}

$formatted_results .= '</ul>';
$formatted_results .= '<div class="tab-content" id="myTabContent">';

foreach($sites as $id => $site){
	if($panel_loop == 0){
		$active = ' show active';
	}else{
		$active = '';
	}
	
	$formatted_results .= '<div class="tab-pane fade'.$active.'" id="panel'.strval($panel_loop).'" role="tabpanel" aria-labelledby="panel'.strval($panel_loop).'-tab">';
	
	$this_query = $query_url.'+site:'.$site;
	$search_json = file_get_contents($this_query);
	$search_results_raw = json_decode($search_json);
	if(isset($search_results_raw->items)){
		foreach($search_results_raw->items as $result){
			$formatted_results .= '<div class="gs_result"><p><a href="'.$result->link.'">'.$result->htmlTitle.'</a><br/>'.$result->htmlSnippet.'</p></div>';
		}
	}
	
	//print_r($search_json);
	
	//still needs previous page and next buttons to page through results
	
	$formatted_results .= '</div>';
	
	$panel_loop++;
}

$formatted_results .= '</div>';

echo $formatted_results;
?>