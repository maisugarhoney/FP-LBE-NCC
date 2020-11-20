<!DOCTYPE html>
<body>

Identitas Pokémon <br>
<br>

<form action="process.php" method="post">
Nama Pokemon : <input type="text" name="name"><br>
Tipe Pokemon : <select name="type" input type="text">
      <option value="Normal">Normal</option>
      <option value="Fighting">Fighting</option>
      <option value="Poison">Poison</option>
      <option value="Ground">Ground</option>
      <option value="Rock">Rock</option>
      <option value="Bug">Bug</option>
      <option value="Ghost">Ghost</option>
      <option value="Steel">Steel</option>
      <option value="Fire">Fire</option>
      <option value="Water">Water</option>
      <option value="Grass">Grass</option>
      <option value="Electric">Electric</option>
      <option value="Psychic">Psychic</option>
      <option value="Ice">Ice</option>
      <option value="Dragon">Dragon</option>
      <option value="Dark">Dark</option>
      <option value="Fairy">Fairy</option>
</select><br>
Spesies Pokemon : <input type="text" name="species"><br>
Height : <input type="text" name="height" pattern="[0-9]"><br>
Weight : <input type="text" name="weight" pattern="[0-9]"><br>
Abilities : <input type="text" name="abilities"><br>
<input type="submit" value="Buat Pokemon!"?>
</form>

</body>
</html?>