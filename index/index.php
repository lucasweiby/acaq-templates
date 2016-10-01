<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ACAQ Template</title>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/posts.css">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/vertical-nav.css">
  <link rel="stylesheet" type="text/css" href="css/index-post.css">
  <link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-acaq" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="img/Logo.png" class="navbar-logo" alt="" />
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
      <div class="box-search">
        <form class="navbar-form" action="" method="post">
          <input type="text" class="acaq-input" placeholder="Pesquise por usuários e perguntas" name="search" value="">
          <a  class="btn-search btn-max pull-right" href="#">
            <img class="img-search" src="img/search.png" alt="" />
          </a>
        </form>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <div class="dropdown dropdown-profile">
            <button class="btn-trans dropdown-toggle" type="button" data-toggle="dropdown">
              <!-- http://loremflickr.com/200/200/woman,profile -->
              <img src="img/Profile.png" class="user-icon" alt="" />
            </button>
            <ul class="dropdown-menu profile-drop">
              <li class="set-prof"><a class="set" href="profile.php">Meu Perfil</a></li>
                  <!-- <li><a href="#">Configurações</a></li>
                  <li><a href="#">Seguidores</a></li> -->
                  <li class="set-prof"><a class="set" href="#">Ajuda</a></li>
                  <li class="set-prof"><a class="set" href="teste.php">Sair</a></li>
                </ul>
              </div>
            </li>
          </ul>
          <!-- </div> -->
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>

      <!--Vertical-Nav-->
      <div class="drop">
        <nav class="nav nav-aberta">
          <div class="wrap">
            <ul class="listaNav">
              <button class="btn-trans" type="button">
                <li>
                  <a href="index.php">
                    <img class="btn-post img-vertical-set-box" src="img/home.png" alt=""/>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img class="btn-post img-vertical-set-box" src="img/follow_request.png" alt=""/>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img class="btn-post img-vertical-set-box" src="img/notifications.png" alt=""/>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img class="btn-post img-vertical-set-box" src="img/speech_box.png" alt=""/>
                  </a>
                </li>
              </button>
              <li> 
                <div class="dropdown dropdown-conf">
                  <button id="vert" class="btn-trans dropdown-toggle" type="button" data-toggle="dropdown">
                    <!-- http://loremflickr.com/200/200/woman,profile -->
                    <img src="img/settings.png" class="btn-post img-vertical-set-box" alt="" />
                  </button>
                  <ul class="dropdown-menu set-drop">
                    <li class="set"><a class="set" href="conf-teste.php">Configurações gerais da conta</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </nav>
    </div>
    <!--/Vertical-Nav-->

    <!--Post box-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box-post">
            <div class="box-post">
              <div class="box-title">
                <input type="text" placeholder="TÍTULO" name="name" class="input-title">
              </div>
              <div class="box-desc">
                <textarea name="name" placeholder="O que quer saber?" class="input-desc"></textarea>
              </div>
              <div class="box-footer ">
                <a  class="btn-post btn-max pull-right" href="#">
                  <img class="img-box" src="img/interrogação.png" alt="" />
                </a>
                <a class="btn-post btn-min pull-right" href="#">
                  <img class="img-box" src="img/user.png" alt="" />
                  <!-- <input type="file" accept="image/*;capture=camera"> Esse comando é pra inserir a imagens, eu não consegui atribuir a imagem. Se conseguir, me diz <3 -->  
                </a>
                <a class="btn-post btn-min pull-right" href="#">
                  <img class="img-box" src="img/push-pin.png" alt="" />
                </a>
              </div>
            </div>
          </div>
          <div class="index-post">
            <img class="profile-post-pic" src="img/Profile.png">
            <div class="post-box">
              <h4 class="title">O que quer saber?</h4>
              <h6 class="desc">Coisas...</h6>
              <div class="post-footer">

              </div>
            </div>
          </div>
        </div>  	
      </div>
    </div>
  </div>
  <!--/Post box-->   

</body>
</html>