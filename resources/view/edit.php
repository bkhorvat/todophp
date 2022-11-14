<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/head.php" ?>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/header.php" ?>

<main class="mdl-layout__content mdl-color--grey-100" id="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <div class="col d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
                    <a href="/"
                       class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                        <svg class="bi me-2" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-5 fw-semibold">Редактированное задания</span>
                    </a>
                    <div class="list-group list-group-flush border-bottom scrollarea">
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . '/database/PDO config DB.php';

                        $user_id = $_COOKIE['id'];
                        $id = $_GET['id'];

                        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`DESC');
                        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                            if ($row->id == $id) {
                                echo '
                        <div>
                        <a href="home2.php" class="link-secondary"><small>Назад</small></a>
                        <a href="../../app/delete task.php?id=' . $row->id . '" class="link-danger"><small>Удалить</small></a>
                        </div>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                        <div class="row d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">' . $row->title . '</strong>
                        </div>
                        <div class="row col-10 mb-1 small">' . $row->description . '</div>
                        
                            <div><small> От ' . $row->dateStart . ' до ' . $row->dateEnd . '</small></div>
                    </a>';
                                $id = $row->id;
                                $title = $row->title;
                                if ($row->description) {
                                    $description = $row->description;
                                } else {
                                    $description = '';
                                }

                                if ($row->dateStart) {
                                    $dateTimeStart = explode(' ', $row->dateStart);
                                    $dateStart = $dateTimeStart[0];
                                    $timeStart = $dateTimeStart[1];
                                }

                                if ($row->dateEnd) {
                                    $dateTimeEnd = explode(' ', $row->dateEnd);
                                    $dateEnd = $dateTimeEnd[0];
                                    $timeEnd = $dateTimeEnd[1];
                                }
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>

            <div class="col">
                <form action="/app/edit task.php" method="post">
                    <input type="text" name="id" id="id" hidden value="<?php echo "$id"; ?>">
                    <input type="text" name="title" id="title" placeholder="Заголовок" class="form-control"
                           value="<?php echo "$title"; ?>">
                    <textarea rows="3" name="description" id="description" placeholder="Описание"
                              class="form-control"><?php echo "$description"; ?></textarea>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label for="dateStart">Дата начала</label>
                                    <input type="date" name="dateStart" id="dateStart" placeholder="Описание"
                                           class="form-control" value="<?php echo "$dateStart"; ?>">
                                </div>
                                <div class="col">
                                    <label for="dateStart">Времья начала</label>
                                    <input type="time" name="timeStart" id="timeStart" placeholder="Описание"
                                           class="form-control" value="<?php echo "$timeStart"; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label for="dateEnd">Дата конца</label>
                                    <input type="date" name="dateEnd" id="dateEnd" placeholder="Дата конца"
                                           class="form-control" value="<?php echo "$dateEnd"; ?>">
                                </div>
                                <div class="col">
                                    <label for="dateEnd">Времья конца</label>
                                    <input type="time" name="timeEnd" id="timeEnd" placeholder="Времья конца"
                                           class="form-control" value="<?php echo "$timeEnd"; ?>">
                                </div>
                            </div>

                        </div>
                        <button type="submit" name="sendTask" class="w-100 btn btn-lg btn-primary mt-3">Редактировать
                        </button>
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
