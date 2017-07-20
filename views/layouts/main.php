<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\web\View as View;

AppAsset::register($this);
?>
<?php $script = <<< JS
$(document).ready(function () {
    $('.masthead').visibility({
        once: false,
        onBottomPassed: function () {
            $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function () {
            $('.fixed.menu').transition('fade out');
        }
    });
    $('.ui.sidebar').sidebar('attach events', '.toc.item');
});
JS;
$this->registerJs($script, View::POS_END);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="ui large top fixed hidden menu">
    <div class="ui container">
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <div class="right menu">
            <div class="item">
                <a class="ui button">Log in</a>
            </div>
            <div class="item">
                <a class="ui primary button">Sign Up</a>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
<!--    <a class="item">Login</a>-->
<!--    <a class="item">Signup</a>-->
</div>
<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">
        <div id="particles-js"></div>
        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="active item">Home</a>
                <a class="item">Work</a>
                <a class="item">Company</a>
                <a class="item">Careers</a>
                <div class="right item">
                    <h1>Color
                    </h1>
<!--                    <a class="ui inverted button">Log in</a>-->
<!--                    <a class="ui inverted button">Sign Up</a>-->
                </div>
            </div>
        </div>
        <div style="padding-top: 50px">
            <?= $content ?>
        </div>
        <div class="ui container">
            <p style="margin-top: 100px;position: relative">&copy;&nbsp;<?= date('Y') ?>&nbsp;Goooooot.com</p>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

