<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div id="app">
<navbar> </navbar>
<div class="container">
    <router-view />
</div>
</div>

</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
