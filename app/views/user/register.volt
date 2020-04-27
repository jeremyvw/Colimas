{{ assets.outputCss() }}
{% block content %}
<div class="limiter">
    <div class="container-login100">
        <form method="POST" autocomplete="off" action="{{url('/session/register')}}" enctype="multipart/form-data" class="login100-form validate-form">
            <span class="login100-form-title">Register</span><br>
            <div class="wrap-input100 validate-input p-bp10">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Ex: myusername" required>
            </div>
            <div class="wrap-input100 validate-input p-bp10">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="wrap-input100 validate-input p-bp10">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Ex: 123@example.com" required>
            </div>
            <div class="wrap-input100 validate-input p-bp10">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Victor Delacroix" required>
            </div>
            <div class="wrap-input100 validate-input p-bp10">
                <label for="birthdate">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" id="male" value="Male">
                <label for="gender">Male</label><br>
                <input type="radio" name="gender" id="female" value="Female">
                <label for="gender">Female</label><br>
            </div>
            <div class="wrap-input100 validate-input p-bp10">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" placeholder="Ex: 0" required>
            </div>
            <div class="wrap-input100 validate-input p-bp10">
                <label for="profile">Profile</label>
                <input type="file" class="form-control-file" name="profile" required>
            </div>
            <div class="container-login100-form-btn">
                <!-- <input type="submit" value="Register" class="btn btn-success"> -->
                <button type="submit" class="login100-form-btn">Register</button>
            </div>
        </form>
    </div>
</div>
{% endblock %}