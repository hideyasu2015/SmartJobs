<?php
if(empty(space2plus($q)))
{
	$key = 'all';
}
else
{
	$key = $q;
}


$feedlist = array(
			
		
		array(
				'title' => 'Indeed',
				'url' => 'http://api.indeed.com/ads/apisearch?publisher='.$indeed_publisher_id.'&q='.space2plus($key).'&l='.space2plus(get_location_nicename(@$query_vars['loc'])).'&userip='.$_SERVER['REMOTE_ADDR'].'&v=2&chnl='.$indeed_channel.'&useragent='.$_SERVER['HTTP_USER_AGENT'],
				'folder' => 'Jobs',
				'api' => true
		),
		array(
				'title' => 'CareerJet',
				'url' => 'http://rss.careerjet.com/rss?s='.$q.'&l='.space2plus(get_location_nicename(@$query_vars['loc'])).'&affid='.$careerjet_publisher_id,
				'folder' => 'Jobs',
				'api' => 'careerjet_loader'
		),
		array(
				'title' => 'CareerBuilder',
				'url' => $siteurl.'/api/parse-careerbuilder.php?country='.$language_code.'&keyword='.$q.'&loc='.space2plus(get_location_nicename(@$query_vars['loc'])),
				'folder' => 'Jobs',
		),
		array(
				'title' => 'Monster',
				'url' => $siteurl.'/api/parse-monster.php?country='.$language_code.'&keyword='.$q.'&loc='.space2plus(get_location_nicename(@$query_vars['loc'])),
				'folder' => 'Jobs',
		)
		
);

//print_r($feedlist);die;
