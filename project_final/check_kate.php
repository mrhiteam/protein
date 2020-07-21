<!DOCTYPE html>

</head>

<body>
    <?php
    $kate = $_GET["kate"];
    switch ($kate) {
        case "null": {
                echo ('<select name="sub_kategorie">
            <option value="none">--세부카테고리를 선택하세요--</option>
        </select>');

                break;
            }
        case "쉐이크/보조제": {
                echo ('<select name="sub_kategorie">
                <option value="none">--세부카테고리를 선택하세요--</option>
                <option value="단백질쉐이크">단백질쉐이크</option>
                <option value="웨이트보조제">웨이트보조제</option>
                <option value="체중조절">체중조절</option>
            </select>');

                break;
            }
        case "헬스용품": {
                echo ('<select name="sub_kategorie">
                <option value="none">--세부카테고리를 선택하세요--</option>
                <option value="덤벨/바벨/케틀벨">덤벨/바벨/케틀벨</option>
                <option value="스트랩/랩/벨트">스트랩/랩/벨트</option>
                <option value="탄력봉">탄력봉</option>
                <option value="기타">기타</option>
            </select>');
                break;
            }
        case "스포츠웨어": {
                echo ('<select name="sub_kategorie">
                <option value="none">--세부카테고리를 선택하세요--</option>
                <option value="MAN">MAN</option>
                <option value="WOMAN">WOMAN</option>
                <option value="SHOSE">SHOSE</option>
                <option value="CAP">CAP</option>
            </select>');
                break;
            }
        case "식품": {
                echo ('<select name="sub_kategorie">
                <option value="none">--세부카테고리를 선택하세요--</option>
                <option value="닭가슴살">닭가슴살</option>
                <option value="다이어트도시락">다이어트도시락</option>
                <option value="세트">세트</option>
            </select>');
                break;
            }
    }
    ?>
</body>

</html>