<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/head.php" ?>

<head>
    <title>Home</title>
    <style>
        #list1 .form-control {
            border-color: transparent;
        }

        #list1 .form-control:focus {
            border-color: transparent;
            box-shadow: none;
        }

        #list1 .select-input.form-control[readonly]:not([disabled]) {
            background-color: #fbfbfb;
        }
    </style>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/layout/header.php" ?>

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                    <div class="card-body py-4 px-4 px-md-5">

                        <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                            <i class="fa-sharp fa-solid fa-plus"></i>
                            <u>Add new task...</u>
                        </p>

                        <div class="pb-2">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/app/addTask.php' ?>" method="post">
                                        <div class="d-flex flex-row align-items-center">
                                            <input type="text" class="form-control form-control-lg"
                                                   id="title" name="title"
                                                   placeholder="Add new task...">
                                            <div>
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                            <p class="small mb-0 me-2 text-muted">Filter</p>
                            <select class="select">
                                <option value="1">All</option>
                                <option value="2">Completed</option>
                                <option value="3">Active</option>
                                <option value="4">Has due date</option>
                            </select>
                            <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
                            <select class="select">
                                <option value="1">Added date</option>
                                <option value="2">Due date</option>
                            </select>
                            <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                                        class="fas fa-sort-amount-down-alt ms-2"></i></a>
                        </div>
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . '/database/pdoConfig.php';

                        $user_id = $_COOKIE['id'];

                        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`DESC');
                        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                            if ($row->user_id == $user_id) {

                                echo '<ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                                        <li
                                                class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                                            <p class="lead fw-normal mb-0">' . $row->title . '</p>
                                        </li>
                                        <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                                            <div class="d-flex flex-row justify-content-end mb-1">
                                                <a href="http://'.$_SERVER['SERVER_NAME'].'/resources/view/todo/edit.php?id=' . $row->id . '&title=' . $row->title . '" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                                                            class="fas fa-pencil-alt me-3"></i></a>
                                                <a href="http://'.$_SERVER['SERVER_NAME'].'/app/deleteTask.php?id=' . $row->id . '" class="text-success" data-mdb-toggle="tooltip" title="Delete todo"><i
                                                            class="fa-solid fa-check"></i></a>
                                            </div>
                                        </li>
                                    </ul>';}}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>

<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
