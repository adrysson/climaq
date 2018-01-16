<?= $this->Html->css('climate/view.css') ?>

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
