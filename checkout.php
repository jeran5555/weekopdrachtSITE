<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betalingsformulier</title>
</head>

<body>

    <form action="">
        <h1>Betalingsformulier</h1>
        <p>Verplichte velden worden gevolgd door *</p>
        <h2>Contactgegevens</h2>
        <p>Naam: * <input type="text" name="naam" required></p>
        <fieldset>
            <legend>Geslacht * </legend>
            <p>
                Man <input type="radio" name="Geslacht" id="man" required> Vrouw <input type="radio" name="Geslacht" id="Vrouw" required>
            </p>
        </fieldset>
        <p>Adres: <textarea name="adres" id="adres" cols="100" rows="8"></textarea></p>
        <p>Email: * <input type="email" name="email" id="email" required></p>
        <p>Pincode: * <input type="number" name="pincode" id="pincode" required></p>
        <h2>Betalingsinformatie</h2>
        <p>Kaarttype:*
            <select name="card_type" id="card_type" required>
                <option value="">--Selecteer een kaarttype--</option>
                <option value="visa">Visa</option>
                <option value="rupay">Rupay</option>
                <option value="mastercard">MasterCard</option>
            </select>
        </p>
        <p>
            Kaartnummer * <input type="nummer" name="Kaartnummer" id="Kaartnummer" required>
        </p>
        <p>
            Vervaldatum: * <input type="date" name="Vervaldatum" id="Vervaldatum" required>
        </p>
        <p>CVV * <input type="password" name="cvv" id="cvv" required></p>
        <input type="submit" value="Betalen">
    </form>
</body>

</html>