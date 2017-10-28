<?php
$cakeDescription = __d('cake_dev', 'App Ratings');
?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
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
        echo $this->Html->script('foundation/foundation.reveal');

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
                    <div class="large-12 columns">
                        <h1>Mobile App Ratings</h1>
                        <hr/>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="row">
                    <div class="large-12 columns">
                        <?php $flash_message = $this->Session->flash() ?>
                        <?php if (!empty($flash_message)): ?>
                            <div data-alert class="alert-box">
                                <?= $flash_message ?>
                            </div>
                        <?php endif ?>
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
