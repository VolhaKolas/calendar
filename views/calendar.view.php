<?php require_once 'partials/header.view.php'; ?>
<!-- Calendar title -->
    <div class="row">
        <div class="title text-center">
            <p class="h1">Календарь на <?= \Core\Year::year(); ?> год</p>

            <!-- image -->
            <div class="image centered" style="background-position: <?= \Core\EastCalendar::$east[\Core\Year::year() % 12]['x']?>% <?= \Core\EastCalendar::$east[\Core\Year::year() % 12]['y'] ?>%">
            </div>
            <p class="h4">год <?= \Core\EastCalendar::$east[\Core\Year::year() % 12]['name']?></p>
        </div>
    </div>

    <div class="row">
        <!-- Form -->
        <div class="col-md-3 col-sm-3">
            <?php require_once 'partials/form.view.php';?>
        </div>

        <!-- tables with months -->
        <div class="col-md-9 col-sm-9">
            <div class="col-md-12 col-sm-12">
                <?php require_once 'partials/table.view.php';?>
            </div>
        </div>
    </div>

<?php require_once 'partials/footer.view.php'; ?>