<div class="applications form">
    <?php echo $this->Form->create('Application', array('type' => 'file')); ?>
    <h2><?php echo __('Add Application'); ?></h2>
    <div class="row">
        <div class="large-12 columns">
            <dl class="tabs" data-tab>
                <dd class="active"><a href="#panelInformation">Information</a></dd>
                <dd><a href="#panelRating">Rating</a></dd>
            </dl>
            <div class="tabs-content">
                <div class="large-12 content active" id="panelInformation">
                    <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('description');
                    echo $this->Form->input('itunes_url');
                    echo $this->Form->input('google_play_url');
                    ?>
                    <div class="row">
                        <div class="columns large-6">
                            <?= $this->Form->input('rating') ?>
                        </div>
                        <div class="columns large-6">
                            <?= $this->Form->input('cost') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <?= $this->Form->input('icon', array('type' => 'file')) ?>
                        </div>
                    </div>
                </div>
                <div class="large-12 content" id="panelRating">
                    <div class="row">
                        <div class="columns large-6">
                            <?php
                            echo $this->Form->input('audio');
                            echo $this->Form->input('text');
                            echo $this->Form->input('video');
                            echo $this->Form->input('images');
                            echo $this->Form->input('no_task_cap');
                            echo $this->Form->input('instructions_available');
                            echo $this->Form->input('quick_to_upload_task');
                            echo $this->Form->input('extra_features_for_various_populations');
                            ?>
                        </div>
                        <div class="columns large-6">
                            <?php
                            echo $this->Form->input('app_easy_to_use_and_does_not_crash');
                            echo $this->Form->input('content_appropriate');
                            echo $this->Form->input('ads_or_in_app_purchases');
                            echo $this->Form->input('app_be_customized_for_different_users');
                            echo $this->Form->input('in_app_data_collection');
                            echo $this->Form->input('content_be_exported');
                            echo $this->Form->input('appealing_design_graphics');
                            echo $this->Form->input('app_motivating_for_user');
                            echo $this->Form->input('app_promote_creativity_and_imagination');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <?= $this->Form->button(__('Submit'), array('class' => 'small right')) ?>
    <?php echo $this->Form->end() ?>
</div>