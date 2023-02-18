<h1><?= $headline ?></h1>
<?= validation_errors() ?>
<div class="card">
    <div class="card-heading">
        Fish Details
    </div>
    <div class="card-body">
        <?php
        echo form_open($form_location);
        echo form_label('Type');
        echo form_input('type', $type, array("placeholder" => "Enter Type"));
        echo form_label('Habitat');
        echo form_input('habitat', $habitat, array("placeholder" => "Enter Habitat"));
        echo form_submit('submit', 'Submit');
        echo anchor($cancel_url, 'Cancel', array('class' => 'button alt'));
        echo form_close();
        ?>
    </div>
</div>