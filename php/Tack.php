<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tack – Erik Eriksson</title>
    <link rel="stylesheet" href="/CSS/Site.css">
</head>
<body>
    <main>
        <h1>Tack, <?= htmlspecialchars($_POST['namn'] ?? '') ?>!</h1>
        <p>Jag har tagit emot dina uppgifter och återkommer så snart jag kan.</p>
        <p><a href="/View/Home.html">Till startsidan</a></p>
    </main>
</body>
</html>