<div class="row">

    <div class="columns large-3">
        <?= $this->Html->image('icons/' . $application['Application']['id'], array('class' => 'th')) ?>
    </div>

    <div class="columns large-9">
        <h4><?= $this->Html->link($application['Application']['name'], array('action' => 'view', $application['Application']['id'])) ?></h4>
        <div class="row">
            <div class="columns large-2">
                <h5>Cost: <?= $this->Number->currency($application['Application']['cost']) ?></h5>
            </div>
            <div class="columns large-4">
                <h5>Rating: <?= $application['Application']['rating'] ?> out of 10</h5>
            </div>
            <div class="columns large-2">
                <?= $this->Html->link('iTunes', $application['Application']['itunes_url'], array('target' => '_blank', 'class' => 'tiny button round')) ?>
            </div>
            <div class="columns large-4">
                <?= $this->Html->link('Google Play', $application['Application']['itunes_url'], array('target' => '_blank', 'class' => 'tiny button round')) ?>
            </div>
        </div>
        <p>
            <?= $application['Application']['description'] ?>
        </p>

        <ul data-orbit>
            <?php foreach ($application['Image'] as $image): ?>
                <li>
                    <?= $this->Html->image('applications/' . $image['id'], array('class' => 'th')) ?>
                    <div class="orbit-caption text-center">
                        <?= $image['caption'] ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <hr/>
        <h4>Ratings</h4>
        <?php $rating_max = 10;?>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Audio</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['audio']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Text</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['text']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Video</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['video']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Images</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['images']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>No Task Cap</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['no_task_cap']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Instructions Available</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['instructions_available']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Quick To Upload Task</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['quick_to_upload_task']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Extra Features For Various Populations</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['extra_features_for_various_populations']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>App Easy To Use And Does Not Crash</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['app_easy_to_use_and_does_not_crash']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Content Appropriate</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['content_appropriate']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Ads Or In App Purchases</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['ads_or_in_app_purchases']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>App Be Customized For Different Users</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['app_be_customized_for_different_users']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>In App Data Collection</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['in_app_data_collection']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Content Be Exported</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['content_be_exported']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>Appealing Design Graphics</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['appealing_design_graphics']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>App Motivating For User</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['app_motivating_for_user']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="large-6 columns">
                <h5>App Promote Creativity And Imagination</h5>
            </div>
            <div class="large-6 columns">
                <div class="progress">
                    <span class="meter" style="width: <?= $this->Number->toPercentage(($application['Application']['app_promote_creativity_and_imagination']/$rating_max) * 100)?>"></span>
                </div>
            </div>
        </div>
        <hr/>
        <h4>Comments</h4>
        <?php foreach ($application['Comment'] as $comment): ?>
            <p><?php echo h($comment['comment']); ?></p>
            <hr/>
        <?php endforeach; ?>
    </div>
</div>
