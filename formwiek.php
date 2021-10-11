<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //if (isset($_GET))
    if (!isset($_POST['person'])&& !isset($_POST['buttonAvg'])) {
      echo <<< FORMCOUNTPERSON
      <h3>Ilość osób w rodzinie</h3>
      <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób">
        <input type="submit" name="Zatwierdź" value="Zatwierdź">
      </form>
    FORMCOUNTPERSON;
    }
    else {
    if (!empty($_POST['person'])) {
      echo "Ilość osób w rodzinie: $_POST[person] <br><br>";

    echo <<< FORMCOUNTPERSON
    <form method="post">
    FORMCOUNTPERSON;
    for ($i = 1; $i <= $_POST['person']; $i++) {
      echo "<input type='number' name='person$i' placeholder='Wiek osoby $i'><br><br>";
    }
    echo <<< FORMCOUNTPERSON
      <input type="submit" name="buttonAvg" value="Zatwierdź">
    </form>
    FORMCOUNTPERSON;
    }
    if (isset($_POST['buttonAvg'])){
      echo "<h3>średni wiek</h3>";
      //print_r($_POST);
      $avg=0;
      $count=0;
      foreach ($_POST as $key => $value){
        if ($key != "buttonAvg"){
        $avg+=$value;
        $count++;
        }
      }
      echo "średni wiek wynosi: ".number_format($avg/$count,2)."lat";
    }
  }
  echo '<hr><a href="./4_formularze.php">strona glowna</a>'
    ?>
  </body>
</html>
