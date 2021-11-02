<?php
  echo "<pre>";
    print_r($_POST);
  echo "<pre>";

  if (!empty($_POST["name"]) && !empty($_POST["geometricFigure"])) {
    switch ($_POST["geometricFigure"]) {
      case 'kwadrat':
        header("location: ./square.php");
        break;

      case 'prostokat':
        header("location: ./rectangle.php");
        break;
    }
  }else {
      echo "Wypełnij dane!";
      ?>
      <script>
        history.back();
      </script>
      <?php

  }
?>
<br>
<a href="4_2_form.php">strona główna</a>
