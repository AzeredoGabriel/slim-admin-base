<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <base href="public/">
    <title>{% block title %}Sistema Admin Slim{% endblock %}</title>
    {% block styles %}
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/adminlte/AdminLTE.min.css">
    <link rel="stylesheet" href="css/adminlte/skin-black.min.css">
    <link rel="stylesheet" href="css/custom.css"> {% endblock %}
</head>

<body class="hold-transition login-page">
    {% block content %}{% endblock %} {% block scripts %}
    <script data-main="js/app" src="bower_components/requirejs/require.js"></script>
    {% endblock %}
</body>

</html>
