<?= anchor('entries/manage/', '<i class="fa fa-arrow-left" aria-hidden="true"></i> Back') ?>

<h1><?= $page_headline ?></h1>

<?php if (isset($_SESSION['form_submission_errors'])) { ?>
    <div class="panel pale-red text-dark-red border border-dark-red relative">
        <?= validation_errors() ?>
    </div>
<?php } ?>

<?php
//echo form_open('entries/submit');
echo form_open($form_location);

echo form_label('Entry Title');
//echo form_input('title', '');
echo form_input('title', $title);
echo '<br>';

echo form_submit('submit', 'Submit', [ 'class' => 'primary']);
?>


<?php
$update_id = segment(3);
settype($update_id, 'int');

if ($update_id>0) {
    echo ' '.anchor('entries/delete/' . $update_id, 'Delete', ['class' => 'danger button']);
}

echo form_close();
?>
