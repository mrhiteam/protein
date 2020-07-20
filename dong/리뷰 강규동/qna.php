<!DOCTYPE html>
<html>
 <head>
  <title>문의 작성</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 
<<<<<<< HEAD
</head>
 <body>
 
  <h2 align="center">문의 작성해주세요!</h2>
  <br />
  <div class="container">
   <form method="POST" id="comment_form2">
   <div class="form-group">
     <input type="text" name="comment_name2" id="comment_name2" class="form-control" value="<?=$_SESSION["userid"]?>" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;" readonly />
   </div>
     <div class="form-group">
     <input type="text" name="comment_nick2" id="comment_nick2" class="form-control" value="<?=$_SESSION["username"]?>" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;" readonly />
     </div>
     <div class="form-group">
     <input type="text" name="comment_pname2" id="comment_pname2" class="form-control" value="<?=$row['name']?>" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;" readonly />
    </div>
   
    <div class="form-group">
     <textarea name="comment_content2" id="comment_content2" class="form-control" placeholder="내용" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id2" id="comment_id2" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="남기기" />
    </div>
   </form>
   <span id="comment_message2"></span>
   <br />
   <div id="display_comment2"></div>
=======
<style>
  header, #display_comment {
    display:none; /*병신아  왜 자꾸 hidden해가지고 지랄이야*/
  }
</style> 
</head>
 <body>
   <header>
   <?php include "header.php"?>
   </header>
  <br />
  <h2 align="center">문의 작성해주세요!</h2>
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
  
   <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="이름" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="내용" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="남기기" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
<<<<<<< HEAD
 $('#comment_form2').on('submit', function(event){
=======
 $('#comment_form').on('submit', function(event){
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_qna.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
<<<<<<< HEAD
     $('#comment_form2')[0].reset();
     $('#comment_message2').html(data.error);
     $('#comment_id2').val('0');
=======
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
<<<<<<< HEAD
   url:"fetch_qna.php?pname=<?=$pname?>",
   method:"POST",
   success:function(data)
   {
    $('#display_comment2').html(data);
=======
   url:"fetch_qna.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
   }
  })
 }

 $(document).on('click', '.reply', function(){
<<<<<<< HEAD
  var comment_id2 = $(this).attr("id");
  $('#comment_id2').val(comment_id2);
  $('#comment_name2').focus();
=======
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
 });
 
});
</script>