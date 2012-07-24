<?

$new_instance = "http://meeting.tropika.net";
$params = $_SERVER['REQUEST_URI'];

$url = $new_instance . $params;

header("Location: $url");

?>