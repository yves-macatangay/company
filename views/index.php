<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card mx-auto w-50 my-5">
        <div class="card-body">
            <h1 class="display-6 text-center">LOGIN</h1>

            <form action="../actions/login.php" method="post">
                <input type="text" name="username" id="" placeholder="USERNAME" class="form-control">

                <input type="password" name="password" id="" placeholder="PASSWORD" class="form-control mt-3">

                <input type="submit" value="Log in" class="btn btn-primary w-100 my-4">
            </form>
            <p class="text-center"><a href="register.php" class="text-decoration-none">Create account</a></p>
        </div>
    </div>
</body>
</html>