<?php $form = \yii\bootstrap\ActiveForm::begin(); ?>

    <div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <?
        echo $form->field($model, 'general_image')->widget(\kartik\file\FileInput::classname(),[
            'options' => [
            //type
                'accept' => 'image/*',
                'multiple'=>true
            ],
            'pluginOptions' => [
            //Url for img
                'uploadUrl' => \yii\helpers\Url::to(['file-upload-general']),
                //add field for ajax
                'uploadExtraData' => [
                    'id_goods' => $model->id_goods,
                ],
                //type
                'allowedFileExtensions' =>  ['jpg', 'png','gif'],
                //Preview array
                'initialPreview' => $image,
                'showUpload' => true,
                'showRemove' => false,
                'dropZoneEnabled' => false
            ]
        ]);
        ?>

    

   
        <?
        echo \yii\helpers\Html::label('Images');

        echo \kartik\file\FileInput::widget([
            'name' => 'images',
            'options' => [
                'accept' => 'image/*',
                'multiple'=>true
            ],
            'pluginOptions' => [
                'uploadUrl' => \yii\helpers\Url::to(['file-upload-images']),
                'uploadExtraData' => [
                    'advert_id' => $model->id_goods,
                ],
                //overwriteimg
                'overwriteInitial' => false,
                'allowedFileExtensions' =>  ['jpg', 'png','gif'],
                'initialPreview' => $images_add,
                'showUpload' => true,
                'showRemove' => false,
                'dropZoneEnabled' => false
            ]
        ]);
        ?>

    

    <div class="form-group">
        <?= \yii\helpers\Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
</div>
</div>
</div>

<?php \yii\bootstrap\ActiveForm::end(); ?>