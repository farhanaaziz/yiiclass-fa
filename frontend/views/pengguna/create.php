<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<div class="row">
        <div class="col-lg-5">

                <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'password_hash')->passwordInput() ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'created_at')->textInput() ?>
                	

                <?= $form->field($model, 'supervisor')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'submit -button']) ?>
                </div>

				<?php ActiveForm::end(); ?>

		</div>
    </div>
</div>

