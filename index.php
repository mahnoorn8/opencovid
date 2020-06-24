<!DOCTYPE html>

<html>

    <head>
        <title>Covid - What's Open</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>

    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1>What's <span style="color: #AC3B61">Open</span> in my Region?</h1>
                </div>
            </div>
        </header>

        <section id="showcase">
            <div class="container">
                <h1>Bored at home? Find safe things to do in your region!</h1>
            </div>
        </section>

        <section id="region">
            <div class="container">
                <p>Wondering what's open near you in these uncertain times? Enter your postal code to find out</p>
                <h3>Enter your postal code or city</h3>
                <!-- need to add an action for this form -->
                <form action="userinfo.php" method="POST"> 
                    <input type="text" placeholder="Enter your postal code">
                    <button type="submit" class="button_1">Enter</button>

                </form>
            </div>
        </section>
    </body>

</html>
