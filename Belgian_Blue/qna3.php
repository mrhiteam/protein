<!DOCTYPE html>
<html>

<head>
  <title>문의 작성</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

<body>


  <br />
  <div class="container">
    <form method="POST" id="comment_form2">
      <?php
      if(isset($_SESSION['userid'])){
      ?>
      <div class="form-group">
        <input type="text" name="comment_name2" id="comment_name2" class="form-control" value="<?= $_SESSION["userid"] ?>" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;" readonly />
      </div>
      <div class="form-group">
        <input type="text" name="comment_nick2" id="comment_nick2" class="form-control" value="<?= $_SESSION["username"] ?>" style="border:none;border-right:0px; border-top:0px; boder-left:0px; boder-bottom:0px;" readonly />
      </div>
      <?php
      }
      ?>
      <div class="form-group">
        <input type="text" name="comment_pname2" id="comment_pname2" class="form-control" value="고객센터" style="border:none;border-right:0px; border-top:0px; border-left:0px; border-bottom:0px;" readonly />
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
  </div>
</body>

</html>

<script>
  $(document).ready(function() {

    $('#comment_form2').on('submit', function(event) {
      event.preventDefault();
      var form_data = $(this).serialize();
      $.ajax({
        url: "add_qna.php",
        method: "POST",
        data: form_data,
        dataType: "JSON",
        success: function(data) {
          if (data.error != '') {
            $('#comment_form2')[0].reset();
            $('#comment_message2').html(data.error);
            $('#comment_id2').val('0');
            load_comment();
          }
        }
      })
    });

    load_comment();

    function load_comment() {
      $.ajax({
        url: "fetch_qna3.php",
        method: "POST",
        success: function(data) {
          $('#display_comment2').html(data);
        }
      })
    }

    $(document).on('click', '.reply', function() {
      var comment_id2 = $(this).attr("id");
      $('#comment_id2').val(comment_id2);
      $('#comment_name2').focus();
    });

  });
</script>