<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Bi2A6imZLfksrbJl8hJLw+0LwkNfeJ+YcgOFqJnpnZOAI3TxgOmVqUKQvzXcs5NHSSVyyv6Q9Diwmbaj2j/qzA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* CSS untuk menyesuaikan tinggi foto dengan tinggi layar */
        .fullscreen-bg {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            z-index: -1;
        }

        .fullscreen-bg__video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="sidebar-brand-text mx-3">Gallery <sup></sup></div>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('login') ?>"><button type="button" class="btn btn-outline-secondary">Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('register') ?>"><button type="button" class="btn btn-outline-secondary">Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Foto -->
    <div class="fullscreen-bg">
        <img src="<?php echo base_url('assets/img/depan.jpg'); ?>" alt="Foto" class="fullscreen-bg__video">
        <div class="overlay-text">
            <h1>Gallery Foto</h1>
            <p>Welcome to our gallery website</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js" integrity="sha384-zRmNmuBpFphtQj79p7oSGmVj/MEIAnHlvPc0EE+Tc8mmdfov87xOKlVMI3uikvEy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk+5KV5+6spWm20dkn4pZl3hKkV0kZ1Zy" crossorigin="anonymous"></script>
</body>
</html>
