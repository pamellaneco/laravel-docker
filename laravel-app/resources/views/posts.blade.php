<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Posts</title>
</head>
<body>
    <h1>Testando conhecimentos da section 2 - Laracasts Laravel from scratch</h1>
    <h5><a href="/welcome">Go to Laravel home/documentation</a></h5>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">
                    <?= $post->title; ?>
                </a>
            </h1>
            <div>
                <?= $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
</html>