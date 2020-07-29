<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>벨지안 블루</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/r.css?after'>
    <link rel="stylesheet" type="text/css" href="./css/header-footer.css">
    <script src="./jquery-3.5.1.js"></script>
    <script type="text/javascript" src="./js/login.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="css/header-footer.css?after">
</head>
<body>
<header id="pcheader">
        <?php include "header.php"?>
        </header>
        
        <section>
        <div class="inner">
            <h2>고객센터</h2>
           
            <div class="flex2">
                <div class="flex2__notice">
                    <h2 id="notice">공지사항</h2>
                    <div class="notice__content">
                        <div class="content__first">
                       <?php include "board_list.php"?>   
                        </div>
                   
                    </div>    
                </div>
                <div class="flex2__call">
                    <h2>1:1 전화 문의</h2>
                    <div class="call__content">
                    <img src="image/callcenter.png">
                    <p class="num">1544-1234</p>
                    <p>09:00 - 18:00까지 운영합니다!</p>
                    </div>

                </div>
                </div>
                </div>
            </section>   
    <footer>
        <?php
            include "footer.php";
        ?>
    </footer>
            
    
</body>
</html>