<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="table table-stripped">
        <tr>
            <th scope="row"><?= __('Uname') ?></th>
            <td><?= h($user->uname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($user->type) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Shops') ?></h4>
        <?php if (!empty($user->shops)): ?>
        <table class="table table-stripped">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Contact') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->shops as $shops): ?>
            <tr>
                <td><?= h($shops->id) ?></td>
                <td><?= h($shops->name) ?></td>
                <td><?= h($shops->user_id) ?></td>
                <td><?= h($shops->latitude) ?></td>
                <td><?= h($shops->longitude) ?></td>
                <td><?= h($shops->contact) ?></td>
                <td><?= h($shops->created) ?></td>
                <td><?= h($shops->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shops', 'action' => 'view', $shops->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shops', 'action' => 'edit', $shops->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shops', 'action' => 'delete', $shops->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shops->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
