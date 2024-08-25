<?php include '../layouts/header.php'; ?>
<?php include '../layouts/nav.php'; ?>
<main>
    <h1>Contact Us</h1>
    <form method="post" action="submit_contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        <input type="submit" value="Submit">
    </form>
</main>
<?php include '../layouts/footer.php'; ?>
