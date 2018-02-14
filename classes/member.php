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
         * get the  name
         * @return string first name
         */
        function getFname()
        {
            return $this->name;
        }

        /**
         * set the first name
         * @param $fname the first name
         * @return void
         */
        function setFname($fname)
        {
            $this->fname = $fname;
        }
    }