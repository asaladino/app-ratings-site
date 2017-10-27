<div class="row">
    <?php foreach ($applications as $application): ?>
        <div class="columns large-3">
            <?= $this->Html->image('icons/' . $application['Application']['id'], array('class' => 'th')) ?>
        </div>
        <div class="columns large-9">
            <h4><?= $this->Html->link($application['Application']['name'], array('action' => 'view', $application['Application']['id'])) ?></h4>
            <div class="row">
                <div class="columns large-3">
                    <h5>Cost: <?= $this->Number->currency($application['Application']['cost']) ?></h5>
                </div>
                <div class="columns large-9">
                    <h5>Rating: <?= $application['Application']['rating'] ?> out of 10</h5>
                </div>
            </div>
            <p>
                <?= $this->Text->truncate($application['Application']['description'], 300) ?>
            </p>
        </div>
        <div class="large-12 columns">
            <hr/>
        </div>
    <?php endforeach ?>
</div>
<?= $this->element('pagination') ?>