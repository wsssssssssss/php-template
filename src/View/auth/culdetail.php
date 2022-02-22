<main>
    <form method="post">
        <input name="sn" type="hidden"value="<?=$item->sn ?>"> <br>
        no: <input name="no" type="text" placeholder="필수 정보 입니다." value="<?=$item->no ?>"> <br>
        ccmaName: <input name="ccmaName" type="text" placeholder="필수 정보 입니다." value="<?=$item->ccmaName ?>"> <br>
        crltsnoNm: <input name="crltsnoNm" type="text" placeholder="필수 정보 입니다." value="<?=$item->crltsnoNm ?>"> <br>
        ccbaMnm1: <input name="ccbaMnm1" type="text" placeholder="필수 정보 입니다." value="<?=$item->ccbaMnm1 ?>"> <br>
        ccbaMnm2: <input name="ccbaMnm2" type="text" value="<?=$item->ccbaMnm2 ?>"> <br>
        ccbaCtcdNm: <input name="ccbaCtcdNm" type="text" value="<?=$item->ccbaCtcdNm ?>"> <br>
        ccsiName: <input name="ccsiName" type="text" value="<?=$item->ccsiName ?>"> <br>
        ccbaAdmin: <input name="ccbaAdmin" type="text" value="<?=$item->ccbaAdmin ?>"> <br>
        ccbaKdcd: <input name="ccbaKdcd" type="text" placeholder="필수 정보 입니다." value="<?=$item->ccbaKdcd ?>"> <br>
        ccbaCtcd: <input name="ccbaCtcd" type="text" placeholder="필수 정보 입니다." value="<?=$item->ccbaCtcd ?>"> <br>
        ccbaAsno: <input name="ccbaAsno" type="text" placeholder="필수 정보 입니다." value="<?=$item->ccbaAsno ?>"> <br>
        ccbaCncl: <input name="ccbaCncl" type="text" value="<?=$item->ccbaCncl ?>"> <br>
        ccbaCpno: <input name="ccbaCpno" type="text" value="<?=$item->ccbaCpno ?>"> <br>
        longitude: <input name="longitude" type="text" value="<?=$item->longitude ?>"> <br>
        latitude: <input name="latitude" type="text" value="<?=$item->latitude ?>"> <br>
        gcodeName: <input name="gcodeName" type="text" value="<?=$item->gcodeName ?>"> <br>
        bcodeName: <input name="bcodeName" type="text" value="<?=$item->bcodeName ?>"> <br>
        mcodeName: <input name="mcodeName" type="text" value="<?=$item->mcodeName ?>"> <br>
        scodeName: <input name="scodeName" type="text" value="<?=$item->scodeName ?>"> <br>
        ccbaQuan: <input name="ccbaQuan" type="text" value="<?=$item->ccbaQuan ?>"> <br>
        ccbaAsdt: <input name="ccbaAsdt" type="text" value="<?=$item->ccbaAsdt ?>"> <br>
        ccbaLcad: <input name="ccbaLcad" type="text" value="<?=$item->ccbaLcad ?>"> <br>
        ccceName: <input name="ccceName" type="text" value="<?=$item->ccceName ?>"> <br>
        ccbaPoss: <input name="ccbaPoss" type="text" value="<?=$item->ccbaPoss ?>"> <br>
        ccbaCndt: <input name="ccbaCndt" type="text" value="<?=$item->ccbaCndt ?>"> <br>
        imageUrl: <input name="imageUrl" type="text" value="<?=$item->imageUrl ?>"> <br>
        content: <textarea name="content"><?=$item->content ?></textarea> <br>
        
        <input type="submit" value="수정하기">
        <a href="/culdelete?sn=<?=$item->sn ?>">삭제하기</a>
    </form>
</main>