<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>벨지안 블루</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/jquery.color-2.1.2.min.js"></script>
    <script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="css/header-footer.css?after">
    <script>
        function check_input() {
            console.log(document.product_form.kategorie.value);
            if (!document.product_form.name.value) {
                alert("상품이름을 입력하세요!");
                document.product_form.name.focus();
                return;
            }

            if (!document.product_form.price.value) {
                alert("가격을 입력하세요!");
                document.product_form.price.focus();
                return;
            }

            if (document.product_form.kategorie.value == 'none') {
                alert("카테고리를 입력하세요!");
                document.product_form.kategorie.focus();
                return;
            }
            if (document.product_form.sub_kategorie.value == 'none') {
                alert("세부카테고리를 입력하세요!");
                document.product_form.kategorie.focus();
                return;
            }

            if (!document.product_form.image_file.value) {
                alert("파일을 추가하세요!");
                document.product_form.image_file.focus();
                return;
            }

            if (!document.product_form.info.value) {
                alert("상세정보를 추가하세요!");
                document.product_form.info.focus();
                return;
            }

            if (!document.product_form.status.value) {
                alert("상태를 추가하세요!");
                document.product_form.status.focus();
                return;
            }


            document.product_form.submit();
        }

        function reset_form() {
            document.product_form.name.value = "";
            document.product_form.price.value = "";
            document.product_form.kategorie.value = "";
            document.product_form.sub_kategorie.value = "";
            document.product_form.last_day.value = "";
            document.product_form.image_file.value = "";
            document.product_form.name.focus();
            return;
        }

        function sub_kate() {
            var select_kate = document.querySelector("#select_kate");
            var value = select_kate.options[document.querySelector("#select_kate").selectedIndex].value;
            fetch('check_kate.php?kate=' + value).then(function(response) {
                response.text().then(function(text) {
                    document.querySelector('#sub_kate').innerHTML = text;
                })
            })
        }
    </script>
</head>

<body>
    <header id="pcheader">
        <?php include "header.php"; ?>
    </header>
    <div>
        <form name="product_form" method="post" action="add_product.php">
            <h2>상품 추가</h2>
            <div>
                <div>상품명</div>
                <div>
                    <input type="text" name="name">
                </div>
            </div>
            <div>
                <div>가격</div>
                <div>
                    <input type="text" name="price">
                </div>
            </div>

            <div>
                <div>카테고리</div>
                <div>
                    <select name="kategorie" onchange="sub_kate()" id="select_kate">
                        <option value="none" selected>--카테고리를 선택하세요--</option>
                        <option value="쉐이크/보조제">쉐이크/보조제</option>
                        <option value="헬스용품">헬스용품</option>
                        <option value="스포츠웨어">스포츠웨어</option>
                        <option value="식품">식품</option>
                    </select>
                </div>
            </div>
            <div></div>
            <div>
                <div>세부카테고리</div>
                <div id="sub_kate">
                    
                </div>
            </div>
            <div></div>
            <div>
                <div>이미지</div>
                <div>
                    <input type="hidden" name="max_file_size" value="2000000">
                    <input type="file" name="image_file">
                </div>
            </div>
            <div></div>
            <div>
                <div>상세 정보</div>
                <div>
                    <input type="file" name="info">
                </div>
            </div>
            <div></div>
            <div>
                <div>제품 상태
                    <div>
                        <select name="status">
                            <option value="매진">매진</option>
                            <option value="판매 중">판매 중</option>

                        </select>
                    </div>
                </div>
            </div>
            <p>*오리진상품:<input type="radio" name="new" value="1"> 활성화 <input type="radio" name="new" value="0" checked> 비활성화</p>

            <div>
                <a href="#" onclick="check_input()">추가하기</a>
                <a href="#" onclick="reset_form()">재입력</a>
            </div>
        </form>
    </div> 


</body>
<script>
    fetch('check_kate.php?kate=null').then(function(response) {
        response.text().then(function(text) {
            document.querySelector('#sub_kate').innerHTML = text;
        })
    })
</script>

</html>