<?php
$error_msg = '';
$password = '';

if (isset($_POST['length']) && is_numeric($_POST['length']) && $_POST['length'] >= 8 && $_POST['length'] <= 15) {
  $length = $_POST['length'];
  $password = generatePassword($length);
  $password_msg = 'La password generata è:';
} else if (isset($_POST['length'])) {
  $error_msg = 'Inserire un numero compreso tra 8-15';
}

require_once __DIR__ . '/partials/functions.php';

?>

<?php
require_once __DIR__ . '/partials/head.php';
?>

<body>
  <?php
  require_once __DIR__ . '/partials/header.php';
  ?>

  <div class="container my-5 text-center">
    <form class="form-inline justify-content-center">
      <div class="form-group mx-sm-3 mb-2">
        <label for="inputLength" class="mr-2">Inserisci quanto deve essere lunga la tua Password:</label>
        <input class="form-control mt-3" type="text" id="inputLength" name="length"
          aria-label="default input example">
        <p class="text-danger"><?php echo $error_msg ?></p>
        <button type="submit" class="btn btn-primary my-3">Genera Password</button>
        <p class="text"><?php echo $password_msg ?? '' ?> <?php echo $password ?></p>
    </form>
  </div>

  <?php
  require_once __DIR__ . '/partials/foot.php';
  ?>
</body>

</html>