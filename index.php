<?php

    error_reporting(E_ERROR);

    session_start();

    if (!isset($_SESSION)){
        $_SESSION["count"] = 1;
    }
    else{
        $_SESSION["count"]=$_SESSION["count"]+1;
    }

    $cnt = $_SESSION["count"]

?>

<html>
    <head>
        <title>Session Based Visits Counter</title>
        <link href="./main.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <div class="counterarea">
            <p class="countertext">This Page has been Visited</p>
            <?php
                echo("
    
                    <h1 class='counter'>$cnt</h1>
                
                ")
            ?>
            <p class="countertext">Times</p>
            <br />

            <?php

            
                echo("

                <form action='./reload.php' method='post'>
                    <button>
                        Reload Page
                    </button>
                </form>                

                &nbsp;&nbsp;&nbsp;&nbsp;

                <form action='./reset.php' method='post'>
                    <button>
                        Reset Counter
                    </button>
                </form>                
                ")
            
            ?>

        </div>

        <div class="bl">

            <p class="countertext">Click on Reload Page to increment the Counter</p>
            <p class="countertext">Click on Reset Counter to reset the Counter</p>

        </div>
    </body>

</html>