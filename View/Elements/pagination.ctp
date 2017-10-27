<p>
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>
</p>
<ul class="pagination">
    <?php
    echo $this->Paginator->prev('&laquo; Previous ', array('tag' => 'li', 'class' => 'arrow', 'escape' => false), null, array('tag' => 'li', 'class' => 'arrow unavailable', 'escape' => false));
    echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'escape' => false));
    echo $this->Paginator->next(' Next &raquo;', array('tag' => 'li', 'class' => 'arrow', 'escape' => false), null, array('tag' => 'li', 'class' => 'arrow unavailable', 'escape' => false));
    ?>
</ul>