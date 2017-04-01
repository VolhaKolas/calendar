<div class="row">
<?php foreach (\Core\FirstMonthDay::month() as $key=>$year):
    $countDays = 0; ?>
    <?php $firstWeekDay = ceil(($year['days'] + \Core\FirstMonthDay::day($key))/ 7); ?>

    <div class="col-md-4 col-sm-6 col-xs-12 tb">
        <table class="table table-bordered">
            <caption>
                <?= $year['month'];?>
            </caption>

            <thead>
                <tr>
                    <?php foreach (\Core\FirstMonthDay::$weekDays as $weekDay):?>
                        <th><?= $weekDay?></th>
                    <?php endforeach;?>
                </tr>
            </thead>

            <tbody>
                <?php for($row = 1; $row <= $firstWeekDay; $row++): ?>
                    <tr>
                        <?php for($col = 1; $col <= 7; $col++): ?>
                            <td>
                                <?php
                                if (($row != 1 or $col > \Core\FirstMonthDay::day($key))) {
                                    $countDays = $countDays + 1; //count for days
                                    if ($countDays <= $year['days']) {
                                        echo $countDays;
                                    }
                                }
                                ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
<?php endforeach; ?>
</div>
