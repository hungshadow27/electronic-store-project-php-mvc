<?php
require_once "./src/Models/UserEntity.php";
if (isset($_SESSION['USER'])) {
    $user = new UserEntity();
    $user = unserialize($_SESSION['USER']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hung Mobie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inter", sans-serif;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }


        /* body::-webkit-scrollbar {
            display: none;
        } */
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="top text-center">
                <img src="https://cdn2.cellphones.com.vn/x30,webp,q100/https://dashboard.cellphones.com.vn/storage/top-banner-chinh-sach-bao-hanh-doi-tra.png" alt="" />
                <img src="https://cdn2.cellphones.com.vn/x30,webp,q100/https://dashboard.cellphones.com.vn/storage/top-banner-chinh-hang-xuat-vat-day-du.png" alt="" />
                <img src="https://cdn2.cellphones.com.vn/x30,webp,q100/https://dashboard.cellphones.com.vn/storage/top-banner-giao-nhanh-mien-phi.png" alt="" />
            </div>
        </div>

        <div class="bottom bg-danger py-3">
            <div class="container d-flex align-items-center">
                <div class="logo w-25">
                    <a href="<?= ROOT ?>/home" class="text-white fs-4 fw-medium text-decoration-none">HungMobie</a>
                    <img style="width: 40px" src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Mobile-Smartphone-icon.png" alt="" />
                </div>
                <div class="search w-50">
                    <div class="input-group">
                        <input type="text" class="form-control w-75" placeholder="Bạn cần tìm gì?" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                        <button class="input-group-text" id="basic-addon2">
                            Tìm Kiếm
                        </button>
                    </div>
                </div>
                <div class="cart w-25 text-end">
                    <a href="<?= ROOT ?>/cart" type="button" class="btn btn-outline-light">
                        Giỏ hàng
                    </a>
                    <?php if (!empty($user)) : ?>
                        <a href="<?= ROOT ?>/account" type="button" class="btn btn-outline-light">
                            <?= $user->getUsername() ?>
                        </a>
                    <?php else : ?>
                        <a href="<?= ROOT ?>/login" type="button" class="btn btn-outline-light">
                            Đăng nhập
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>