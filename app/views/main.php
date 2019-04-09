<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset=utf-8>
    <title>Students</title>
    <link rel="shortcut icon" href="../../app/views/bootstrap/icon.jpeg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
    <!-- Дополнительные стили (не обязательно) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap-theme.min.css" integrity="sha384-jzngWsPS6op3fgRCDTESqrEJwRKck+CILhJVO5VvaAZCq8JYf8HsR/HPpBOOPZfR" crossorigin="anonymous">
    <!-- Подключаем jQuery (необходим для Bootstrap JavaScript) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li class="active"><a href="#">Home</a></li>

        </ul>
        <h3 class="text-muted">Students</h3>
    </div>

    <div class="jumbotron">
        <h1>Тестове завдання</h1>
        <p class="lead">Наповнюю простір випадковим текстом.</p>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h2>Таблиця</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>Ім'я</td>
                    <td>Прізвище</td>
                    <td>Стать</td>
                    <td>Рік народження</td>
                    <td>Група</td>
                    <td>Факультет</td>
                    <td>Редагувати</td>
                    <td>Видалити</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Сергій</td>
                    <td>Махнюк</td>
                    <td>чоловік</td>
                    <td>1990</td>
                    <td>Факультет психології</td>
                    <td>Клиническая психология с основами психотерапи</td>
                    <td><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-pencil"></span> Edit</button></td>
                    <td><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-minus-sign"></span> Delete</button></td>
                </tr>
                <tr>
                    <td>Сергій</td>
                    <td>Махнюк</td>
                    <td>чоловік</td>
                    <td>1990</td>
                    <td>Факультет психології</td>
                    <td>Клиническая психология с основами психотерапи</td>
                    <td><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-pencil"></span> Edit</button></td>
                    <td><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-minus-sign"></span> Delete</button></td>
                </tr>
                <tr>
                    <td>Сергій</td>
                    <td>Махнюк</td>
                    <td>чоловік</td>
                    <td>1990</td>
                    <td>Факультет психології</td>
                    <td>Клиническая психология с основами психотерапи</td>
                    <td><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-pencil"></span> Edit</button></td>
                    <td><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-minus-sign"></span> Delete</button></td>
                </tr>
                <p><a class="btn btn-primary btn-lg" role="button">Добавити студента</a></p>
                </tbody>
            </table>
        </div>

    </div>
</div> <!-- /container -->
<footer>
    <div class="footer">
        <p>&copy; IcoxLab 2019</p>
    </div>
</footer>
</body>
</html>