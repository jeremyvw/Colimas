a:5:{i:0;s:2156:"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <?= $this->assets->outputCss() ?> -->
    <title>Colimas</title>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(150, 180, 255, 1);">
        <a href="#" class="navbar-brand">Logo</a>
        <button class="navbar-toggler" data-toogle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->url->get('/book/manage') ?>" class="nav-link">Collections</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->url->get('/user/manage') ?>" class="nav-link">Members</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?= $this->url->get('/user/login') ?>" class="nav-link">Login</a>
                </li> -->
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            <?php if ($this->session->get('auth')) { ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link">Welcome, <?= $this->session->get('auth')['name'] ?></span>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->url->get('/session/logout') ?>" class="nav-link"></a>
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </li>
            </ul>
            <?php } else { ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= $this->url->get('/user/login') ?>" class="nav-link">Login</a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </nav>
</head>

";s:5:"title";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:1:"
";s:4:"file";s:64:"/mnt/d/TC ITS/git/phalcon_colimas/app/views/template/layout.volt";s:4:"line";i:53;}}i:1;s:13:"

<body>
    ";s:7:"content";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:5:"
    ";s:4:"file";s:64:"/mnt/d/TC ITS/git/phalcon_colimas/app/views/template/layout.volt";s:4:"line";i:57;}}i:2;s:17:"
</body>
</html>
";}