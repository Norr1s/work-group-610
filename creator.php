<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cretor</title>
    <link href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .imgbox {
            display: grid;
            height: 100%;
        }
        .center-fit {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php include 'include/menu.php'; ?>
    <div class="container" style="margin-top: 30px;">
        <h4>Creator</h4>

        <div class="row">
            <div class="col-12">
            <form action="<?php echo $base_url; ?>/cart-update.php" method="post">
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 100px;">No.</th>
                            <th style="width: 300px;">First Name</th>
                            <th style="width: 300px;">Last Name</th>
                            <th style="width: 100px;">Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>13</td>
                            <td>นาย วงศ์วริศ</td>
                            <td>ชัยกุลประดิษฐ์</td>
                            <td>ม.6/10</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>นาย คณิศร</td>
                            <td>ศักดิ์ทอง</td>
                            <td>ม.6/10</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>นาย ธนวัฒน์</td>
                            <td>ลบช้าง</td>
                            <td>ม.6/10</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>นางสาว ปภาดา</td>
                            <td>เหลืองประภา</td>
                            <td>ม.6/10</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>นางสาว นภัสสร</td>
                            <td>กิจจารักษ์</td>
                            <td>ม.6/10</td>
                        </tr>
                    </tbody>
                </table>
                <div class="imgbox">
                    <img class="center-fit" src="https://cdn.shopify.com/s/files/1/0344/6469/files/cat-gif-loop-maru_grande.gif?v=1523984148">
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo $base_url; ?>/assets/css/bootstrap.min.js"></script>
</body>
</html>