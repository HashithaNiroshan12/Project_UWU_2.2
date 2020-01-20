<?php include('dbconnection.php') ?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="./css/custom.css">

    <title>Cart</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand active" href="index.php"><img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><span class="fa fa-info fa-lg"></span> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.php"><span class="fas fa-warehouse fa-lg"></span> Store</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user fa-lg"></span> My Account</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="order.php">My Orders <span class="fas fa-shopping-bag fa-lg"></span></a>
                            <a class="dropdown-item active" href="cart.php">Cart <span class="fa fa-shopping-cart fa-lg"></span></a>
                            <a class="dropdown-item" href="userprofile.php">Profile <span class="fa fa-user fa-lg"></span></a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="menu-bar">
                    <ul>
                  <?php if(isset($_SESSION['user'])){ ?>

                        <?php echo $_SESSION['user']['username'];?>
                        <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i><br>
                        <small>
                        <a href="index.php?logout='1'" style="color: red;">logout</a>
                      </small>


                      <?php }else{ ?>
                        <li><a href="register.php">Register <i class="fas fa-user-plus fa-dark"></i></a></li>
                        <li><a href="login.php">Login <i class="fas fa-user-plus fa-dark"></i></a></li>
                      <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav><br>

    <!-- Breadcrumb -->
    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Cart</li>
            </ol>
        </div>
    </div>

    <!--Cart checkout-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="card card-body">
					<form action="cart.php" method="post" enctype="multipart/form-data">
						<h2>Cart <span class="fa fa-shopping-cart fa-lg"></span></h2>
						<p class="text-muted">0 item(s) in your cart!</p>
						<div class="tabel-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th colspan="2"> Product</th>
										<th>Quantity</th>
										<th>Unit Price</th>
										<th colspan="1">Delete</th>
										<th colspan="2">Sub Total</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">Total</th>
										<th colspan="2">Rs 0</th>
									</tr>
								</tfoot>
							</table><br>
						</div>
						<div class="box-footer">
							<div class="pull-left">
								<a href="index.html" class="btn btn-default bg-info">
									<i class="fa fa-chevron-left"></i> Continue Shopping
								</a>
							</div>
							<div class="pull-right">
								<button class="btn btn-default bg-secondary" type="submit" name="update" value="Update">
									<i class="fa fa-refresh"></i> Update
								</button>
								<a href="order.html" class="btn btn-success">Checkout <i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</form>
				</div>
            </div>
            <div class="col-sm-3">
                <div class="card" id="order-details">
					<div class="card-header bg-secondary">
						<h3>Summary</h3>
					</div>
					<p class="text-muted align-self-center">
						Your all costs are calculated here
					</p>
					<div class="tabel-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>SubTotal</td>
									<th> Rs 0</th>
								</tr>
								<tr>
									<td>Delivery Cost</td>
									<th> Rs 0</th>
								</tr>
								<tr class="total">
									<td>Total</td>
									<th>Rs 0</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            </div>
        </div><br>
    </div>

    <!-- Footer -->
  <?php include('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
