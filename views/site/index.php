<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?= \yii2fullcalendar\yii2fullcalendar::widget(array(
    'events' => $events,
)) ;
?>
