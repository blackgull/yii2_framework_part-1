<?php

namespace app\controllers;

use app\models\Task;
use yii\db\Query;
use yii\helpers\VarDumper;
use yii\web\Controller;

class TestController extends Controller
{
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionIndex()
    {

//        $date = [
//            'id' => 11,
//            'name' => 'Ручка шариковая',
//            'price' => 30,
//            'category' => 'Канцелярия',
//            'created_at' => time()
//        ];

//        $task = new Task();
        $task = Task::findOne(3);
        $task->title = 'aaabbbb';
//        $task->description = 'hhhhhh';
//        $task->creator_id = '1';
//        $task->save();

//        $password = '222';
//        $hash = \Yii::$app->getSecurity()->generatePasswordHash($password);

        _end($task);



        return $this->render('index', [
            'data' => \Yii::$app->test->run()
        ]);
    }

    public function actionInsert()
    {
        $data = \Yii::$app->db->createCommand()->insert('user',
            [
                'username' => 'name_4',
                'password_hash' => 'adsfasd2369874',
                'auth_key' => '764',
                'creator_id' => 39875,
                'updater_id' => null,
                'created_at' => 45698,
                'updated_at' => null,
            ])->execute();

        //_end($data);
        _log($data);

        return $this->render('insert', [
            'data' => \Yii::$app->test->run(),
        ]);
    }

    public function actionSelect()
    {
        $data = (new Query())->from('user')->where('id = 1')->one();
        echo 'Запись с id=1' . '<br>';
        var_dump($data);

        $data = (new Query())->from('user')->where('id > 1')->orderBy(['username' => 'ASC'])->all();
        echo 'Записи с id > 1 и отсортированные по имени' . '<br>';
        var_dump($data);

        $data = (new Query())->from('user')->count();
        echo 'Количество записей:' . '<br>';
        _end($data);
        //_log($data);

        return $this->render('select', [
            'data' => \Yii::$app->test->run(),
        ]);
    }
}