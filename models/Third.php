<?php
namespace app\models;

use Yii;

class Third extends\yii\db\ActiveRecord{

  public static function tableName(){
    return 'payer_work_credit';
  }

  public function rules(){
    return[
      ['payer_id', 'trim'],
      ['amount','trim'],
      ['spent_on','trim'],
      ['note', 'trim'],

      ['created_at','trim'],
    ];
  }
}
