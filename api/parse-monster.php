<?php
header('Content-Type: application/json');
$q = @$_REQUEST['keyword'];
$cy = @$_REQUEST['loc'];
$items = array();
$data = ('http://rss.jobsearch.monster.com/rssquery.ashx?brd=2&q=' . $q . '&cy=&where=' . $cy . '&rad=20rad_units=miles&baseurl=jobview.monster.com');

var_dump($data);
die;

$response = simplexml_load_file($data, null, LIBXML_NOCDATA);

if ($response) {
    foreach ($response->channel->item as $item) {

        $desc = (string) $item->description;

        $date = (string) $item->pubDate;

        $item = array(
            "date" => $date,
            "title" => (string) $item->title,
            "link" => (string) $item->link,
            "desc" => $desc
        );

        array_push($items, $item);
    }
}
echo json_encode($items);