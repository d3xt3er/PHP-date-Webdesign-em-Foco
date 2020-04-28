<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Location</title>
</head>

<body>
    <form name="formLocation" id="formLocation" action="Controllers/controllerLocation.php" method="post">
        Entry date: <input type="date" name="entryDate" id="entryDate" required> - <input type="time" name="entryTime" id="entryTime" required><br>
        Departure date: <input type="date" name="departureDate" id="departureDate" required> - <input type="time" name="departureTime" id="departureTime" required><br>
        <input type="submit" value="Rent">
    </form>
</body>
</html>