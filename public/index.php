<!DOCTYPE html>
<html>
<head>
    <title>Academic Resource Manager</title>
    <link rel="stylesheet" href="assets/css/index-style.css">
</head>
<body>
    <div class="navbar">
        <!-- Home -->
        <a href="#home">Home</a>
        
        <!-- Secondaire -->
        <div class="dropdown">
            <button class="dropbtn">Secondaire</button>
            <div class="dropdown-content">
                <a href="jsp/layouts/viewResource.jsp?level=Secondaire&course=Sixieme">Sixième</a>
                <a href="jsp/layouts/viewResource.jsp?level=Secondaire&course=Cinquieme">Cinquième</a>
                <a href="jsp/layouts/viewResource.jsp?level=Secondaire&course=Quatrieme">Quatrième</a>
                <a href="jsp/layouts/viewResource.jsp?level=Secondaire&course=Troisieme">Troisième</a>
            </div>
        </div>

        <!-- Lycée -->
        <div class="dropdown">
            <button class="dropbtn">Lycée</button>
            <div class="dropdown-content">
                <a href="jsp/layouts/viewResource.jsp?level=Lycee&course=Seconde">Seconde</a>
                <a href="jsp/layouts/viewResource.jsp?level=Lycee&course=Premiere">Première</a>
                <a href="jsp/layouts/viewResource.jsp?level=Lycee&course=Terminale">Terminale</a>
            </div>
        </div>

        <!-- Other menus as before -->
    </div>

    <div class="content">
        Hello world
    </div>
</body>
</html>
