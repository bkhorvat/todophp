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
                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                            <u>Edit task...</u>
                        </p>

                        <div class="pb-2">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . '/app/editTask.php' ?>"
                                          method="post">
                                        <div class="d-flex flex-row align-items-center">
                                            <input type="text"
                                                   id="id" name="id"
                                                   value="<?php echo $_GET['id'] ?>" hidden>
                                            <input type="text" class="form-control form-control-lg"
                                                   id="title" name="title"
                                                   placeholder="Edit task..."
                                                   value="<?php echo $_GET['title'] ?>">
                                            <div>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">
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
