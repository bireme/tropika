<?

$new_instance = "http://archive." . $_SERVER['SERVER_NAME'];
$params = $_SERVER['REQUEST_URI'];

$url = $new_instance . $params;

header("Location: $url");

?>