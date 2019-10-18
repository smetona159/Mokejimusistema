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
      <td>name</td>
      <td>note</td>
      <td>updated_at</td>
      <td>Created_at</td>
      <td>Functions</td>
   </tr>
   <?php foreach ($model as $field) { ?>
     <tr>
        <td><?=$field->name; ?></td>
        <td><?=$field->note; ?></td>
        <td><?=$field->updated_at; ?></td>
        <td><?=$field->created_at; ?></td>
        <td><?=Html::a("Edit",['first/edit','id'=>$field->id]);?> | <?=Html::a("Delete",['first/delete','id'=>$field->id]);?></td>
     </tr>
  <?php  } ?>
