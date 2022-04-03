<?php

use soft\helpers\Html;
use soft\widget\kartik\ActiveForm;
use soft\widget\kartik\Form;

/* @var $this soft\web\View */
/* @var $model backend\models\Hospital */

?>


<?php $form = ActiveForm::begin(); ?>

<?= Form::widget([
    'model' => $model,
    'form' => $form,
    'attributes' => [
        'name',
        'phone',
        'fax',
        'email',
        'address',
        'lat',
        'long',

        'logo:dosamigosFileImage' => [
            'options' => [
                'imgUrl' => $model->getImageUrl()
            ]
        ],
        'image:dosamigosFileImage' => [
            'options' => [
                'imgUrl' => $model->getImageUrl()
            ]
        ],

        'status:status',
    ]
]); ?>
<div class="form-group">
    <?= Html::submitButton(Yii::t('site', 'Save'), ['visible' => !$this->isAjax]) ?>
</div>

<?php ActiveForm::end(); ?>

