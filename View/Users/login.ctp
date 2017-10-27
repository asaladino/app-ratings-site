<div class="row">
    <div class="large-5 columns panel large-centered">
        <h4>User Login</h4>
        <div id="user-login" class="users form">
            <?php $auth = $this->Session->flash('auth'); ?>
            <?php if (!empty($auth)): ?>
                <div class="alert-box alert">
                    <?php echo $auth; ?>
                </div>
            <?php endif; ?>
            <?php echo $this->Form->create('User', array('action' => 'login')); ?>
            <?php echo $this->Form->input('username', array('error' => array('attributes' => array('wrap' => 'small', 'class' => '')))); ?>
            <?php echo $this->Form->input('password', array('error' => array('attributes' => array('wrap' => 'small', 'class' => '')))); ?>
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'button small right')); ?>
            <?php echo $this->Form->end(); ?>
            <br/>
        </div>
    </div>
</div>