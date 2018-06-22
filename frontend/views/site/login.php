<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
/*
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
*/?>
<!--<div class="site-login">

    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'login-form']); */?>

            <?php /*if($model->scenario === 'loginWithEmail') { */?>
                <?/*= $form->field($model, 'email')->textInput(['autofocus' => true]) */?>
            <?/* }else { */?>
                <?/*= $form->field($model, 'username')->textInput(['autofocus' => true]) */?>
            <?/* } */?>


                <?/*= $form->field($model, 'password')->passwordInput() */?>

                <?/*= $form->field($model, 'rememberMe')->checkbox() */?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?/*= Html::a('reset it', ['site/request-password-reset']) */?>.
                </div>

                <div class="form-group">
                    <?/*= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) */?>
                </div>



            <?php /*ActiveForm::end(); */?>
        </div>
    </div>
</div>-->

<!--
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="#">
                    <i class="fa fa-user-circle-o profile-img-card" aria-hidden="true"></i>
                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Имя пользователя</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" required  class="form-control" name="username" id="username"  placeholder="Введите имя пользователя"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Пароль</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" required class="form-control" name="password" id="password"  placeholder="Введите пароль"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" class="btn login_btn anim-btn on">Войти</button>
                    </div>
                    <div class="login-register">
                        <a href="signup">Регистрация</a> или <a href="reset_password.php">забыли пароль?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
-->


<!-- Body  -->
<body style="background-color: #edf0f7">
<div class="container" style="margin-left: 70px;margin-top: 15px" >
    <div style="display: flex">
        <div class="loginContainer">
            <h2>Уже зарегистрированы</h2>
            <form id="login-form" action="/frontend/web/index.php/en/site/login" method="post">
            <input type="hidden" name="_csrf-frontend" value="5iYERMHSq_DlshTgTn5q8cO_bhVS57hahaeKUdmoS1bXU0ET8obIl5H2Zph2Gz2ht_0WcgOG3CC99cUFrOc4OA==">
                <div class="form-group">
                    <input type="text" class="form-control" id="usr" name="LoginForm[email]" placeholder="Email адрес">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" name="LoginForm[password]" placeholder="Пароль">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="login-button">Войти</button>
            </form>
        </div>
        <div class="regContainer">
            <h2>Впервые на Kaspi.kz</h2>
            <p>Чтобы продолжить, необходимо зарегистрироваться (получить логин и пароль). Это бесплатно.</p>
            <form>
                <button type="button"  class="btn btn-primary btn-lg btn-block" ><a href="signup" style="text-decoration: none; color: #ffffff;">Зарегистрироваться</a></button>
            </form>
        </div>
    </div>
</body>
