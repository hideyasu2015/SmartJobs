<?php
if (! function_exists('disguise_curl')) {

    function disguise_curl($url)
    {
        $html = '';
        $enabled = function_exists('curl_version');
        if ($enabled) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 compatible RSS Fetcher');
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $html = curl_exec($curl); // execute the curl command
            curl_close($curl); // close the connection
        } else if (ini_get('allow_url_fopen')) {
            $html = file_get_contents($url);
        }
        return $html; // and finally, return $html
    }
}

header('Content-Type: application/json');

$q = @$_REQUEST['keyword'];
$cy = @$_REQUEST['loc'];
$country = @$_REQUEST['country'];
$items = array();
$data = disguise_curl('http://careerbuilder.com/RTQ/rss20.aspx?RSSID=RSS_PD&tally=' . urlencode('Job Posted Date 1') . '&latestjobs=true&city=' . urlencode($cy) . '&state=&country=' . urlencode($country) . '&kw=' . urlencode($q));

$response = simplexml_load_string($data);

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