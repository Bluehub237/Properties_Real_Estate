<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
</head>
<body>
<h2>Liste de message de contact</h2>
<p>Réception d'une prise de contact avec les éléments suivants :</p>
<ul>
<li><strong>Nom</strong> : {{ ($contact['first_name']) . ' ' . ($contact['last_name']) }}</li>
<li><strong>Service</strong> : {{ $contact['service'] }}</li>
<li><strong>phone</strong> : {{ $contact['phone'] }}</li>
<li><strong>Email</strong> : {{ $contact['email'] }}</li>
<li><strong>Message</strong> : {{ $contact['message'] }}</li>
</ul>
</body>
</html>
