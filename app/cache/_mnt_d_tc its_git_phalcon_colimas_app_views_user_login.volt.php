
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <form method="POST" autocomplete="off" action="<?= $this->url->get('/session/login') ?>">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="123@example.com">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
        
        
    </body>
</html>