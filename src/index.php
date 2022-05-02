<html>
<body>
<?php
    $server = 'db';
    $username = 'root';
    $password = 'csym019';
    $schema = 'internet_programming';
    $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,
    [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $results = $pdo->query('SELECT * FROM person');
    $search=[];
    if(isset($_POST['submit'])){
        $field = $_POST['search'];
        $option = $_POST['option'];
        $search = $pdo->query('SELECT * FROM person WHERE "' . $option . '" = "' . $field . '"');
    }
    if(isset($_POST['add-record'])){
        $birth = $_POST['year']." ".$_POST['month']." ".$_POST['day']
        $stmt = $pdo->prepare('INSERT INTO person (firstname, surname, birthday, email) VALUES (:firstname, :surname, :birthday, :email)');
        $values = [
            'firstname' => $_POST['firstname'],
            'surname' => $_POST['surname'],
            'birthday'=> $birth,
            'email' => $_POST['email']
        ];
        $stmt->execute($values);
    }
?>  
    <h1>Searched Users</h1>
    <ul>
    <?php
        foreach ($search as $row) {
            echo '<li>' . $row['firstname'] . ' ' . $row['surname'] . ' was born on ' . $row['birthday'] . '</li>';
        }
    ?>
    </ul>
    <h1>All Persons</h1>
    <ul>
    <?php
        foreach ($results as $row) {
            echo '<li>' . $row['firstname'] . ' ' . $row['surname'] . ' was born on ' . $row['birthday'] . '</li>';
        }
    ?>
    </ul>
    <form action="" method="POST">
        <select name="option">
            <option value="" disabled selected>Search by</option>
            <option value="firstname">firstname</option>
            <option value="surname">surname</option>
            <option value="email">email</option>
         </select>
        <input type="text" name="search" placeholder="Search User" required>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <h1>Add new user</h1>
    <form action="" method="POST">
        <input type="text" name="firstname" placeholder="First Name" required>
        <input type="text" name="surname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="year">
            <option value="" disabled selected>Year</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
         </select>
         <select name="month">
            <option value="" disabled selected>Month</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
         </select>
         <select name="day">
         <option value="" disabled selected>Day</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
         </select>
        <input type="submit" name="add-record" value="submit">
    </form>
</body>
</html>