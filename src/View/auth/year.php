<main>
    <div class="year">
        <div class="btns">
            <a href="/insertsch">일정 등록</a>
        </div>
        <div class="days flex">
            <a href="/year?year=<?=$year-1 ?>">이전달</a>
            <h2><?=$year ?>년</h2>
            <a href="/year?year=<?=$year+1 ?>">다음달</a>
        </div>
        <div class="months grid">
            <?php for($i=1; $i <= 12; $i++): ?>
                <div class="month">
                    <h3 class="num"><?=$i ?>월</h3>
                    <?php foreach($showlist as $item): ?>
                        <?php if($i < 10){
                            $i = str_replace('0', '', $i);
                            $i = "0{$i}";
                        } ?>
                        <?php if( substr($item->showDate, 0, 7) == "{$year}-{$i}" ): ?>
                            <?php 
                                $d_day = intval( (strtotime(date('Y-m-d', time())) - strtotime(substr($item->showDate, 0, 10))) / 86400 );
                            ?>
                            <div class="title flex">
                                <p><a href="/showdetail?showUid=<?=$item->showUid ?>"><?=$item->showName ?></a></p>
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
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</main>