<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="form_script.php" method="POST">

<!-- input -->
  <p>Name: <input type="text" name="name" value="" size="30"/>
    </p>

<!-- drop down menu -->
  <p>Size: <select name="size">
    <option value="small">small</option>
    <option value="medium">medium</option>
    <option value="large">large</option>

    </select></p>

<!-- radio buttons -->
  <p>
    Gender:<br>
  <input type="radio" name="gender" value="girl"/> girl<br>
  <input type="radio" name="gender" value="boy"/> boy<br>

  </p>

<!-- submit button -->
  <input type="submit" name="submit" value="Submit"/>

</form>

</body>
</html>
