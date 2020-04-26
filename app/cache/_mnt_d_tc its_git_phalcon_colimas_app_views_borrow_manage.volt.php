
Requests



<div class="container">
    <table class="ui sortable selectable inverted brown celled table">
        <thead>
            <tr class="center aligned">
                <th>ID</th>
                <th>Book ID</th>
                <th>User ID</th>
                <th>Start Date</th>
                <th>Expected Return</th>
                <th>Return Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($borrows as $borrow) { ?>
            <tr class="center aligned">
                <th><?= $borrow->BORROW_ID ?></th>
                <th><?= $borrow->BOOK_ID ?></th>
                <th><?= $borrow->USER_ID ?></th>
                <th><?= $borrow->BORROW_STARTDATE ?></th>
                <th><?= $borrow->BORROW_EXPECTEDRETURNDATE ?></th>
                <th><?= $borrow->BORROW_RETURNDATE ?></th>
                <th><?= $borrow->BORROW_STATUS ?></th>
                <td>
                    <a href="<?= $this->url->get('/borrow/detail/' . $borrow->BORROW_ID) ?>" class="btn btn-info">View Detail</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
