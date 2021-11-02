<!<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
      <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
      <input type="submit" name="button" value="Oblicz">
    </form>
    <?php
      // if (!empty($_GET['sideA']) && is_numeric($_GET['sideA'])) {
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
        // echo $_GET['sideA'];
        $sideA=str_replace(',', '.', $_GET['sideA']);
        $sideB=str_replace(',', '.', $_GET['sideB']);
        // echo $sideA;
        // pole
        $area=number_format($sideA*$sideB,3);        // obwód
        $circuit=number_format(2*$sideA+2*$sideB,3);
        echo <<< RESULT
          <hr>
          Pole prostokąta wynosi $area cm<sup>2</sup><br>
          Obwód prostokąta wynosi $circuit cm
RESULT;
}else if (isset($_GET['button'])){
        echo "Wypełnij wszystkie pola!";
      }
     ?>
     <br>
     <a href="4_2_form.php">strona główna</a>
  </body>
</html>
