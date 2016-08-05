<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mailing'), ['action' => 'edit', $mailing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mailing'), ['action' => 'delete', $mailing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mailings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mailing'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mailings view large-9 medium-8 columns content">
    <h3><?= h($mailing->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($mailing->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($mailing->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= h($mailing->sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($mailing->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($mailing->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($mailing->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= h($mailing->empresa) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= h($mailing->cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($mailing->id) ?></td>
        </tr>
    </table>
</div>
