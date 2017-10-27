<div class="applications view">
    <h2><?php echo __('Application'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($application['Application']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($application['Application']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo h($application['Application']['description']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Itunes Url'); ?></dt>
        <dd>
            <?php echo h($application['Application']['itunes_url']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Google Play Url'); ?></dt>
        <dd>
            <?php echo h($application['Application']['google_play_url']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rating'); ?></dt>
        <dd>
            <?php echo h($application['Application']['rating']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cost'); ?></dt>
        <dd>
            <?php echo h($application['Application']['cost']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Audio'); ?></dt>
        <dd>
            <?php echo h($application['Application']['audio']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Text'); ?></dt>
        <dd>
            <?php echo h($application['Application']['text']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Video'); ?></dt>
        <dd>
            <?php echo h($application['Application']['video']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Images'); ?></dt>
        <dd>
            <?php echo h($application['Application']['images']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has No Task Cap'); ?></dt>
        <dd>
            <?php echo h($application['Application']['no_task_cap']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Instructions Available'); ?></dt>
        <dd>
            <?php echo h($application['Application']['instructions_available']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Is Quick To Upload Task'); ?></dt>
        <dd>
            <?php echo h($application['Application']['quick_to_upload_task']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Extra Features For Various Populations'); ?></dt>
        <dd>
            <?php echo h($application['Application']['extra_features_for_various_populations']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Is App Easy To Use And Does Not Crash'); ?></dt>
        <dd>
            <?php echo h($application['Application']['app_easy_to_use_and_does_not_crash']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Is Content Appropriate'); ?></dt>
        <dd>
            <?php echo h($application['Application']['content_appropriate']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Ads Or In App Purchases'); ?></dt>
        <dd>
            <?php echo h($application['Application']['ads_or_in_app_purchases']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Can App Be Customized For Different Users'); ?></dt>
        <dd>
            <?php echo h($application['Application']['app_be_customized_for_different_users']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has In App Data Collection'); ?></dt>
        <dd>
            <?php echo h($application['Application']['in_app_data_collection']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Can Content Be Exported'); ?></dt>
        <dd>
            <?php echo h($application['Application']['content_be_exported']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Has Appealling Design Graphics'); ?></dt>
        <dd>
            <?php echo h($application['Application']['appealing_design_graphics']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Is App Motivating For User'); ?></dt>
        <dd>
            <?php echo h($application['Application']['app_motivating_for_user']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Does App Promote Creativity And Imagination'); ?></dt>
        <dd>
            <?php echo h($application['Application']['app_promote_creativity_and_imagination']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($application['Application']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Updated'); ?></dt>
        <dd>
            <?php echo h($application['Application']['updated']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="related">
    <h3><?php echo __('Related Comments'); ?></h3>
    <?php if (!empty($application['Comment'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Application Id'); ?></th>
                <th><?php echo __('Comment'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Updated'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($application['Comment'] as $comment): ?>
                <tr>
                    <td><?php echo $comment['id']; ?></td>
                    <td><?php echo $comment['application_id']; ?></td>
                    <td><?php echo $comment['comment']; ?></td>
                    <td><?php echo $comment['created']; ?></td>
                    <td><?php echo $comment['updated']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Images'); ?></h3>
    <?php if (!empty($application['Image'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Application Id'); ?></th>
                <th><?php echo __('Caption'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Updated'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($application['Image'] as $image): ?>
                <tr>
                    <td><?php echo $image['id']; ?></td>
                    <td><?php echo $image['application_id']; ?></td>
                    <td><?php echo $image['caption']; ?></td>
                    <td><?php echo $image['created']; ?></td>
                    <td><?php echo $image['updated']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), null, __('Are you sure you want to delete # %s?', $image['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
