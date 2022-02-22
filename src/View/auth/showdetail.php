<main>
    <form method="post">
        <input type="hidden" name="showUid" value="<?=$showlist->showUid ?>">
        공연이름: <input type="text" name="showName" value="<?=$showlist->showName ?>"> <br>
        공연일정: <input type="text" name="showDate" value="<?=$showlist->showDate ?>"> <br>
        공연시간: <input type="text" name="showTime" value="<?=$showlist->showTime ?>"> <br>
        주관: <input type="text" name="organizer" value="<?=$showlist->organizer ?>"> <br>
        공연장소: <input type="text" name="place" value="<?=$showlist->place ?>"> <br>
        출연진: <input type="text" name="cast" value="<?=$showlist->cast ?>"> <br>
        공연 내용:<input type="text" name="rm" value="<?=$showlist->rm ?>"> <br>

        <input type="submit" value="수정하기">
        <a href="showdelete?showUid=<?=$showlist->showUid ?>">삭제하기</a>
    </form>
</main>