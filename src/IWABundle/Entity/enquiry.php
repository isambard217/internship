<?php
/**
 * Created by PhpStorm.
 * User: Isambard.Wheeler
 * Date: 04/08/2015
 * Time: 12:50
 */
namespace IWABundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="enquiry")
 */
class enquiry
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank()
    */
    protected $firstname;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    protected $enquiry;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

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
        return $this->email;
    }

    public function setEmail($email)
    {
      $this->email= $email;
    }

    public function getEnquiry()
    {
        return $this->enquiry;
    }

    public function setEnquiry($enquiry)
    {
        $this->enquiry = $enquiry;
    }
}