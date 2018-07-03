<?include_once($_SERVER["DOCUMENT_ROOT"].'/pages/functions.php')?>
<?include_once($_SERVER["DOCUMENT_ROOT"].'/templates/data.php')?>
<?$main = template($_SERVER["DOCUMENT_ROOT"].'/templates/index.php', [
  'stuff' => $stuff, 'hours' => $hours, 'minutes' => $minutes
]);
$layout =  template($_SERVER["DOCUMENT_ROOT"].'/templates/layout.php', [
'content' => $main, 'categories' => $categories
]);
print $layout;
