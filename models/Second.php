<?php
namespace app\models;

use Yii;

class Second extends\yii\db\ActiveRecord{

  public static function tableName(){
    return 'payer_loyality';
  }

  public function rules(){
    return[
      ['payer_id', 'trim'],
      ['amount','trim'],
      ['moovment','trim'],
      ['note', 'trim'],

      ['crated_at','trim'],
    ];
  }
}
