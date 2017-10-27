<div class="applications index">
    <div class="row">
        <div class="large-8 columns">
            <h2><?php echo __('Applications'); ?></h2>
        </div>
        <div class="large-4 columns">
            <?php echo $this->Html->link(__('New Application'), array('action' => 'add'), array('class' => 'button small right')); ?>
        </div>
    </div>
    <table class="large-12">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('rating'); ?></th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('updated'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application): ?>
                <tr>
                    <td><?php echo h($application['Application']['name']); ?>&nbsp;</td>
                    <td><?php echo h($application['Application']['rating']); ?>&nbsp;</td>
                    <td><?php echo h($application['Application']['created']); ?>&nbsp;</td>
                    <td><?php echo h($application['Application']['updated']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $application['Application']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $application['Application']['id']), null, __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination') ?>
</div>