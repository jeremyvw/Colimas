
<div class="container">
        <form method="POST" action="<?= $this->url->get('/book/add') ?>" enctype="multipart/form-data" class="ui form">
            <div class="form-group row">
                <label for="title">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" placeholder="Ex: Nectar of Pain" required>
                    </div>
            </div>
            <div class="form-group row">
                <label for="year">Year</label>
                    <div class="col-sm-10">
                        <input type="text" name="year" placeholder="Ex: 2015" required>
                    </div>
            </div>
            <div class="form-group row">
                <label for="shelf">Shelf</label>
                    <div class="col-sm-10">
                        <input type="text" name="shelf" placeholder="Ex: 1" required>
                    </div>
            </div>
            <div class="form-group row">
                <label for="description">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="2" name="description" placeholder="Ex: This book can help us understanding..."></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="pagecount">Number of pages</label>
                <div class="col-sm-10">
                    <input type="text" name="pagecount" placeholder="Ex: 299" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="count">Count</label>
                <input type="text" name="count" placeholder="Ex: 2" required>
            </div>
            <div class="form-group row">
                <label for="coverimage">Cover Image</label>
                <input type="file" class="form-control-file" name="coverimage" required>
            </div>
            <div class="form-group row">
                <label for="authorid">Author</label>
                <!-- <input type="text" name="authorid" placeholder="Ex: 4" required> -->
                <select name="authorid" class="form-control">
                    <?php foreach ($authors as $author) { ?>
                        <option value="<?= $author->AUTHOR_ID ?>"><?= $author->AUTHOR_NAME ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group row">
                <label for="categoryid">Category</label>
                <select name="categoryid" class="form-control">
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?= $category->CATEGORY_ID ?>"><?= $category->CATEGORY_NAME ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <input type="submit" value="Add Book to Collections" class="btn btn-success">
        </form>
</div>
