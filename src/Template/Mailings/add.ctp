<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mailings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mailings form large-9 medium-8 columns content">
    <?= $this->Form->create($mailing) ?>
    <fieldset>
        <legend><?= __('Add Mailing') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('sexo');
            echo $this->Form->input('telefone');
            echo $this->Form->input('cidade');
            echo $this->Form->input('estado');
            echo $this->Form->input('empresa');
            echo $this->Form->input('cargo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
