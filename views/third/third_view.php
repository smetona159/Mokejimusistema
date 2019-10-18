<?php

use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\models\First;
?>

<h1>Add new Payer Work Credit </h1>
<?php $form = ActiveForm::begin(['options' => ['id' => 'Addpost', 'enctype' => 'multipart/form-data']]) ?>
<?= $form -> field($model, 'payer_id')->dropDownList(ArrayHelper::map(First::find()->select(['name','id'])->all(),'id', 'displayname'),['class'=>'form-control inline-block']);?>
<?= $form -> field($model, 'amount')?>
<?= $form -> field($model, 'spent_on')?>
<?= $form -> field($model, 'note')?>

<?=Html::submitButton('Save', ['class'=>'btn btn-success'])?>
<?php ActiveForm::end() ?>
