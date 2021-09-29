<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('<h3 class="title wow fadeInLeft"><span>ADD USER</span></h3>') ?></legend>
        <?php
            echo $this->Form->input('uname');
            echo $this->Form->input('password');
            echo $this->Form->input('type',['type'=>'radio',
											'options'=>[
														0=>'Admin',
														1=>'Chemist'
														],
														'default'=>0,
														'required'=>'required'
			
			
											]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
