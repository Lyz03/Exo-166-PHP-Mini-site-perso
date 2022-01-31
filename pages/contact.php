<section>
    <h1>Contact</h1>

    <form action="/save.php" method="post">
        <div>
            <label for="username">Nom d'utilisateur : </label>
            <input id="username" type="text" name="username" required>
        </div>
        <div>
            <label for="userMessage">Votre message :</label>
            <textarea name="userMessage" id="userMessage" cols="30" rows="10" required></textarea>
        </div>
        <input type="submit" name="submit">
    </form>
</section>

<?php
if (isset($_GET['m'])) {
    if ($_GET['m'] === '1') {
        echo "<p>Message bien envoyé</p>";
    }
}