<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use Yii;

class Alert extends \yii\bootstrap\Widget {

    public function init() {
        parent::init();
        if (\Yii::$app->session->hasFlash('success')) {
            echo "<div class='alert alert-success'>";
            echo \Yii::$app->session->getFlash('success');
            echo "</div>";
        } elseif (\Yii::$app->session->hasFlash('error')) {
            echo "<div class='alert alert-danger'>";
            echo \Yii::$app->session->getFlash('error');
            echo "</div>";
        }
    }

}

?>