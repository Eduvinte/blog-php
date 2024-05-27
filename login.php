<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>
<body>
    <?php
        include_once 'componentes/navBar.php';
    ?>
    <div class="container" id="container-login">
    <h1 class="mt-5">Entrar</h1>
        <div class="row" id="form-login">
            <div class="col-md-12">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <button class="btn btn-primary">Entrar</button>
            </div>
        </div>
    </div>
</body>
</html>