<?php 
    include_once "../php/headA.inc.php";
?>

<body>
    <?php
    include_once "../php/headerA.inc.php"
    ?>

    <?php
    include_once "../php/connecte.inc.php";
    include_once "../php/mainA.inc.php ";
    include_once "../php/controle.inc.php" ;

    ?>
    
    <?php
    include_once "../php/footerA.inc.php"
    ?>
    <div class="parent-modale" role="dialog">
        <figure class="modale">
            <button aria-label="closed">
                <span class="material-icons">clear</span>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture">
            <figcaption class="desc">
                <h3>title</h3>
                <p>
                   
                </p>
                
                <time>Years : </time>
                <form action="post">
                    <a href="../forum.php" 
                    id="bt">
                    je m'inscrit
                </a>
                </form>
            </figcaption>
        </figure>
    </div>
    <script src="../js/app.js"></script>
</body>

</html>