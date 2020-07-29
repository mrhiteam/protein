<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>
<script type="text/javascript" src="login.js"></script>
</head>
<style>
   *{
      margin: 0;
      padding: 0;
   }
   #main_content9 ul li{
      list-style-type: none;
   }
   
    .headtext{
      width: 100%;
      height: 40px;
      background-color: #5763e6;
      color:#fff;
      text-align: center;
      padding: 10px;
      margin-bottom: 20px;
   }
   form{
      width: 60%;
      margin: 0 auto;
      text-align: center;
      padding-top: 20px;
      border:0.1px solid #000000;
      margin-top: 10px;
      padding-bottom: 20px;
   }
   form >h2{
      margin-bottom: 15px;
   }
   form >ul>li>input{
      width: 220px;
      height: 40px;
      margin: 2px;
      box-sizing:border-box;
   }
   form >input{
      width: 220px;
      height: 40px;
      box-sizing:border-box;
      background-color: #5763e6;
      color:#fff;
   }
</style>
<body> 
   <section>
      <h1 class="headtext">벨지안블루 아이디/비밀번호 찾기</h1>
        <div id="main_content9">
            <form method="POST" action="member_find.php">
         <h2>아이디 찾기</h2>   
           <ul>
             <li><input type="text" name="name" placeholder="이름을 입력해주세요!"></li>
            <li><input type="text" name="phone" placeholder="폰번호를 입력해주세요!"></li>
            </ul>
            <input type="submit" value="아이디 찾기">
         </form>
         <form method="POST" action="member_findpw.php">
         <h2>비밀번호 찾기</h2>
         <ul>
             <li><input type="text" name="id" placeholder="아이디를 입력해주세요!"></li>
            <li><input type="text" name="name" placeholder="이름을 입력해주세요!"></li>
            <li><input type="text" name="phone" placeholder="폰번호를 입력해주세요!"></li>
            </ul>
            <input type="submit" value="비밀번호 찾기">
         </form>
        </div>
   </section> 

</body>
</html>
