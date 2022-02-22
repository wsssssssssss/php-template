<main>
    <div class="album">
        <div class="btns flex">
            <a href="/album">앨범형</a>
            <a href="/list">리스트형</a>
            <a href="/insertcul">문화재 등록</a>
        </div>
        <p>총 <span> <?=$count ?> </span>건 <span><?=$page+1 ?> </span>p / <span><?=ceil($count/8) ?></span>p </p>
    
        <div class="item-container grid">
            <?php foreach($list as $item): ?>
                <div class="item">
                    <div class="photo">
                        <a href="/culdetail?sn=<?=$item->sn ?>">
                            <img src="./nihcImage/<?=$item->imageUrl ?>" alt="img" OnError="this.src='./noImage.png'">
                        </a>
                    </div>
                    <a href="/culdetail?sn=<?=$item->sn ?>">
                        <h3><?=$item->ccbaMnm1 ?></h3>
                    </a>
                </div>
            <?php endforeach; ?>
            
            
        </div>

        <div class="page-nation flex">
            <a href="/album?page=0"><<</a>
            <a href="/album?page=<?=$page > 0 ? $page-1 : 0 ?>"><</a>
            <?php for($i = 0; $i < ceil($count/8); $i++): ?>
                <a class="<?=$page == $i ? 'action' : '' ?>" href="/album?page=<?=$i ?>"><?=$i+1 ?></a>
            <?php endfor; ?>
            <a href="/album?page=<?=$page < ceil($count/8)-1 ? $page+1 : ceil($count/8)-1 ?>">></a>
            <a href="/album?page=<?=ceil($count/8)-1 ?>">>></a>
        </div>
    </div>
</main>