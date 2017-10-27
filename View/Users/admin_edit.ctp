<div class="users form">
    <?php echo $this->Form->create('User') ?>
    <h2><?php echo __('Edit User'); ?></h2>
    <div class="row">
        <div class="large-6 columns">
            <?= $this->Form->input('id') ?>
            <?= $this->Form->input('username') ?>
        </div>
        <div class="large-6 columns">
            <?= $this->Form->input('password') ?>
        </div>
    </div>
    <hr/>
    <?= $this->Form->button(__('Submit'), array('class' => 'small right')) ?>
    <?php echo $this->Form->end(); ?>
</div>