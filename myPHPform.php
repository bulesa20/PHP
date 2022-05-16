<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
    </head>
    <body>
    <h1>PHP FORM</h1>
    <form>
    NAME: <input type="text" name="name"><br>
    EMAIL: <input type="email" name="email" align:top="5px"><br>
    GENDER:
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="female">female <br>
    <input type="submit">
    </form>
    <?php echo $_GET["name"]; ?>
    <?php echo $_GET["email"]; ?>

    </body>
</html>