<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>

<form method="POST" action="/templates" class="container" style="padding-top: 20px;">
    @csrf
    <h1 class="heading is-1">Create a Template</h1>

    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title">
        </div>
    </div>
    <div class="field">
        <label class="label" for="excerpt">Excerpt</label>
        <div class="control">
            <input type="text" class="input" name="excerpt" placeholder="Excerpt">
        </div>
    </div>
    <div class="field">
        <label class="label" for="template">Template</label>
        <div class="control">
            <textarea name="template" class="textarea"></textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class=""button is-link">Create Template</button>
        </div>
    </div>

</form>

</body>
</html>
