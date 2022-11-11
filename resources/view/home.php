<?php include $_SERVER['DOCUMENT_ROOT']."/resources/view/template/head template.php"?>

  <body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/template/header template.php" ?>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title" id="title"></span>
            <span class="mdl-layout-title" id="title-sep">&nbsp;&gt;&nbsp;</span>
          <span class="mdl-layout-title" id="subtitle"></span>
          <div class="mdl-layout-spacer"></div>
            <h3>Добавить задание</h3>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="../../public/images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@email.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@email.com</li>
              <li class="mdl-menu__item">info@domain.net</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <nav-item>
          <a class="mdl-navigation__link" href="home.php"><i class="mdl-color-text--blue-grey-400 material-icons">done_all</i>Todo</a>
          </nav-item>

        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100" id="content">
          <div class="container mt-5">
              <div class="row">
                  <div class="col">

                      <div class="col d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
                          <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                              <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                              <span class="fs-5 fw-semibold">Список дел</span>
                          </a>
                          <div class="list-group list-group-flush border-bottom scrollarea">
                              <?php
                              require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

                              $user_id = $_COOKIE['id'];

                              $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`DESC');
                              while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                  if($row->user_id == $user_id){
                                      echo '
                        <div>
                        <a href="edit task.php?id='.$row->id.'" class="link-secondary"><small>Редактировать</small></a>
                        <a href="../../app/delete task.php?id='.$row->id.'" class="link-danger"><small>Удалить</small></a>
                        </div>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                        <div class="row d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">'.$row->title.'</strong>
                        </div>
                        <div class="row col-10 mb-1 small">'.$row->description.'</div>
                        
                            <div><small> От '.$row->dateStart.' до '.$row->dateEnd.'</small></div>
                    </a>';
                                  }
                              }

                              ?>
                          </div>
                      </div>
                  </div>

                  <div class="col">
                      <form action="/app/add task.php" method="post">
                          <input type="text" name="title" id="title" placeholder="Заголовок" class="form-control">
                          <textarea rows="3" name="description" id="description" placeholder="Описание" class="form-control"></textarea>
                          <div class="row">
                              <div class="col">
                                  <div class="row">
                                      <div class="col">
                                          <label for="dateStart">Дата начала</label>
                                          <input type="date" name="dateStart" id="dateStart" placeholder="Описание" class="form-control">
                                      </div>
                                      <div class="col">
                                          <label for="dateStart">Времья начала</label>
                                          <input type="time" name="timeStart" id="timeStart" placeholder="Описание" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="row">
                                      <div class="col">
                                         <label for="dateEnd">Дата конца</label>
                                         <input type="date" name="dateEnd" id="dateEnd" placeholder="Дата конца" class="form-control">
                                      </div>
                                      <div class="col">
                                          <label for="dateEnd">Времья конца</label>
                                          <input type="time" name="timeEnd" id="timeEnd" placeholder="Времья конца" class="form-control">
                                      </div>
                                  </div>

                              </div>
                              <button type="submit" name="sendTask" class="w-100 btn btn-lg btn-primary mt-3">Отправить</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

          
          
          
      </main>
    </div>
      
    
    <script src="../../bower_components/material-design-lite/material.min.js"></script>
    <script src="../../bower_components/jquery/dist/jquery.js"></script>
    <!-- routing support -->
    <script src="../../bower_components/grapnel/dist/grapnel.min.js"></script>
    <script src="../../bower_components/material-design-lite/material.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  </body>
</html>
