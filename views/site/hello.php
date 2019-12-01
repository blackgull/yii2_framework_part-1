<?php

/* @var $this yii\web\View */
/* @var $message */

use yii\helpers\Html;

$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Hallo page. You may modify the following file to customize its content:
    </p>

    <p><?= $message ?></p>

    <code><?= __FILE__ ?></code>
</div>