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
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
    </div>
</main>