{% extends 'template/layout.volt' %}
{% block content %}
<div class="container">
    <div class="card-header">
        <strong>Request</strong>
    </div>
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
            {% for borrow in borrows %}
            <tr class="center aligned">
                <th>{{borrow.BORROW_ID}}</th>
                <th>{{borrow.BOOK_ID}}</th>
                <th>{{borrow.USER_ID}}</th>
                <th>{{borrow.BORROW_STARTDATE}}</th>
                <th>{{borrow.BORROW_EXPECTEDRETURNDATE}}</th>
                <th>{{borrow.BORROW_RETURNDATE}}</th>
                <th>{{borrow.BORROW_STATUS}}</th>
                <td>
                    <a href="{{url('/borrow/detail/'~borrow.BORROW_ID)}}" class="btn btn-info">View Detail</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}