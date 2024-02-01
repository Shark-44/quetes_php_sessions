<footer>
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav ">
                <li><a href="#">Conditions générales</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Recrutement</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <?php
                    // Vérifiez si l'utilisateur est connecté
                    // Si non, affichez le lien de connexion
                    if (!isset($_SESSION['user'])) {
                        echo '<a href="login.php">Login</a>';
                    } else {
                        echo '<strong>Hello ' . $_SESSION['user'] . '!</strong>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</footer>
<!-- Latest compiled and minified Bootstrap JavaScript + JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>
