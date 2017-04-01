<?php require_once 'partials/header.view.php'; ?>

    <div class="title text-info text-center"><p class="h1">Календарь на <?= $year; ?> год</p></div>

    <div class="row">
        <div class="col-md-3 col-sm-3">
            <?php require_once 'partials/form.view.php';?>
        </div>

        <div class="col-md-9 col-sm-9">
            <?php require_once 'partials/table.view.php';?>
        </div>
    </div>

<?php require_once 'partials/footer.view.php'; ?>