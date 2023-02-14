<?php //json($entries); ?>

<h1 style="margin-top: 0;">Manage entries</h1>

<?php if (isset($_SESSION['flashdata'])) { ?>
    <div class="panel pale-green text-dark-green border border-dark-green relative">
        <?= flashdata() ?>
    </div>
<?php } ?>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Entry Title</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($entries as $entry) { ?>
        <tr>
            <td><?= $entry->id ?></td>
            <td><?= anchor('entries/show/'.$entry->id, $entry->title) ?></td>
            <td>
                <div class="button-group">

                    <?= anchor('entries/create/'.$entry->id,
                        '<i class="fa fa-pencil" aria-hidden="true"></i>',
                        ['class' => 'button-square ripple info', 'title' => 'Edit entry']) ?>

                    <?= anchor('entries/delete/'.$entry->id,
                        '<i class="fa fa-trash" aria-hidden="true"></i>',
                        ['class' => 'button-square ripple danger', 'title' => 'Delete entry']) ?>
                </div>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>





