<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Опис вашого сайту">
    <meta name="keywords" content="ключові, слова, вашого, сайту">
    <meta name="author" content="Ім'я автора">
    <title>Вхід до системи</title>
    <!-- Посилання на CSS-файли Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #eee;
        }
        form {
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border: 1px solid #ccc;
            background: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<form id="loginForm">
    <h2 class="text-center">Вхід</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password:</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
</form>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var email = document.getElementById('exampleInputEmail1').value;
        var password = document.getElementById('exampleInputPassword1').value;
        alert('You have successfully logged in.\n\nEmail: ' + email + '\nPassword: ' + password);
    });
</script>

</body>
</html>