<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message</title>
</head>
<body>
    
    <h1>Nouveau message</h1>
    <p>Un nouveau message a été ajouté :</p>
    <p>De: {{ $user->name }} </p>
    <p>Mail: {{ $user->email }}</p>
    <p>Objet: {{ $comment->subject }}</p>
    <p>Message: {{ $comment->content }}</p>
    
</body>
</html>