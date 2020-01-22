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
    echo "식사 메뉴에 대해 결정 장애를 겪고 계시는 분을 위해 메뉴를 보여드립니다.<br><br>";
    echo "아래 설문 조사 메뉴에서 원하는 메뉴를 골라 보숑.";
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
      <header class="jumbotron text-center" style="padding-top:20px;padding-bottom:20px;margin-top:15px;margin-bottom:15px">
<!--
        <h1><a href="http://localhost/index.php">밥먹고 합시다</a></h1>
-->
        <img src="/img/bab.png" class="rounded mx-auto d-block" alt="...">
      </header>

      <div class="alert alert-primary" role="alert">
      <a href="#" class="badge badge-primary">Hefei</a>
      B3 공장 근처에서 먹을만한 것을 찾아 봅시다.
      <hr>
      <h6>국밥집 정보가 추가됨! <span class="badge badge-secondary">New</span></h6>
      </div>


      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" checked> Active
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2"> Radio
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option3"> Wide
        </label>
      </div>



      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-secondary">@</button>
        <button type="button" class="btn btn-secondary">Opt</button>

        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            정보 저장 방식
          </button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">정보를 SQL server로 전송</a>
            <a class="dropdown-item" href="#">정보를 PHP app 을 통해 제어</a>
          </div>

        </div>
      </div>


      <div class="row">
        <nav class="col-md-3">
          <h1 style="padding-top:10px;"><a href="index.php">Index</a></h1>
          <ol class="">
            <?php
            print_list();
            ?>
          </nav>
        </ol>
        <div class="col-md-9">
          <article>
            <h2 style="padding-top:15px;">
              <?php
                print_title();
              ?>
            </h2>
            <?php
              print_description();
             ?>
            <hr>
            <br>
            <a href="/create.php" class="btn btn-success btn-lg">쓰기</a>
            <?php if(isset($_GET['id'])) { ?>
              <a href="update.php?id=<?=$_GET['id']?>" class="btn btn-success btn-lg">업데이트</a>
            <?php } ?>
              <a href="#" style="cursor:wait" class="btn btn-success btn-lg" onclick="alert('\n관리자에 의해서만 글 삭제가 가능합니다.\n\n우측 하단의 채팅 APP 을 통해 요청하십시오.\n\n관리자 부재 시 즉답이 이루어지지 않을 수도 있습니다.')">삭제</a>
              <br><br>
              <hr>

<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe7A_8yER6OzoxwtFk1_QSj_cNKRxmljQHvf32C5TG4jyOg6w/viewform?embedded=true" width="640" height="1358" frameborder="0" marginheight="0" marginwidth="0">로드 중…</iframe>


              <div class="card text-center">
              <div class="card-header">
                원활한 동작이 되지 않을 시...
              </div>
              <div class="card-body">
                <h5 class="card-title">GitHub 에서 코드 수정 가능</h5>
                <p class="card-text">...</p>
                <a href="#" class="btn btn-primary">Open 여부 : 'Open'</a>
              </div>
              <div class="card-footer text-muted">
                Google 설문이 동작하지 않으면 VPN 이 필요할수도..
              </div>
            </div>


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
