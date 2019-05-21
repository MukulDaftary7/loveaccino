
<html>
<head>
  <script
    src="http://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <style type = "text/css">
.hobbies-dropdown{
float : left;
list-style: none;
padding: 0px;
border: 1px solid black;
margin-top: 0px;
}


    </style>
  </head>
<body>

<div class="container">
  <div class="row">

      <div class="col-xs-12 m-bottom-20px">
        <h4>Hobbies</h4>
      </div>
      <div class="col-xs-12 col-md-2">
      </div>
      <div class="col-xs-10 m-bottom-20px">
        <input type="text" class="input-field" id="hobbies_search" placeholder="Enter Keyword eg. Cricket/Travelling etc">
        <input type="submit" class="remove-btn" value="Remove">
<div id="hobbieslist"></div>
        <script type="text/javascript">
        $(document).ready(function(){
$("#hobbies_search").keyup(function(){
                var query = $(this).val();

          if(query != ''){
$.ajax({
url:"getsearch.php",
method:"POST",
data : {query:query},
success : function(data){
  $('#hobbieslist').fadeIn();
  $('#hobbieslist').html(data);
}
})
}else{
  $('#hobbieslist').fadeOut();
  $('#hobbieslist').html("");
}
        });
        $(document).on('click','li', function(){
          $('#hobbies_search').val($(this).text());
          $('#hobbieslist').fadeOut();
        });
      });
      </script>


</body>
</html>
