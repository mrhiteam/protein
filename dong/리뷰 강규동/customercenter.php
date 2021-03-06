<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>벨지안 블루</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/r.css?after'>
    
</head>
<body>
    <div id="container">
        <header>
        <?php include "header.php"?>
        </header>
        <section>
            <h2>상품 문의</h2>
            <div class="question">
                <div class="question__content">
                    <?php include "qna3.php";?>
                </div>
              
                
            </div> 
            <div class="flex2">
                <div class="flex2__notice">
                    <h3 id="notice">공지사항</h3>
                    <div class="notice__content">
                        <div class="content__first">
                       <?php include "board_list.php"?>   
                        </div>
                   
                    </div>    
                </div>
                <div class="flex2__call">
                    <h3>1:1 전화 문의</h3>
                    <div class="call__content">
                    <h1>☎</h1>
                    <p class="num">1544-1234</p>
                    <p>09:00-18:00까지 운영합니다!</p>
                    </div>

                </div>
                </div>
            </section>   
    <footer>
        <?php
            include "footer.php";
        ?>
    </footer>
            
    </div>
</body>
</html>