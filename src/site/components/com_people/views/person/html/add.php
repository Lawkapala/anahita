<?php defined('KOOWA') or die; ?>

<?= @helper('ui.header', array()) ?>

<div class="row">
    <div class="span6">
        <form action="<?= @route('view=person') ?>" method="post" name="person-form" id="person-form" autocomplete="off">
            
            <fieldset>
                <legend><?= @text('COM-PEOPLE-ADD-TITLE') ?></legend>
                <div class="control-group">
                    <label class="control-label"  for="person-name">
                        <?= @text( 'COM-PEOPLE-NAME' ); ?>
                    </label>
                    <div class="controls">
                        <input class="input-block-level" type="text" id="person-name" name="name" maxlength="25" minlength="6" required />
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="person-username">
                        <?= @text('COM-PEOPLE-USERNAME'); ?>
                    </label>
                    <div class="controls">
                        <?php $usernamePattern = "^[A-Za-z][A-Za-z0-9_-]*$"; ?>
                        <input data-validate="username" data-url="<?= @route('view=person', false ) ?>" type="text" id="person-username" class="input-block-level" name="username" pattern="<?= $usernamePattern ?>" maxlength="100" minlength="6" required />
                    </div>
                </div>
                        
                <div class="control-group">
                    <label class="control-label"  for="person-email">
                        <?= @text('COM-PEOPLE-EMAIL'); ?>
                    </label>
                    <div class="controls">
                       <?php $emailPattern = "^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" ?>
                       <input data-validate="email" data-url="<?= @route('view=person', false) ?>" type="email" name="email" pattern="<?= $emailPattern ?>" id="person-email" class="input-block-level" maxlength="100" minlength="10" required  />
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="person-usertype">
                        <?= @text('COM-PEOPLE-USERTYPE'); ?>
                    </label>
                    <div class="controls">
                        <?= @helper('usertypes') ?>
                    </div>    
                </div>
            </fieldset>
            
            <div class="form-actions">
                <a href="<?= @route('view=people') ?>" class="btn">
                    <?= @text('LIB-AN-ACTION-CANCEL') ?>
                </a>            
                <button type="submit" class="btn btn-primary">
                    <?= @text('LIB-AN-ACTION-ADD') ?>
                </button>
            </div>   
        </form>

    </div>
</div>