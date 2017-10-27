<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            <?= __d('cake_dev', 'Mercy') ?>:
            <?= $title_for_layout ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('normalize');
        echo $this->Html->css('foundation.min');

        echo $this->Html->script('vendor/custom.modernizr');
        echo $this->Html->script('vendor/fastclick');
        echo $this->Html->script('vendor/jquery');
        echo $this->Html->script('foundation/foundation');
        echo $this->Html->script('foundation/foundation.tab');
        echo $this->Html->script('foundation/foundation.orbit');
        echo $this->Html->script('foundation/foundation.dropdown');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).foundation();
            });
        </script>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div class="row">
                    <div class="large-5 columns">
                        <h1><?= $this->Html->link('Mobile App Ratings', '/') ?></h1>
                    </div>
                    <div class="columns large-7 right">
                        <br/>
                        <?= $this->Form->create('Application', array('url' => array('controller' => 'pages', 'action' => 'home'), 'type' => 'get')) ?>
                        <div class="row collapse">
                            <div class="small-8 columns">
                                <?= $this->Form->input('search', array('placeholder' => 'Search Applications', 'label' => false)) ?>
                            </div>
                            <div class="small-2 columns">
                                <a href="#" class="button postfix" data-dropdown="dropFilter">Filter</a>
                            </div>
                            <div class="small-2 columns">
                                <?= $this->Form->submit('Go', array('class' => 'postfix')) ?>
                            </div>
                        </div>
                        <div id="dropFilter" data-dropdown-content class="f-dropdown content large">
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
                                    echo $this->Form->input('app_easy_to_use_and_does_not_crash');
                                    ?>
                                </div>
                                <div class="columns large-6">
                                    <?php
                                    echo $this->Form->input('content_appropriate');
                                    echo $this->Form->input('ads_or_in_app_purchases');
                                    echo $this->Form->input('app_be_customized_for_different_users');
                                    echo $this->Form->input('in_app_data_collection');
                                    echo $this->Form->input('content_be_exported');
                                    echo $this->Form->input('appealing_design_graphics');
                                    echo $this->Form->input('app_motivating_for_user');
                                    echo $this->Form->input('app_promote_creativity_and_imagination');
                                    ?>
                                    <label>&nbsp;</label>
                                    <?= $this->Html->link('Clear Search', array('controller' => 'pages', 'action' => 'clear'), array('class' => 'button right small')) ?>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="row">
                    <div class="large-12 columns">
                        <hr/>
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
