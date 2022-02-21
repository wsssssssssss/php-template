<main>
    <div class="list">
        <div class="btns flex">
            <a href="/album">앨범형</a>
            <a href="/list">리스트형</a>
            <a href="/insertcul">문화재 등록</a>
        </div>

        <table>
            <tr>
                <th>순번</th>
                <th>문화재명</th>
                <th>문화재 종목</th>
                <th>지정호수</th>
                <th>소재지</th>
            </tr>
            <?php foreach($list as $item): ?>
                <tr>
                    <td><?=$item->sn ?></td>
                    <td> <a href="/culdetail?sn=<?=$item->sn ?>"><?=$item->ccbaMnm1 ?></a> </td>
                    <td><?=$item->ccmaName ?></td>
                    <td><?=$item->ccbaAsno ?></td>
                    <td><?=$item->ccbaAdmin ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="page-nation flex">
            <a href="/list?page=0"><<</a>
            <a href="/list?page=<?=$page > 0 ? $page-1 : 0 ?>"><</a>
            <?php for($i = 0; $i < ceil($count/10); $i++): ?>
                <a class="<?=$page == $i ? 'action' : '' ?>" href="/list?page=<?=$i ?>"><?=$i+1 ?></a>
            <?php endfor; ?>
            <a href="/list?page=<?=$page < ceil($count/10)-1 ? $page+1 : ceil($count/10)-1 ?>">></a>
            <a href="/list?page=<?=ceil($count/10)-1 ?>">>></a>
        </div>
    </div>
</main>