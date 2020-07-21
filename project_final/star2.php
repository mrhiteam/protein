<!DOCTYPE html>
<html>
 <head>
  <title>리뷰 작성</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 
<style>

.panel.panel-default {
    margin-top: 20px;
}

.panel-body {
  margin-top : 10px;
}

h2, form {
  display: none;
}
</style>
</head>
 <body>
  
  <br />
  <h2 align="center">리뷰 작성해주세요!</h2>
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
   <div class="form-group">
    <select name="star_rate" id="star-rate" class="form-control">
        <option>⭐</option>
        <option>⭐⭐</option>
        <option>⭐⭐⭐</option>
        <option>⭐⭐⭐⭐</option>
        <option>⭐⭐⭐⭐⭐</option>
    </select>
    </div> 
   <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" value="<?=$_SESSION["userid"]?>" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;" readonly />
   </div>
     <div class="form-group">
     <input type="text" name="comment_nick" id="comment_nick" class="form-control" value="<?=$_SESSION["username"]?>" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;" readonly />
     </div>
     
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="내용" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="hidden" name="comment_pid" id="comment_pid" value="<?=$_GET["num"]?>" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="남기기" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment2.php?userid=<?=$_SESSION["userid"]?>",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>