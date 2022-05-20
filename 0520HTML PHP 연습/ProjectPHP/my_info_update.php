<?php 
include('common.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="my_info_update_ok.php" method="post">
    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">정보수정</h1>

    <div class="form-floating">
      <input name="email" value="<?php echo $_SESSION['email'] ?>" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" readonly>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="prepassword" value="" type="password" class="form-control" id="floatingPassword" placeholder="기존비밀번호">
      <label for="floatingPassword">기존비밀번호</label>
    </div>
    <div class="form-floating">
      <input name="afterpassword" value="" type="password" class="form-control" id="floatingPassword" placeholder="바꿀비밀번호">
      <label for="floatingPassword">바꿀비밀번호</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button style="margin-bottom: 10px;" class="w-100 btn btn-lg btn-primary" type="submit">수정완료</button>    
    
  </form>
  <button onclick="outMember()" style="margin-bottom: 10px;" class="w-100 btn btn-lg btn-danger" type="submit">탈퇴하기</button>    
  <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
</main>


    
  </body>
</html>


<script>  
  function outMember() {
    var checkPassword = prompt('비밀번호를 입력하세요');    
    var sessionPassword = '<?php echo $_SESSION['pw'] ?>';
    if (checkPassword == sessionPassword) {
      location.href='out_member.php';
    } else {
      alert('비밀번호를 수정할 수 없습니다.');
    }
    
  }
</script>
