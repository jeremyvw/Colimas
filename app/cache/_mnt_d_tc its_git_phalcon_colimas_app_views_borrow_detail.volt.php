
<div class="container">
    <form method="POST" autocomplete="off" action="<?= $this->url->get('/borrow/update/' . $borrow->BORROW_ID) ?>" enctype="multipart/form-data" class="ui form">
        <div class="field">
            <label for="id">ID</label>
            <input type="text" class="" name="title" value="<?= $borrow->BORROW_ID ?>" readonly>
        </div>
        <div class="field">
            <label for="bookid">Book ID</label>
            <input type="text" name="bookid" required value="<?= $borrow->BOOK_ID ?>" readonly>
        </div>
        <div class="field">
            <label for="userid">User ID</label>
            <input type="text" name="userid" required value="<?= $borrow->USER_ID ?>" readonly>
        </div>
        <div class="field">
                <label for="startdate">Start Date</label>
                <input type="date" name="startdate" required value="<?= $borrow->BORROW_STARTDATE ?>" readonly>
        </div>
        <div class="field">
            <label for="expectedreturndate">Expected Return Date</label>
            <input type="date" name="expectedreturndate" required value="<?= $borrow->BORROW_EXPECTEDRETURNDATE ?>">
        </div>
        <div class="field">
            <label for="returndate">Return Date</label>
            <input type="text" name="returndate" value="<?= $borrow->BORROW_RETURNDATE ?>" readonly>
        </div>
        <div class="field">
            <label for="status">Status</label>
            <select name="status" class="ui dropdown">
                <option value="Pending">Pending</option>
                <option value="Accepted">Accepted</option>
            </select>
        </div>
        <input type="submit" value="Save changes" class="btn btn-success">
    </form>
</div>
