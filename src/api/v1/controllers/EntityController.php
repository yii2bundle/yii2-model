<?php

namespace yii2bundle\model\api\v1\controllers;

use yii2bundle\model\domain\enums\ModelPermissionEnum;
use yubundle\money\domain\v1\interfaces\services\DivisionInterface;
use yii2lab\rest\domain\rest\ActiveControllerWithQuery as Controller;
use yii2rails\extension\web\helpers\Behavior;

class EntityController extends Controller
{

	public $service = 'model.entity';

	public function behaviors()
    {
        return [
            Behavior::cors(),
            //Behavior::auth(),
            Behavior::access(ModelPermissionEnum::MANAGE, ['create', 'update', 'delete']),
        ];
    }

    public function actionValidate($id) {
	    $data = \Yii::$app->request->post();
	    $model = \App::$domain->model->entity->validate($id, $data);

    }

}