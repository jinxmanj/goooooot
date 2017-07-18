<?php

/* @var $this yii\web\View */
use yii\web\View as View;

$this->title = 'I Goooooot It !';
$script = <<< JS
$('.special.cards .image').dimmer({
  on: 'hover'
});
JS;
$this->registerJs($script, View::POS_END);
?>
<h2 style="position: relative">
<!--    Do whatever you want when you want to-->
    La vie est courte, commencez par le dessert !
</h2>
<div class="ui horizontal divider inverted">Or</div>
<div class="ui grid special cards doubling stackable">
    <div class="four wide column">
        <div class="ui card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Coming Soon</div>
                        </div>
                    </div>
                </div>
                <img src="/images/avatar/large/elliot.jpg">
            </div>
            <div class="content">
                <a class="header">Team Fu</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a><i class="users icon"></i> 2 Members </a>
            </div>
        </div>
    </div>
    <div class="four wide column">
        <div class="ui card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Coming Soon</div>
                        </div>
                    </div>
                </div>
                <img src="/images/avatar/large/jenny.jpg">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Create in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a><i class="users icon"></i> 2 Members </a>
            </div>
        </div>
    </div>
    <div class="four wide column">
        <div class="ui card">
            <div class="blurring dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui inverted button">Coming Soon</div>
                        </div>
                    </div>
                </div>
                <img src="/images/avatar/large/elliot.jpg">
            </div>
            <div class="content">
                <a class="header">Team Fu</a>
                <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a><i class="users icon"></i> 2 Members </a>
            </div>
        </div>
    </div>
    <div class="four wide column">
        <div class="ui card">
            <div class="blurring dimmable image">
                <div class="ui inverted dimmer">
                    <div class="content">
                        <div class="center">
                            <div class="ui primary button">Coming Soon</div>
                        </div>
                    </div>
                </div>
                <img src="/images/avatar/large/jenny.jpg">
            </div>
            <div class="content">
                <a class="header">Team Hess</a>
                <div class="meta">
                    <span class="date">Create in Aug 2014</span>
                </div>
            </div>
            <div class="extra content">
                <a><i class="users icon"></i> 2 Members </a>
            </div>
        </div>
    </div>
</div>

