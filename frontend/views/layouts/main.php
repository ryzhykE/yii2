<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<? if(Yii::$app->session->hasFlash('key')): ?>
    <? $key = Yii::$app->session->getFlash('key');
      echo \yii\bootstrap\Alert::widget([
          'options' => [
              'class' => 'alert-info'
          ],
          'body' => $key
      ])
    ?>
<? endif;?>

<? if(Yii::$app->session->hasFlash('login')): ?>
    <? $login = Yii::$app->session->getFlash('login');
      echo \yii\bootstrap\Alert::widget([
          'options' => [
              'class' => 'alert-info'
          ],
          'body' => $login
      ])
    ?>
<? endif;?>


<?=$this->render("//common/header") ?>



<?=$content?>

<?=$this->render("//common/footer") ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
