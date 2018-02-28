<?php
/* CREATE TABLE Members (
    member_id INT PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(30),
    lname VARCHAR(30),
    age TINYINT,
    gender VARCHAR(6),
    phone CHAR(9),
    email VARCHAR(60),
    state VARCHAR(20),
    seeking VARCHAR(6),
    bio TEXT,
    premium TINYINT,
    image VARCHAR(100),
    interests VARCHAR(150)
) */

require_once("/home/asuarezg/config.php");

/**
 * The Database class pulls the Memeber table from the database
 * Members can be inserted into the table and selected from it
 * @author Antonio Suarez <asuarez2@mail.greenriver.edu>
 * @copyright 2018
 */
class Database
{
    protected $dbh;

    /**
     * Database constructor.
     * Establishes connection with database
     * @return void
     */
    function __construct()
    {
        try {
            // instantiate a PDO object
            $this->dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Adds member to the database
     * @param $fname first name
     * @param $lname last name
     * @param $age age
     * @param $gender gender
     * @param $phone phone number
     * @param $email emial
     * @param $state state
     * @param $seeking gender user is seeking
     * @param $bio bio
     * @param $premium 1 if true, 0 if false
     * @param $image image file if exists
     * @param $interests list of interests
     * @return void
     */
    function addMember($fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio, $premium, $image, $interests)
    {
        $dbh = $this->dbh;
        // define the query
        $sql = "INSERT INTO Members(fname, lname, age, gender, phone, email, state, seeking, bio, premium, image, interests)
          VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, :seeking, :bio, :premium, :image, :interests)";

        // prepare the statement
        $statement = $dbh->prepare($sql);
        $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
        $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':phone', $phone, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
        $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':premium', $premium, PDO::PARAM_INT);
        $statement->bindParam(':image', $image, PDO::PARAM_STR);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);

        // execute
        $statement->execute();
        $id = $dbh->lastInsertId();
    }

    function printMembers()
    {
        $dbh = $this->dbh;
        // Define the query
        $sql = "SELECT * FROM Members ORDER BY lname";

        // Prepare the statement
        $statement = $dbh->prepare($sql);

        // Execute the statement
        $statement->execute();

        // Process the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo "<tr><td>" . $row['member_id'] . "</td>";
            echo "<td>" . $row['fname'] . " " . $row['lname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['state'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['seeking'] . "</td>";
            if ($row['premium'] == 1) {
                echo "<td><input id='checkBox' type='checkbox' checked></td>";
            } else {
                echo "<td><input id='checkBox' type='checkbox'></td>";
            }
            echo "<td>" . $row['interests'] . "</td></tr>";
        }
    }
}