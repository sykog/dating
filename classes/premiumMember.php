<?php

    class PremiumMember extends Member
    {
        private $_indoorInterests = array();
        private $_outdoorInterests = array();

        /**
         * get the array of indoor interests
         * @return array indoor interests
         */
        function getIndoorInterests()
        {
            return $this->_indoorInterests;
        }

        /**
         * set the indoor interests selected
         * @param indoorInterests indoor interests
         * @return void
         */
        function setIndoorInterests($indoorInterests)
        {
            $this->_indoorInterests = $indoorInterests;
        }

        /**
         * get the array of outdoor interests
         * @return array outdoor interests
         */
        function getOutdoorInterests()
        {
            return $this->_outdoorInterests;
        }

        /**
         * set the outdoor interests selected
         * @param outdoorInterests indoor interests
         * @return void
         */
        function setOutdoorInterests($outdoorInterests)
        {
            $this->_outdoorInterests = $outdoorInterests;
        }
    }