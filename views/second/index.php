<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
 ?>
 <style>
 table th, td{
   padding: 10px;
 }
 </style>
 <table border="1">
   <tr>
      <td>payer id</td>
      <td>amount</td>
      <td>moovment</td>
      <td>note</td>
      <td>Created_at</td>
      <td>Functions</td>
   </tr>
   <?php foreach ($model as $field) { ?>
     <tr>
        <td><?=$field->payer_id; ?></td>
        <td><?=$field->amount; ?></td>
        <td><?=$field->moovment; ?></td>
        <td><?=$field->note; ?></td>
        <td><?=$field->crated_at; ?></td>
        <td><?=Html::a("Edit",['second/edit','id'=>$field->id]);?> | <?=Html::a("Delete",['second/delete','id'=>$field->id]);?></td>

     </tr>
  <?php  } ?>
