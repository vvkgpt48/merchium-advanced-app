<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = __('Reset password');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please choose your new password:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton(__('Save'), ['class' => 'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
