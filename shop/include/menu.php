<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style="width: 200px; height: 100vh; position: fixed;">
            <div class="d-flex justify-content-center mb-0">
                <img src="assets/image/457727451_563589792660457_7743925718228787519_n.jpg" alt="Profile Image" class="rounded-circle" width="80" height="80">
            </div>
            <hr class="text-secondary">

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/index.php" class="nav-link text-white">
                        <i class="fa-solid fa-house me-2"></i>Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base_url; ?>/product-list.php" class="nav-link text-white">
                        <i class="fa-solid fa-list me-2"></i>Product List
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base_url; ?>/cart.php" class="nav-link text-white">
                        <i class="fa-solid fa-shopping-cart me-2"></i>Cart (<?php echo count($_SESSION['cart'] ?? []); ?>)
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base_url; ?>/Logout.php" class="nav-link text-white">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>Logout
                    </a>
                </li>
            </ul>
            <hr class="text-secondary">
        </div>

        <div class="content p-4" style="margin-left: 200px;">

        </div>
    </div>

    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <style>
        .nav-link {
            padding: 10px 15px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .nav-link i {
            font-size: 18px;
        }

        .content {
            padding-top: 20px;
        }
    </style>
</body>
