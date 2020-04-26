{% block content %}
<div class="container">
        <form method="POST" autocomplete="off" action="{{url('/book/update/'~book.BOOK_ID)}}" enctype="multipart/form-data" class="ui form">
            <div class="field">
                <label for="id">ID</label>
                <input type="text" class="" name="title" placeholder="Ex: 1" required value="{{book.BOOK_ID}}" readonly>
            </div>
            <div class="field">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Ex: Nectar of Pain" required value="{{book.BOOK_TITLE}}">
            </div>
            <div class="field">
                <label for="year">Year</label>
                <input type="text" name="year" placeholder="Ex: 2015" required value="{{book.BOOK_YEAR}}">
            </div>
            <div class="field">
                    <label for="shelf">Shelf</label>
                    <input type="text" name="shelf" placeholder="Ex: 1" required value="{{book.BOOK_SHELF}}">
            </div>
            <div class="field">
                <label for="description">Description</label>
                <textarea rows="2" name="description" placeholder="Ex: This book can help us understanding..." value="{{book.BOOK_DESCRIPTION}}">{{book.BOOK_DESCRIPTION}}</textarea>
            </div>
            <div class="field">
                <label for="pagecount">Number of pages</label>
                <input type="text" name="pagecount" placeholder="Ex: 299" required value="{{book.BOOK_PAGECOUNT}}">
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
                <input type="text" name="count" placeholder="Ex: 2" required value="{{book.BOOK_COUNT}}">
            </div>
            <div class="field">
                <label for="coverimage">Cover Image</label>
                {{book.BOOK_COVERIMAGE}}
                <input type="file" name="coverimage" required>
            </div>
            <div class="field">
                <label for="authorid">Author</label>
                <select name="authorid" class="ui dropdown">
                    {% for author in authors %}
                        <option value="{{author.AUTHOR_ID}}">{{author.AUTHOR_NAME}}</option>
                    {% endfor %}
                </select>
            </div>
            <div class="field">
                <label for="categoryid">Category</label>
                <select name="categoryid" class="ui dropdown">
                    {% for category in categories %}
                        <option value="{{category.CATEGORY_ID}}">{{category.CATEGORY_NAME}}</option>
                    {% endfor %}
                </select>
            </div>
            
            <input type="submit" value="Save changes" class="btn btn-success">
        </form>
</div>
{% endblock %}