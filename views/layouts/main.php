<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use rmrevin\yii\favicon\Favicon;

AppAsset::register($this);
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
    <?= Favicon::widget([
        'web' => '@web',
        'webroot' => '@webroot',
        'viewComponent' => 'view',
    ]) ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?= Url::to('@web/img/sidebar-upou.jpg') ?>">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <?php
            NavBar::begin([
                //'brandLabel' => 'Home',
                'options' => [
                    'class' => 'navbar-default navbar-fixed',
                ],
                'innerContainerOptions' => ['class' => 'container-fluid'],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                    '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout'])
                        . Html::endForm()
                    . '</li>'
                    )
                ],
            ]);
            NavBar::end();
            ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <?= $content ?>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>


    <?php /*
    <div class="wrap">
    <?php
    NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
    'class' => 'navbar-inverse navbar-fixed-top',
],
]);
echo Nav::widget([
'options' => ['class' => 'navbar-nav navbar-right'],
'items' => [
['label' => 'Home', 'url' => ['/site/index']],
['label' => 'About', 'url' => ['/site/about']],
['label' => 'Contact', 'url' => ['/site/contact']],
Yii::$app->user->isGuest ? (
['label' => 'Login', 'url' => ['/site/login']]
) : (
'<li>'
. Html::beginForm(['/site/logout'], 'post')
. Html::submitButton(
'Logout (' . Yii::$app->user->identity->username . ')',
['class' => 'btn btn-link logout']
)
. Html::endForm()
. '</li>'
)
],
]);
NavBar::end();
?>

<div class="container">
<?= Breadcrumbs::widget([
'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>
<?= $content ?>
</div>
</div>

<footer class="footer">
<div class="container">
<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

<p class="pull-right"><?= Yii::powered() ?></p>
</div>
</footer>
*/ ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
