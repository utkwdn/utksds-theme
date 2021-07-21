<?php

$gurl = 'https://www.googleapis.com/customsearch/v1?';
$cse = 'a9f8a625f3ab4bbd8';
$key = 'AIzaSyDN2itYrZcgnUWNYG5f6gjF9jFLcEyRbdQ';
$this_site = filter_input(INPUT_GET, 'site', FILTER_SANITIZE_ENCODED);
$start = filter_input(INPUT_GET, 'start', FILTER_SANITIZE_ENCODED);
//echo '<pre>'.print_r($start).'</pre>';
$panel = filter_input(INPUT_GET, 'panel', FILTER_SANITIZE_ENCODED);
$sites = array('This Site' => $this_site, 'All of UTK.edu' => 'utk.edu', 'Faculty' => 'faculty.utk.edu', 'Events' => 'calendar.utk.edu/event');
$q = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
$query_url = $gurl.'key='.$key.'&cx='.$cse.'&q='.str_replace(' ', '+', $q);

$formatted_results = '';
$tab_loop = 0;
$panel_loop = 0;

if(isset($start) && $start != ""){
	
	$this_query = $query_url.'&start='.$start;
	$search_json = file_get_contents($this_query);
	$search_results_raw = json_decode($search_json);
	if(isset($search_results_raw->items)){
		foreach($search_results_raw->items as $result){
			$formatted_results .= '<div class="gs_result"><p><a href="'.$result->link.'">'.$result->htmlTitle.'</a><br/>'.$result->htmlSnippet.'</p></div>';
		}
	}
	
	$formatted_results .= '<div class="row"><div class="col-xs-12  col-sm-4">';
	
	if(isset($search_results_raw->queries->previousPage[0]->startIndex)){
		$formatted_results .= '<form id="prev"><button type="button" class="btn btn-outline-secondary" onClick="search_pager(\''.$search_results_raw->queries->previousPage[0]->startIndex.'\', \''.$search_results_raw->queries->previousPage[0]->searchTerms.'\', \''.$panel.'\')">Previous</button></form>';
	}
	
	$formatted_results .= '</div><div class="col-xs-12  col-sm-4">Page '.ceil($search_results_raw->queries->request[0]->startIndex/10).' of '.ceil($search_results_raw->queries->request[0]->totalResults/10).'</div><div class="col-xs-12  col-sm-4">';
	
	if(isset($search_results_raw->queries->nextPage[0]->startIndex)){
		$formatted_results .= '<form id="next"><button type="button" class="btn btn-outline-secondary" onClick="search_pager(\''.$search_results_raw->queries->nextPage[0]->startIndex.'\', \''.$search_results_raw->queries->nextPage[0]->searchTerms.'\', \''.$panel.'\')">Next</button></form>';
	}
	
	$formatted_results .= "</div></div>";
	
}else{

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
	
	$formatted_results .= '<div class="row"><div class="col-xs-12  col-sm-4">';
	
	if(isset($search_results_raw->queries->previousPage[0]->startIndex)){
		$formatted_results .= '<form id="prev"><button type="button" class="btn btn-outline-secondary" onClick="search_pager(\''.$search_results_raw->queries->previousPage[0]->startIndex.'\', \''.$search_results_raw->queries->previousPage[0]->searchTerms.'\', \'panel'.strval($panel_loop).'\')">Previous</button></form>';
	}
	
	$formatted_results .= '</div><div class="col-xs-12  col-sm-4">Page '.ceil($search_results_raw->queries->request[0]->startIndex/10).' of '.ceil($search_results_raw->queries->request[0]->totalResults/10).'</div><div class="col-xs-12  col-sm-4">';
	
	if(isset($search_results_raw->queries->nextPage[0]->startIndex)){
		/*?><pre><?php print_r($search_results_raw->queries->nextPage[0]->searchTerms); ?></pre><?php*/
		$formatted_results .= '<form id="next"><button type="button" class="btn btn-outline-secondary" onClick="search_pager(\''.$search_results_raw->queries->nextPage[0]->startIndex.'\', \''.$search_results_raw->queries->nextPage[0]->searchTerms.'\', \'panel'.strval($panel_loop).'\')">Next</button></form>';
	}
	
	$formatted_results .= "</div></div>";
	
	$formatted_results .= '</div>';
	
	$panel_loop++;
}

$formatted_results .= '</div>';
	
}

echo $formatted_results;
?>