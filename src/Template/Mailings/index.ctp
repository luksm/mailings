<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mailing'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mailings index large-9 medium-8 columns content">
    <h3><?= __('Mailings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('sexo') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('cidade') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('empresa') ?></th>
                <th><?= $this->Paginator->sort('cargo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mailings as $mailing): ?>
            <tr>
                <td><?= h($mailing->nome) ?></td>
                <td><?= h($mailing->email) ?></td>
                <td><?= h($mailing->sexo) ?></td>
                <td><?= h($mailing->telefone) ?></td>
                <td><?= h($mailing->cidade) ?></td>
                <td><?= h($mailing->estado) ?></td>
                <td><?= h($mailing->empresa) ?></td>
                <td><?= h($mailing->cargo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mailing->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mailing->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mailing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailing->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
