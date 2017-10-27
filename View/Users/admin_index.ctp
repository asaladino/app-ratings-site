<div class="users index">
    <div class="row">
        <div class="large-8 columns">
            <h2><?php echo __('Users'); ?></h2>
        </div>
        <div class="large-4 columns">
            <?php echo $this->Html->link(__('New User'), array('action' => 'add'), array('class' => 'button small right')); ?>
        </div>
    </div>
    <table class="large-12">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('username'); ?></th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('updated'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['username'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination') ?>
</div>