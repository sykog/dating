<?php

    /**
     * The Member class represents a member on a dating website.
     * Members have first and last names, an age, gender, phone number,
     * email, home state, bio, and a gender they are seeking
     * @author Antonio Suarez <asuarez2@mail.greenriver.edu>
     * @copyright 2018
     */
    class Member
    {
        protected $fname;
        protected $lname;
        protected $age;
        protected $gender;
        protected $phone;
        protected $email;
        protected $state;
        protected $seeking;
        protected $bio;

        /**
         * Member constructor.
         * @param $fname first name
         * @param $lname last name
         * @param $age age
         * @param $gender gender
         * @param $phone phone number
         * @return void
         */
        function __construct($fname, $lname, $age, $gender, $phone)
        {
            $this->fname = $fname;
            $this->lname = $lname;
            $this->age = $age;
            $this->gender = $gender;
            $this->phone = $phone;
        }

        /**
         * get the user's first name
         * @return string first name
         */
        function getFname()
        {
            return $this->name;
        }

        /**
         * set the user's first name
         * @param $fname the first name
         * @return void
         */
        function setFname($fname)
        {
            $this->fname = $fname;
        }

        /**
         * get the user's last name
         * @return string last name
         */
        function getLname()
        {
            return $this->lname;
        }

        /**
         * set the user's last name
         * @param $fname last name
         * @return void
         */
        function setLname($lname)
        {
            $this->lname = $lname;
        }

        /**
         * get the user's age
         * @return string age
         */
        function getAge()
        {
            return $this->age;
        }

        /**
         * set the user's age
         * @param $fname age
         * @return void
         */
        function setAge($age)
        {
            $this->age = $age;
        }

        /**
         * get the user's gender
         * @return string gender
         */
        function getGender()
        {
            return $this->gender;
        }

        /**
         * set the user's gender
         * @param $fname gender
         * @return void
         */
        function setGender($gender)
        {
            $this->gender = $gender;
        }

        /**
         * get the user's phone number
         * @return string phone number
         */
        function getPhone()
        {
            return $this->phone;
        }

        /**
         * set the user's phone number
         * @param $fname phone number
         * @return void
         */
        function setPhone($phone)
        {
            $this->phone = $phone;
        }

        /**
         * get the user's email
         * @return string email
         */
        function getEmail()
        {
            return $this->email;
        }

        /**
         * set the user's email
         * @param $fname email
         * @return void
         */
        function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * get the user's home state
         * @return string state
         */
        function getState()
        {
            return $this->state;
        }

        /**
         * set the user's home state
         * @param $fname state
         * @return void
         */
        function setState($state)
        {
            $this->state = $state;
        }

        /**
         * get the gender the user is seeking
         * @return string gender user is seeking
         */
        function getSeeking()
        {
            return $this->seeking;
        }

        /**
         * set the gender the user is seeking
         * @param $fname gender use is seeking
         * @return void
         */
        function setSeeking($seeking)
        {
            $this->seeking = $seeking;
        }

        /**
         * get the user's bio
         * @return string bio
         */
        function getBio()
        {
            return $this->bio;
        }

        /**
         * set the user's bio
         * @param $fname bio
         * @return void
         */
        function setBio($bio)
        {
            $this->bio = $bio;
        }
    }