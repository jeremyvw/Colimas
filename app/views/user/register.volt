{% block content %}
<div class="container">
    <form method="POST" autocomplete="off" action="{{url('/session/register')}}" enctype="multipart/form-data" class="ui form">
        <div class="form-group row">
            <label for="username">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" placeholder="Ex: myusername" required>
                </div>
        </div>
        <div class="form-group row">
            <label for="year">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" required>
                </div>
        </div>
        <div class="form-group row">
            <label for="shelf">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" placeholder="Ex: 123@example.com" required>
                </div>
        </div>
        <div class="form-group row">
            <label for="name">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" placeholder="Victor Delacroix" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="birthdate">Birthdate</label>
            <div class="col-sm-10">
                <input type="date" name="birthdate" required>
            </div>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" id="male" value="male">
            <label for="gender">Male</label><br>
            <input type="radio" name="gender" id="female" value="female">
            <label for="gender">Female</label><br>
        </div>
        <div class="form-group row">
            <label for="category">Category</label>
            <input type="text" name="category" placeholder="Ex: 0" required>
        </div>
        <div class="form-group row">
            <label for="profile">Profile</label>
            <input type="file" class="form-control-file" name="profile" required>
        </div>
        
        <input type="submit" value="Register" class="btn btn-success">
    </form>
</div>
{% endblock %}