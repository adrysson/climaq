<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
echo $this->Html->css('users/cadastrar.css')
?>
<center>
<div class="container">
  <div class="row main">
    <div class="main-login main-center">
    <h5>Preencha o formulário para realizar seu cadastro e acessar as previsões.</h5>
      <?= $this->Form->create($user) ?>
        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
              <?php echo $this->Form->input('user_name', ['type'=>'text', 'class'=>'form-control', 'label'=>false, 'placeholder'=>'Informe seu nome']); ?>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
              <?php echo $this->Form->input('user_email', ['type'=>'email', 'class'=>'form-control', 'label'=>false, 'placeholder'=>'Informe seu e-mail']); ?>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
              <?php echo $this->Form->input('user_cep', ['type'=>'text', 'class'=>'form-control', 'label'=>false, 'placeholder'=>'Informe seu CEP']); ?>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-location-arrow fa" aria-hidden="true"></i></span>
              <?php echo $this->Form->input('user_state', ['type'=>'text', 'class'=>'form-control', 'label'=>false, 'placeholder'=>'Informe seu Estado']); ?>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-location-arrow fa" aria-hidden="true"></i></span>
              <?php echo $this->Form->input('user_city', ['type'=>'text', 'class'=>'form-control', 'label'=>false, 'placeholder'=>'Informe sua Cidade']); ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <?php echo $this->Form->input('user_password', ['type'=>'password', 'class'=>'form-control', 'label'=>false, 'placeholder'=>'Digite sua senha']); ?>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <?= $this->Form->button(__('Realizar cadastro'), ['type'=>'submit', 'class'=>'btn btn-success btn-lg btn-block login-button']) ?>
        </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>
