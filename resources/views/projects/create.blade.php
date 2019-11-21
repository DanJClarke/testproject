<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="project description"></textarea>
        </div>
        <button type="submit">Create project</button>
    </form>
</body>
</html>
