<?php
namespace app\controllers;

use Yii;
use app\models\Third;
use app\models\First;
use yii\web\Controller;


/**
 * manual CRUD
 **/
class ThirdController extends Controller
{
    /**
    *Create
    **/
    public function actionCreate(){
      $model = new Third();

      if($model ->load(Yii::$app->request->post())){
        if($model -> save()){
          return $this -> refresh();
        }
      }
      return $this ->render('create',compact('model'));
    }
    /**
     * Read
     */
    public function actionIndex()
    {
        $First= Third::find()->all();

        return $this->render('index', ['model' => $First]);
    }
    /**
    *edit
    **/
    public function actionEdit($id){
      $model=Third::find()->where(['id'=>$id])->one();

      //if id not OutOfBoundsException
      if($model === null)
      throw new NotFoundHttpExeption('nerastas');

      //updated
      if($model->load(Yii::$app->request->post())&& $model->save()){
        return $this->redirect(['index']);
      }
      return $this->render('edit',['model'=>$model]);
    }
    // imap_deletem
    public function actionDelete($id){
      $model=Third::findOne($id);

      //if id not OutOfBoundsException
      if($model === null)
      throw new NotFoundHttpExeption('nerastas');

      //delete
      $model->delete();
      return $this->redirect(['index']);
    }
}
?>
