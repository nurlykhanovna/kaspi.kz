<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
/*
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
*/?>
<!--<div class="site-signup">
    <h1><?/*= Html::encode($this->title) */?></h1>


    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'form-signup']); */?>

                <?/*= $form->field($model, 'username')->textInput(['autofocus' => true]) */?>

                <?/*= $form->field($model, 'email') */?>

                <?/*= $form->field($model, 'password')->passwordInput() */?>

                <div class="form-group">
                    <?/*= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) */?>
                </div>

            <?php /*ActiveForm::end(); */?>
        </div>
    </div>-->

    <!-- Body  -->
    <body style="background-color: #edf0f7">
    <div class="container" style="margin-left: 70px;margin-top: 10px" >
        <div class="loginContainer" style="margin-left: 250px">
            <h2>Регистрация</h2>
            <form id="form-signup" action="/frontend/web/index.php/ru/site/signup" method="post">
            <input type="hidden" name="_csrf-frontend" value="_6gXKtRttB9RpqaWC3JYjc0opJyJ0t4XffMI3yHsQj6q0CUZrTjgfTXT_9ptCB3Zt0Li18Obt14opFGLZa4KVQ==">
                <div class="form-group">
                    <input type="text" class="form-control" id="usr" name="SignupForm[username]" placeholder="Имя пользователя">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="usr" name="SignupForm[email]" placeholder="Email адрес">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" name="SignupForm[password]" placeholder="Пароль">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="login-button">Зарегистрироваться</button>
            </form>
        </div>
    </body>





<!--    <div class="container">-->
<!--        <div class="row main">-->
<!--            <div class="main-login main-center">-->
<!--                <form class="form-horizontal" method="post" action="#">-->
<!--                    <i class="fa fa-user-plus profile-img-card" aria-hidden="true"></i>-->
<!--                    <div class="form-group">-->
<!--                        <label for="username" class="cols-sm-2 control-label">Имя пользователя</label>-->
<!--                        <div class="cols-sm-10">-->
<!--                            <div class="input-group">-->
<!--                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>-->
<!--                                <input type="text" required  class="form-control" name="username" id="username"  placeholder="Введите имя пользователя"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="username" class="cols-sm-2 control-label">E-mail</label>-->
<!--                        <div class="cols-sm-10">-->
<!--                            <div class="input-group">-->
<!--                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>-->
<!--                                <input type="email" required  class="form-control" name="username" id="username"  placeholder="Введите e-mail"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="password" class="cols-sm-2 control-label">Пароль</label>-->
<!--                        <div class="cols-sm-10">-->
<!--                            <div class="input-group">-->
<!--                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>-->
<!--                                <input type="password" required class="form-control" name="password" id="password"  placeholder="Введите пароль"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group ">-->
<!--                        <button type="submit" class="btn login_btn anim-btn on">Регистрация</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
