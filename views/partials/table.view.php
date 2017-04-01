<div class="row">
<?php foreach ($currentYear as $key=>$year):
    $countDays = 0; ?>
    <?php $firstWeekDay = ceil(($year['days'] + \Core\FirstMonthDay::day($key))/ 7); ?>

    <div class="col-md-4 col-sm-6 col-xs-12 tb">
        <table class="table table-bordered">
            <caption>
                <?= $year['month'];?>
            </caption>

            <thead>
                <tr>
                    <?php foreach ($weekDays as $weekDay):?>
                        <th><?= $weekDay?></th>
                    <?php endforeach;?>
                </tr>
            </thead>

            <tbody>
                <?php for($j = 1; $j <= $firstWeekDay; $j++): ?>
                    <tr>
                        <?php for($z = 1; $z <= 7; $z++): ?>
                            <td>
                                <?php
                                if ($j == 1 and $z <= \Core\FirstMonthDay::day($key)) {
                                    echo "";
                                }
                                else {
                                    $countDays = $countDays + 1;
                                    if ($countDays <= $year['days']) {
                                        echo $countDays;
                                    }
                                    else {
                                        echo "";
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
