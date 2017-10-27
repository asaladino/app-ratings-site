<div class="comments form">
    <?php echo $this->Form->create('Comment'); ?>
    <fieldset>
        <legend><?php echo __('Admin Add Comment'); ?></legend>
        <?php
        echo $this->Form->input('application_id');
        echo $this->Form->input('comment');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
    </ul>
</div>
