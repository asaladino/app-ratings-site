<div class="applications form">
    <h2><?php echo __('Edit Application'); ?></h2>
    <?php echo $this->Form->create('Application', array('type' => 'file')); ?>
    <div class="row">
        <div class="large-12 columns">
            <dl class="tabs" data-tab>
                <dd class="active"><a href="#panelInformation">Information</a></dd>
                <dd><a href="#panelRating">Rating</a></dd>
                <dd><a href="#panelImages">Images</a></dd>
                <dd><a href="#panelComments">Comments</a></dd>
            </dl>
            <div class="tabs-content">
                <div class="large-12 content active" id="panelInformation">
                    <div class="row">
                        <div class="columns large-3">
                            <?= $this->Html->image('icons/' . $this->data['Application']['id'], array('class' => 'th')) ?>
                        </div>
                        <div class="columns large-9">
                            <?php
                            echo $this->Form->input('id');
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
                <div class="large-12 content" id="panelImages">
                    <a href="#/add-image" data-reveal-id="add-image" class="button right small">Add Image</a>
                    <hr/>
                    <ul class="small-block-grid-3">
                        <?php foreach ($this->data['Image'] as $image): ?>
                            <li><?= $this->Html->image('applications/' . $image['id'], array('class' => 'th')) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="content" id="panelComments">
                    <a href="#/add-commment" data-reveal-id="add-comment" class="button right small">Add Comment</a>
                    <hr/>
                    <table>
                        <tr>
                            <th>#</th>
                            <th><?php echo h('comment'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        <?php foreach ($this->data['Comment'] as $comment): ?>
                            <tr>
                                <td><?php echo h($comment['id']); ?>&nbsp;</td>
                                <td><?php echo h($comment['comment']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__('Delete'), array('controller' => 'comments', 'action' => 'delete', 'admin' => true, $comment['id'])) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <?= $this->Form->button(__('Submit'), array('class' => 'small right')) ?>
    <?php echo $this->Form->end() ?>

    <div id="add-comment" class="reveal-modal small" data-reveal>
        <?php echo $this->Form->create('Comment', array('url' => array('controller' => 'comments', 'action' => 'add', 'admin' => true))) ?>
        <h4><?php echo __('Add Comment'); ?></h4>
        <?= $this->Form->input('application_id', array('type' => 'hidden', 'value' => $this->data['Application']['id'])) ?>
        <?= $this->Form->input('comment') ?>
        <hr/>
        <?= $this->Form->button(__('Submit'), array('class' => 'small right')) ?>
        <?php echo $this->Form->end() ?>
    </div>

    <div id="add-image" class="reveal-modal small" data-reveal>
        <?php echo $this->Form->create('Image', array('url' => array('controller' => 'images', 'action' => 'add', 'admin' => true), 'type' => 'file')) ?>
        <h4><?php echo __('Add Image'); ?></h4>
        <?= $this->Form->input('application_id', array('type' => 'hidden', 'value' => $this->data['Application']['id'])) ?>
        <?= $this->Form->input('caption') ?>
        <div class="row">
            <div class="large-6 columns">
                <?= $this->Form->input('image', array('type' => 'file')) ?>
            </div>
            <div class="large-6 columns">
                <?= $this->Form->input('order', array('value' => count($this->data['Image']))) ?>
            </div>
        </div>
        <hr/>
        <?= $this->Form->button(__('Submit'), array('class' => 'small right')) ?>
        <?php echo $this->Form->end() ?>
    </div>
</div>