<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>-->
<!--        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.-->
<!--    </p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                --><?//= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?//= $form->field($model, 'email') ?>
<!---->
<!--                --><?//= $form->field($model, 'subject') ?>
<!---->
<!--                --><?//= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                ]) ?>
<!---->
<!--                <div class="form-group">-->
<!--                    --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->

    <div class="kartochki">
        <div class="row">
            <div class="col-md-2">
                <div class="bg1" data-id="1">
                    <div class="bg_item">
                        Aa
                    </div>
                </div>
                <div class="bg2" data-id="1">
                    <div class="bg_item">
                        <img src="https://media.giphy.com/media/3o7TKMt1VVNkHV2PaE/source.gif" alt="">
                        <div class="latyn">
                            Aıý
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="bg1" data-id="2">
                    <div class="bg_item">
                        Bb
                    </div>
                </div>
                <div class="bg2" data-id="2">
                    <div class="bg_item">
                        <img src="https://cdn.dribbble.com/users/1640967/screenshots/3600345/fish-dribbble.gif" alt="">
                        <div class="latyn">
                            Balyq
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="bg1" data-id="3">
                    <div class="bg_item">
                        Dd
                    </div>
                </div>
                <div class="bg2" data-id="3">
                    <div class="bg_item">
                        <img src="	https://cdn.dribbble.com/users/514480/screenshots/2091133/doctor.gif" alt="">
                        <div class="latyn">
                            Dáriger
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="bg1" data-id="4">
                    <div class="bg_item">
                        Ee
                    </div>
                </div>
                <div class="bg2" data-id="4">
                    <div class="bg_item">
                        <img src="https://cdn.dribbble.com/users/106600/screenshots/2259159/ghostblue.gif" alt="">
                        <div class="latyn">
                            Eles
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="bg1" data-id="5">
                    <div class="bg_item">
                        Ff
                    </div>
                </div>
                <div class="bg2" data-id="5">
                    <div class="bg_item">
                        <img src="https://cdn.dribbble.com/users/167298/screenshots/2516450/gol.gif" alt="">
                        <div class="latyn">
                            Fýtbolshy
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="bg1" data-id="6">
                    <div class="bg_item">
                        Gg
                    </div>
                </div>
                <div class="bg2" data-id="6">
                    <div class="bg_item">
                        <img src="https://cdn.dribbble.com/users/22930/screenshots/2617038/tulips_dribbble.gif" alt="">
                        <div class="latyn">
                            Gúl
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var lastId;
    $("body").on("click", ".bg1", function() {
        var id = $(this).data("id");
        if (lastId == id) {
            $('.bg1[data-id='+lastId+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
                $('.bg2[data-id='+lastId+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
            });
        } else {
            $('.bg2[data-id='+lastId+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
                $('.bg1[data-id='+lastId+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
                $('.bg1[data-id='+id+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
                    $('.bg2[data-id='+id+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
                    lastId = id;
                });
            });
        }
    });
    $("body").on("click", ".bg2", function() {
        var id = $(this).data("id");
        $('.bg2[data-id='+id+']').removeClass('animated flipInY').addClass('animated flipOutY').fadeOut(800).promise().done(function() {
            $('.bg1[data-id='+id+']').removeClass('animated flipOutY').addClass('animated flipInY').fadeIn(800);
        });
    });

</script>
