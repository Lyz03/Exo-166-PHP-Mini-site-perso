<section>
    <h1>Contact</h1>

    <form action="/save.php" method="post">
        <div>
            <label for="username">Nom d'utilisateur : </label>
            <input id="username" type="text" name="username" required>
        </div>
        <div>
            <label for="userMessage">Votre message :</label>
            <textarea name="userMessage" id="userMessage" required></textarea>
        </div>
        <input type="submit" name="submit">
    </form>
</section>

<?php
if (isset($_GET['m'])) {
    if ($_GET['m'] === '0') {
        echo "<p>Message bien envoyé</p>";
    } elseif ($_GET['m'] === '1') {
        echo "<p>Erreur lors de l'envoi du message</p>";
    }
}