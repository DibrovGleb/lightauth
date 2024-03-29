<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- The Modal -->
  <div class="modal">
    <div class="modal-content">
      <form id="regform">
        <div class="close"><span>&times;</span></div>
        <label for="email">Email:</label>
        <div>
          <input type="email" id="email" name="email">
          <span class="error email-err"></span>
        </div>

        <label for="pass">Пароль:</label>
        <input type="password" id="pass" name="pass">
        <div class="wrapper">
          <button>Войти</button>
          <button>Зарегистрироваться</button>
        </div>
      </form>
    </div>
  </div>
</body>
<script>
  const modal = document.querySelector('.modal'),
    close = document.querySelector('.close');

  close.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
<?php
/*require_once 'product/api.php';
$api = new Api();
$method = $_SERVER['REQUEST_METHOD'];
//foreach ($_SERVER as $parm => $value)  echo "$parm = '$value'<br>";
//$api->addProduct();
switch ($method) {
  case 'PUT':
    break;
  case 'POST':
    break;
  case 'GET':
    if (isset($_GET['route']) && $_GET['route'] === '/products/getAll')$api->getAllProducts();
    if(isset($_GET['id'])) $api->getProduct($_GET['id']);
    break;
  default:
    echo 'Error: unknown method ' . $method; 
    break;
}*/

/*if (isset($_GET['route']) && $_GET['route'] === '/products/get') {
  // Handle the request for getting product details

  // Retrieve the ID from the query string
  $id = isset($_GET['id']) ? $_GET['id'] : null;
  $product = $api->getProduct($id);
  echo $product;
  exit;
}*/
?>

</html>