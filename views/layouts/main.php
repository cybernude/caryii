<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'ระบบสำนักงาน โรงพยาบาลเขื่องใน',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'ระบบบริการ', 'url' => ['#'], 'items' =>[
                ['label' => 'ระบบขอใช้รถยนต์ส่วนกลาง', 'url' => ['/carbook']],
                ['label' => 'ระบบจองห้องประชุม', 'url' => ['#']],
                ['label' => 'ระบบหนังสือเวียน', 'url' => ['#']]
            ]],
            ['label' => 'ตั้งค่าระบบขอใช้รถยนต์ส่วนกลาง', 'url' => ['#'], 'items' => [
                    ['label' => 'บริหารรถ', 'url' => ['/car']],
                    ['label' => 'บริหารยี่ห้อ', 'url' => ['/car-brand']],
                    ['label' => 'บริหารคนขับ', 'url' => ['/drivers']],
                    ['label' => 'สิทธิการใช้งาน', 'url' => ['/carpriority']],
                    ['label' => 'ผู้ใช้งานระบบ', 'url' => ['/users']],
                    ['label' => 'ประเภทการเดินทาง', 'url' => ['/gotype']],
                    ['label' => 'ประเภทเชื้อเพลิง', 'url' => ['/fueltype']],
                    ['label' => 'ประเภทกะ', 'url' => ['/syn']],
                    ['label' => 'ประเภทเวร', 'url' => ['/shift']],
                ]],

            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ฝ่ายสนับสนุนบริการสุขภาพ โรงพยาบาลเขื่องใน จังหวัดอุบลราชธานี <?= date('Y') ?></p>

        <p class="pull-right"><?= "Powered by Mr.Surachai Sriaram" ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
