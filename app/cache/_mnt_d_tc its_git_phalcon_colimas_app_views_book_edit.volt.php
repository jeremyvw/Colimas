<!DOCTYPE html>
<html lang="en">
    <?= $this->assets->outputCss() ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colimas</title>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(150, 180, 255, 1);">
        <a href="<?= $this->url->get('/') ?>" class="navbar-brand">Logo</a>
        <button class="navbar-toggler" data-toogle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= $this->url->get('/') ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->url->get('/book/manage') ?>" class="nav-link">Collections</a>
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
                    <a href="<?= $this->url->get('/user/manage') ?>" class="nav-link">Members</a>
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
                <li class="nav-item">
                    <a href="<?= $this->url->get('/user/register') ?>" class="nav-link">Register</a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </nav>
</head>




<body>
    
<div class="container">
        <form method="POST" autocomplete="off" action="<?= $this->url->get('/book/update/' . $book->BOOK_ID) ?>" enctype="multipart/form-data" class="ui form">
            <div class="form-group row">
                <label for="id">ID</label>
                <div class="col-sm-10">
                    <input type="text" class="" name="title" placeholder="Ex: 1" required value="<?= $book->BOOK_ID ?>" readonly>
                </div>
            </div>
            <div class="field">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Ex: Nectar of Pain" required value="<?= $book->BOOK_TITLE ?>">
            </div>
            <div class="field">
                <label for="year">Year</label>
                <input type="text" name="year" placeholder="Ex: 2015" required value="<?= $book->BOOK_YEAR ?>">
            </div>
            <div class="field">
                    <label for="shelf">Shelf</label>
                    <input type="text" name="shelf" placeholder="Ex: 1" required value="<?= $book->BOOK_SHELF ?>">
            </div>
            <div class="field">
                <label for="description">Description</label>
                <textarea rows="2" name="description" placeholder="Ex: This book can help us understanding..." value="<?= $book->BOOK_DESCRIPTION ?>"><?= $book->BOOK_DESCRIPTION ?></textarea>
            </div>
            <div class="field">
                <label for="pagecount">Number of pages</label>
                <input type="text" name="pagecount" placeholder="Ex: 299" required value="<?= $book->BOOK_PAGECOUNT ?>">
            </div>
            <div class="field">
                <label for="status">Status</label>
                <select name="status" class="ui dropdown">
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                </select>
            </div>
            <div class="field">
                <label for="count">Count</label>
                <input type="text" name="count" placeholder="Ex: 2" required value="<?= $book->BOOK_COUNT ?>">
            </div>
            <div class="field">
                <label for="coverimage">Cover Image</label>
                <?= $book->BOOK_COVERIMAGE ?>
                <input type="file" name="coverimage" required>
            </div>
            <div class="field">
                <label for="authorid">Author</label>
                <select name="authorid" class="ui dropdown">
                    <?php foreach ($authors as $author) { ?>
                        <option value="<?= $author->AUTHOR_ID ?>"><?= $author->AUTHOR_NAME ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="field">
                <label for="categoryid">Category</label>
                <select name="categoryid" class="ui dropdown">
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?= $category->CATEGORY_ID ?>"><?= $category->CATEGORY_NAME ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <input type="submit" value="Save changes" class="btn btn-success">
        </form>
</div>

</body>
</html>
