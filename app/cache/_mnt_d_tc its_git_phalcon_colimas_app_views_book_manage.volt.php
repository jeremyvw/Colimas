
<div class="container">
    <div class="card-header">
        <strong>Collection</strong>
    </div>
    <div class="card-header">
        <a href="<?= $this->url->get('book/create') ?>" class="btn btn-primary">Add New Book into Collection</a>
        <span><?= $this->session->get('auth')['name'] ?></span><span>
        <form action="<?= $this->url->get('/session/logout') ?>">
            <input type="submit" value="Logout" class="btn btn-danger">
        </form>
    </div>
    <table class="ui sortable selectable inverted brown celled table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Year</th>
                <th>Shelf</th>
                <th>Number of pages</th>
                <th>Status</th>
                <th>Count</th>
                <th>Author ID</th>
                <th>Category ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book) { ?>
            <tr>
                <td><?= $book->BOOK_ID ?></td>
                <td><?= $book->BOOK_TITLE ?></td>
                <td><?= $book->BOOK_YEAR ?></td>
                <td><?= $book->BOOK_SHELF ?></td>
                <td><?= $book->BOOK_PAGECOUNT ?></td>
                <td><?= $book->BOOK_STATUS ?></td>
                <td><?= $book->BOOK_COUNT ?></td>
                <td><?= $book->AUTHOR_ID ?></td>
                <td><?= $book->CATEGORY_ID ?></td>
                <td>
                    <a href="<?= $this->url->get('/book/edit/' . $book->BOOK_ID) ?>" class="btn btn-info"><span class="fas fa-plus"></span>Edit</a>
                    <a href="<?= $this->url->get('/book/destroy/' . $book->BOOK_ID) ?>" class="btn btn-danger"><span class="fas fa-plus"></span>Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
