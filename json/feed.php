<?PHP

$hint = $_GET['q'];
$data = array(
  array("id" => "111111111",
      "name" => "Live Response #1 for " . $hint,
      "type" => "community"),
  array("id" => "222222222",
      "name" => "Live Response #2 for " . $hint,
      "type" => "community"),

);

header('Content-Type: application/json');
echo json_encode($data);
