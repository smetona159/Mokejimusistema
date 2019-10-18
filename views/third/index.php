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
      <td>spent_on</td>
      <td>note</td>
      <td>Created_at</td>
      <td>Functions</td>
   </tr>
   <?php foreach ($model as $field) { ?>
     <tr>
        <td><?=$field->payer_id; ?></td>
        <td><?=$field->amount; ?></td>
        <td><?=$field->spent_on; ?></td>
        <td><?=$field->note; ?></td>
        <td><?=$field->created_at; ?></td>
        <td><?=Html::a("Edit",['third/edit','id'=>$field->id]);?> | <?=Html::a("Delete",['third/delete','id'=>$field->id]);?></td>

     </tr>
  <?php  } ?>
