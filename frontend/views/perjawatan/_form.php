<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Perjawatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perjawatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profile')->dropDownList($profil, ['prompt' => 'Sila Pilih Pegawai']) ?>

    <?= $form->field($model, 'jawatan')->dropDownList($jawatan, ['prompt' => 'Sila Pilih Jawatan']) ?>

    <?= $form->field($model, 'bahagian')->dropDownList($bahagian, ['prompt' => 'Sila Pilih Bahagian']) ?>

    <?= $form->field($model, 'tarikhMula')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tarikhTamat')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'supervisor')->dropDownList($profil, ['prompt' => 'Sila Pilih Supervisor']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
