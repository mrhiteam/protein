<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script>
   function check_input()
   {
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

      if (!document.product_form.kategorie.value) {
          alert("카테고리를 입력하세요!");    
          document.product_form.kategorie.focus();
          return;
      }

      if (!document.product_form.last_day.value) {
          alert("유통기한을 입력하세요!");    
          document.product_form.last_day.focus();
          return;
      }

      if (!document.product_form.image_file.value){
          alert("파일을 추가하세요!");    
          document.product_form.image_file.focus();
          return;
      }

      if (!document.product_form.info.value){
          alert("상세정보를 추가하세요!");    
          document.product_form.info.focus();
          return;
      }

      if (!document.product_form.status.value){
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
      document.product_form.last_day.value = "";
      document.product_form.image_file.value = "";
      document.product_form.info.value = "";
      document.product_form.status.value = "";

      document.product_form.name.focus();
      return;
   }

</script>
</head>
<body> 
    <header>
        <?php include "header.php";?>
    </header>
    <div id="join_box">
       	<form  name="product_form" method="post" action="add_product.php">
		    <h2>상품 추가</h2>
    	    <div class="form">
			    <div class="col1">상품명</div>
			    <div class="col2">
					<input type="text" name="name">
			    </div>        
		    </div>
            <div class="clear"></div>
			<div class="form">
		        <div class="col1">가격</div>
		        <div class="col2">
					<input type="text" name="price">
			    </div>                 
		   	</div>
	       	<div class="clear"></div>
	       	<div class="form">
		        <div class="col1">카테고리</div>
		        <div class="col2">
                    <select name="kategorie">
                    <option value="쉐이크/보조제">쉐이크/보조제</option>
                    <option value="헬스용품">헬스용품</option>
                    <option value="스포츠웨어">스포츠웨어</option>
                    <option value="식품">식품</option>
                </select>
		        </div>                 
	       	</div>
	       	<div class="clear"></div>
	       	<div class="form">
		        <div class="col1">유통기한</div>
		        <div class="col2">
					<input type="text" name="last_day">
		        </div>                 
            </div>
            <div class="clear"></div>
	       	<div class="form">
		        <div class="col1">이미지</div>
		        <div class="col2">
					<input type="file" name="image_file">
		        </div>                 
            </div>
            <div class="clear"></div>
	       	<div class="form">
		        <div class="col1">상세 정보</div>
		        <div class="col2">
					<input type="file" name="info">
		        </div>                 
            </div>
            <div class="clear"></div>
           <div class="form">
            <div class="col1">제품 상태
		        <div class="col2">
                    <select name="status">
                    <option value="매진">매진</option>
                    <option value="판매 중">판매 중</option>
                   
                </select>
		        </div>                 
               </div>
        </div>
	       

	       	<div class="buttons">
                <a href="#" onclick="check_input()">추가하기</a>
                <a href="#" onclick="reset_form()">재입력</a>    	
           	</div>
        </form>
    </div> <!-- join_box -->
       
	
</body>
</html>

