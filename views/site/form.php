<?php

/* @var $this yii\web\View */
/* @var $form */
/* @var $email*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php if (!empty($name)) : ?>
    <p>Имя: <b><?= $name ?></b></p>
    <p>Email: <b><?= $email ?></b></p>
<?php endif; ?>

<?php $f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $f->field($form, 'name'); ?>
<?= $f->field($form, 'email'); ?>
<?= $f->field($form, 'file')->fileInput() ?>
<?= Html::submitButton('Отправить') ?>

<?php ActiveForm::end(); ?>