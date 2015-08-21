<?php
/**
 * Created by PhpStorm.
 * User: Isambard.Wheeler
 * Date: 04/08/2015
 * Time: 12:50
 */

class enquiry {

    protected $firstname;
    protected $email;
    protected $enquiry;

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname=$firstname;
    }

    public function getEmail()
    {
        return $this->email();
    }

    public function setEmail($email)
    {
      $this->email= $email;
    }

    public function getEnquiry()
    {
        return $this->$enquiry;
    }

    public function setEnquiry($enquiry)
    {
        $this->enquiry = $enquiry;
    }
}