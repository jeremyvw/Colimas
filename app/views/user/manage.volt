{% extends 'template/layout.volt' %}
{% block title %}
Member List
{% endblock %}

{% block content %}
<div class="container">
    <table class="ui sortable selectable inverted brown celled table">
        <thead>
            <tr class="center aligned">
                <th>ID</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
            <tr class="center aligned">
                <th>{{user.USER_ID}}</th>
                <th>{{user.USER_NAME}}</th>
                <th>{{user.USER_BIRTHDATE}}</th>
                <th>{{user.USER_GENDER}}</th>
                <th><th>{{user.USER_CATEGORY}}</th></th>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}