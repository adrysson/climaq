<?php
echo $this->Html->css('climate/view.css');
if(!$response = $this->OpenWeatherMap->request($city, $key)): ?>

  <div class="container data">
      <div class="single category">
        <h3 class="side-title">Cidade não encontrada!</h3>
        <ul class="list-unstyled">
          <li><h5>A cidade digitada não foi encontrada na base de dados</h5></li>
          <li><a href="/climate">Pesquisar nova cidade</a></li>
        </ul>
      </div>
  </div>

<?php else: ?>

<div class="container data">
    <div class="single category">
      <h3 class="side-title">Previsão do tempo da cidade</h3>
      <ul class="list-unstyled">
        <?php foreach ($response as $data): ?>
          <li><a><?=  $data['name'] ?> <span class="pull-right"><?= $data['value'] ?></span></a></li>
        <?php endforeach ?>
      </ul>
    </div>
    <button type="button" name="pesquisar_nova_cidade" id="pesquisar-nova-cidade" class="btn btn-success form-control">
      <a href="/climate">Pesquisar nova cidade</a>
    </button>
</div>

<?php endif ?>
