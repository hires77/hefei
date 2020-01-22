<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "대문 페이지";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <link rel="stylesheet" href="/bootstrap-4.4.1-dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body id="target">

    <div class="container">
      <header class="jumbotron text-center">
        <h1><a href="http://localhost/index.php">밥먹고 합시다</a></h1>
      </header>

      <div class="row">
        <nav class="col-md-3">
          <h1><a href="index.php">Index</a></h1>
          <ol class="">
            <?php
            print_list();
            ?>
          </nav>
        </ol>
        <div class="col-md-9">
          <article>

             <form action="update_process.php" method="post">
               <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
               <div class="form-group">
                 <label for="form-title">제목</label>
                 <input type="text" class="form-control" name="title" placeholder="Title" value="<?php print_title(); ?>">
               </div>
              <div class="form-group">
                 <label for="form-description">본문</label>
                 <textarea class="form-control" rows="12" name="description" placeholder="Description"><?php print_description(); ?></textarea>
               </div>
               <p>
                 <input type="submit" class="btn btn-success btn-lg">
               </p>
             </form>


            <hr>

<!--
            <a href="/create.php" class="btn btn-success btn-lg">쓰기</a>
            <?php if(isset($_GET['id'])) { ?>
              <a href="update.php?id=<?=$_GET['id']?>" class="btn btn-success btn-lg">업데이트</a>
            <?php } ?>
              <a href="#" style="cursor:wait" class="btn btn-success btn-lg" onclick="alert('\n관리자에 의해서만 글 삭제가 가능합니다.\n\n우측 하단의 채팅 APP 을 통해 요청하십시오.\n\n관리자 부재 시 즉답이 이루어지지 않을 수도 있습니다.')">삭제</a>
-->


        </div>
      </div>
  </div>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e258f998e78b86ed8aa2958/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  </div>
  </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
