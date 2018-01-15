<?= $this->Html->css('climate/index.css') ?>

    <div class="container">
      <center><h2 id="title">Digite o nome da cidade a qual deseja saber o clima</h2>
        <div class="card card-container">
            <p id="profile-name" class="profile-name-card"></p>
            <?= $this->Form->create('search', ['class'=>'form-signin', 'url'=>'/climate/view']) ?>
                <span id="reauth-email" class="reauth-email"></span>
                <?= $this->Form->input('city', ['type'=>'text', 'label'=>false, 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'Digite aqui a cidade'])  ?>
                <?= $this->Form->input('Pesquisar', ['type'=>'submit', 'class'=>'btn btn-lg btn-primary btn-block btn-signin']) ?>
            <?= $this->Form->end() ?>
        </div><!-- /card-container -->
    </div><!-- /container -->
