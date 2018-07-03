<?include_once($_SERVER["DOCUMENT_ROOT"].'/pages/functions.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/templates/data.php');
$lot = null;
if(isset($_GET['lot_id'])){
  $needElement = $_GET['lot_id'];
  foreach($stuff as $value){
    if($value["ID"] == $needElement){
    $element = $value;

  }
}
}
if(!$needElement){
  http_response_code(404);
}
$contentPage = template($_SERVER["DOCUMENT_ROOT"].'/pages/lot.php', ['element' => $element]);
$layout = template($_SERVER["DOCUMENT_ROOT"]."/templates/layout.php",
['content' => $contentPage, 'categories' => $categories]);

print $layout;


?>
