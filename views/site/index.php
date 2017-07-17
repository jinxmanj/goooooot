<?php

/* @var $this yii\web\View */
use yii\web\View as View;

$this->title = 'I Goooooot It !';
$script = <<< JS
   particlesJS.load('particles-js', 'js/particles.json', function() {
});

$('.special.cards .image').dimmer({
  on: 'hover'
});

$(document)
    .ready(function() {
      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;
      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;
    })
;

JS;

$this->registerJs($script, View::POS_END);
?>
<link rel="stylesheet" type="text/css" href="/css/index.css">
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
    <a class="item">Login</a>
    <a class="item">Signup</a>
</div>
<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">
        <div id="particles-js" style="margin-top: -15px"></div>
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
                    <a class="ui inverted button">Log in</a>
                    <a class="ui inverted button">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="ui text container">
            <h2 style="margin-top: 50px">Do whatever you want when you want to</h2>
            <div class="ui horizontal divider inverted">Or</div>
            <div class="ui grid special cards">
                <div class="two wide column"></div>
                <div class="six wide column">
                    <div class="ui card">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Add Friend</div>
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
                <div class="six wide column">
                    <div class="ui card">
                        <div class="blurring dimmable image">
                            <div class="ui inverted dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui primary button">Add Friend</div>
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
                <div class="two wide column"></div>
            </div>
        </div>
    </div>
</div>

