<main>
    <div class="calendar">
        <div class="btns flex">
            <a href="/insertsch">일정 등록</a>
        </div>
        <div class="days flex">
            <?php if($month == 1) : ?>
                <a href="/calendar?year=<?=$year-1 ?>&&month=12">이전달</a>
            <?php else : ?>
                    <a href="/calendar?year=<?=$year?>&&month=<?=$month-1 ?>">이전달</a>
            <?php endif; ?>

            <h2> <span><?=$year ?></span>년 <span><?=$month ?></span>월 </h2>
            
            <?php if($month == 12) : ?>
                <a href="/calendar?year=<?=$year+1 ?>&&month=1">다음달</a>
            <?php else : ?>
                    <a href="/calendar?year=<?=$year?>&&month=<?=$month+1 ?>">다음달</a>
            <?php endif; ?>
        </div>

        <div class="item-container grid">
            <div class="item" id="week">S</div>
            <div class="item" id="week">M</div>
            <div class="item" id="week">T</div>
            <div class="item" id="week">W</div>
            <div class="item" id="week">T</div>
            <div class="item" id="week">F</div>
            <div class="item" id="week">S</div>

            <?php for($n = 1, $i = 0; $i < $total_week; $i++): ?>
                <?php for($j = 0; $j < 7; $j++): ?>
                    <div class="item flex">
                        <?php if( ($n > 1 || $j >= $start_week) && ($total_day >= $n)  ): ?>
                            <p><?=$n ?></p>
                            <?php foreach($showlist as $item): ?>
                                <?php if($n < 10 && $n) {
                                    $n = str_replace('0', '', $n);
                                    $n = "0{$n}";
                                } ?>
                                <?php if( substr($item->showDate, 0, 10) == "{$year}-{$month}-{$n}" ): ?>
                                    <?php 
                                        $d_day = intval( (strtotime(date('Y-m-d', time())) - strtotime(substr($item->showDate, 0, 10))) / 86400 );
                                    ?>
                                    <div class="title flex">
                                        <a href="/showdetail?showUid=<?=$item->showUid ?>">
                                            <p><?=$item->showName ?></p>
                                        </a>
                                        <?php if($d_day < 0): ?>
                                            <span class="d_day">
                                                D<?=$d_day ?>
                                            </span>
                                        <?php elseif($d_day == 0): ?>
                                            <span class="d_day">
                                                D-Day
                                            </span>
                                        <?php endif; ?>

                                    </div>
                                <?php endif;?>
                            <?php endforeach; ?>
                            <?php $n++; ?>
                        <?php endif; ?>
                    </div>
                <?php endfor; ?>
            <?php endfor; ?>

        </div>
    </div>
</main>