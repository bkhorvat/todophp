<?php include $_SERVER['DOCUMENT_ROOT']."/resources/view/template/head template.php"?>

<head>
    <title>Домашняя страница</title>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/view/template/header template.php" ?>
<p>Привет <?= $_COOKIE['name'] ?>!</p>


	<div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-5 fw-semibold">Collapsible</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Home
                            </button>
                            <div class="collapse" id="home-collapse" style="">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                                    <li><a href="#" class="link-dark rounded">Updates</a></li>
                                    <li><a href="#" class="link-dark rounded">Reports</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse" style="">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                                    <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                    <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                    <li><a href="#" class="link-dark rounded">Annually</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Orders
                            </button>
                            <div class="collapse" id="orders-collapse" style="">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New</a></li>
                                    <li><a href="#" class="link-dark rounded">Processed</a></li>
                                    <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                    <li><a href="#" class="link-dark rounded">Returned</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New...</a></li>
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

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
					echo '<a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">'.$row->task.'</strong>
                            <small>Wed</small>
                        </div>
                        <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                    </a>';
				}
			}

		 ?>
                        </div>
                    </div>
            </div>

            <div class="col">
                <form action="/app/add task.php" method="post">
                    <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
                    <button type="submit" name="sendTask" class="w-100 btn btn-lg btn-primary mt-3">Отправить</button>
                </form>
            </div>
        </div>
	</div>
</body>
</html>
