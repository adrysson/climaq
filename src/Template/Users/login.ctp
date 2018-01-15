<?= $this->Html->css('users/login.css') ?>

    <div class="container">
        <div class="card card-container">
            <center><h2>Login</h2>
            <p id="profile-name" class="profile-name-card"></p>
            <?= $this->Form->create('login', ['class'=>'form-signin']) ?>
                <span id="reauth-email" class="reauth-email"></span>
                <?= $this->Form->input('user_email', ['type'=>'email', 'label'=>false, 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'Digite aqui seu e-mail'])  ?>
                <?= $this->Form->input('user_password', ['type'=>'password', 'label'=>false, 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'Digite aqui sua senha'])  ?>
                <p>Não possui cadastro? <a href="/users/register">Cadastre-se</a></p>
                <?= $this->Form->input('Entrar', ['type'=>'submit', 'class'=>'btn btn-lg btn-primary btn-block btn-signin']) ?>
            <?= $this->Form->end() ?>
        </div><!-- /card-container -->
    </div><!-- /container -->
