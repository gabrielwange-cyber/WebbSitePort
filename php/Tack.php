<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, inital-scale-1.0">
    <meta name="description" content="A thank you message for your application">
    <meta name="keywords" content="It-Specialist, IT-Säkerhet, Högskolan Dalarna, Mjukvaru-Utvecklare">
    <meta name="author" content="Erik Eriksson">
    <title>Tack Erik Eriksson</title>
    <link rel="stylesheet" href="/CSS/Site.css">
</head>

<body>

    <main>
    <header class = "MainHeader" >
        <nav class="Main_nav">
            <ul>
                <li>
                    <a class="Home_nav" href="/View/Home.html" aria-current="page">Home</a>
                </li>
                <li>
                    <a class="Project_page_old" href="/View/Utbildning.html" aria-current="page">Utbildning</a>
                </li>
                <li>
                    <a class="Current_Project" href="/View/Current_projects.html" aria-current="page">Nuvarande Projekt</a>
                </li>
                <li>
                    <a class="Skills" href="/View/Kompetenser.html" aria-current="page">Kompetenser</a>
                </li>
                <li>
                    <a class="About_page" href="/View/About-Me.html" aria-current="page">Mer om Mig</a>
                </li>
                <li>
                    <a class="About_page" href="/View/Kontakta.html" aria-current="page">Kontakta mig</a>
                </li>
            </ul>
        </nav>
    </header>
        <h1>Tack, <?= htmlspecialchars($_POST['namn'] ?? '') ?>!</h1>
        <p>Jag har tagit emot dina uppgifter och återkommer så snart jag kan.</p>
        <p><a href="/View/Home.html">Till startsidan</a></p>
    </main>
</body>
</html>