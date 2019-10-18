<?php
namespace app\models;

use Yii;

class First extends\yii\db\ActiveRecord{

  public static function tableName(){
    return 'payer';
  }

  public function rules(){
    return[
      ['name', 'trim'],
      ['note', 'trim'],
      ['updated_at','trim'],
      ['created_at','trim'],
    ];
  }
  public function getDisplayName(){
    return $this->name;
  }
}


 ?>
