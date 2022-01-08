<!DOCTYPE html>
<html>
    <head>
        <title>註冊 | HW shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css\w3school.css">
        <link rel="stylesheet" href="css\login.css">

    <!-- 導航欄 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .bbb{
        background-color:#008CBA;
        margin-left:120px;
        border-radius:12px;
        }
    </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">HW SHOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">首頁</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">網購商城</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                商品管理
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">新增商品</a></li>
                                <li><a class="dropdown-item" href="#">修改商品</a></li>
                            </ul>
                        </li>
                    </ul>
        
        
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="sign.html">登入</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html">註冊</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shopping cart.html">購物車</a>
                        </li>
                    </ul>
        
                    <!--<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                </div>
            </div>
        </nav>

        <!--LOGIN-->
        <div class="w3-modal">

            <form class="w3-modal-content1 w3-animate-zoom" action="regcheck.php" method="post">
                <div class="w3-container">
                <h1 class="txt-white" style="text-align: center;"><b>註冊</b></h1>
                
                <label for="ac"><span class="txt-white">帳號</span></label>  <!--account-->
                <input type="text" name="username" required="required" id="name" placeholder="請輸入帳號">
            
                <label for="pw"><span class="txt-white">密碼</span></label>    <!--password-->
                <input type="password" name="password" required="required" id = "password" placeholder="請輸入密碼">

                <label for="pw"><span class="txt-white">確認密碼</span></label>    <!--password-->
                <input type="password" name="pwd" required="required" id = "password" placeholder="請再次輸入密碼">
                    
                <button type="submit" name="submit">確認</button>
                </div>
            </form>
        </div>
    </body>
</html>