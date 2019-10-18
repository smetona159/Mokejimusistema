<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\config\db;



$this->title = 'Payer';
$this->params['breadcrumbs'][] = $this->title;
function test(){
  $db = mysqli_connect('localhost','root','','pirmas');


  $sql = "SELECT id, name, pasword, update_at, created_at FROM users";

  $result = $db->query($sql);
    /* Error occurred, return given name by default */
    $num_rows = mysqli_num_rows($result);
    if (!$result || ($num_rows < 0)) {
        echo "Error displaying info";
        return;
    }
    if ($num_rows == 0) {
        echo "Lentelė tuščia.";
        return;
    }

  echo "<table align=\"center\" border=\"1\" cellspacing=\"0\" cellpadding=\"3\">\n";
  echo "<tr><td><b>ID</b></td><td><b>name</b></td><td><b>password</b></td><td><b>update_at</b></td><td><b>created_at</b></td><td><b>Delete:</b></td></tr>\n";


  for ($i = 0; $i < $num_rows; $i++) {
        $id = mysqli_result($result, $i, "id");
          $name = mysqli_result($result, $i, "name");
          $pasword = mysqli_result($result, $i, "pasword");
          $update_at = mysqli_result($result, $i, "update_at");
          $created_at = mysqli_result($result, $i, "created_at");

          $trinti = '<form action="procesai.php" method="POST">

        <input type="hidden" name="updID" value="'.$id.'">
        <input type="hidden" name="trinam" value="1">
        <select name="trintukas" onChange="alert(\'Užsakymas pašalintas!\');submit();">
        <option value=""></option>
        <option value="1">Trinti</option>

        </select>
        </form>';
          echo "<tr><td>$id</td><td>$name</td><td>$pasword</td><td>$update_at</td><td>$created_at</td><td>$trinti</td></tr>\n";
            }
              echo "</table><br>\n";
}
function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
  }




?>
<html>
<div class="site-about">





    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Testinis puslapis, projaktas dar kuriamas.
        <?php
        test(); ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
</html>
