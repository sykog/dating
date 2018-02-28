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
 * The Member class represents a member on a dating website.
 * Members have first and last names, an age, gender, phone number,
 * email, home state, bio, and a gender they are seeking
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
            $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function addMember()
    {
        // define the query
        $sql = "INSERT INTO Members(fname, lname, age, gender, phone, email, state, seeking, bio, premium, image, interests)
          VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, :seeking, :bio, :premium, :image, :interests)";

        // prepare the statement
        $statement = $dbh->prepare($sql);
    }
}