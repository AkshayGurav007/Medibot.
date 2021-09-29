<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('<h3 class="title wow fadeInLeft"><span>Login </span></h3>') ?></legend>
        <?php
            echo $this->Form->input('uname');
            echo $this->Form->input('password');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
