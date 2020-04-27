<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- {{ assets.outputCss() }} -->
    <title>Colimas</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <a href="{{url('/book/manage')}}" class="nav-link">Collections</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/user/manage')}}" class="nav-link">Members</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link">Welcome, {{session.get('auth')['name']}}</span>
                </li>
                <li class="nav-item">
                    <a href="{{url('/session/logout')}}" class="nav-link"></a>
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </li>
            </ul>
        </div>
    </nav>
</head>

{% block title %}
{% endblock %}

<body>
    {% block content %}
    {% endblock %}
</body>
</html>