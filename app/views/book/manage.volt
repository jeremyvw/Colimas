{% block content %}
<div class="container">
    <div class="card-header">
        <strong>Collection</strong>
    </div>
    <div class="card-header">
        <a href="{{url('book/create')}}" class="btn btn-primary">Add New Book into Collection</a>
        <span>{{ session.get('auth')['name'] }}</span><span>
        <form action="{{url('/session/logout')}}">
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
            {% for book in books %}
            <tr>
                <td>{{book.BOOK_ID}}</td>
                <td>{{book.BOOK_TITLE}}</td>
                <td>{{book.BOOK_YEAR}}</td>
                <td>{{book.BOOK_SHELF}}</td>
                <td>{{book.BOOK_PAGECOUNT}}</td>
                <td>{{book.BOOK_STATUS}}</td>
                <td>{{book.BOOK_COUNT}}</td>
                <td>{{book.AUTHOR_ID}}</td>
                <td>{{book.CATEGORY_ID}}</td>
                <td>
                    <a href="{{url('/book/edit/'~book.BOOK_ID)}}" class="btn btn-info"><span class="fas fa-plus"></span>Edit</a>
                    <a href="{{url('/book/destroy/'~book.BOOK_ID)}}" class="btn btn-danger"><span class="fas fa-plus"></span>Hapus</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}