<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 11.03.18
 * Time: 20:13
 */

class EmailAddress
{
    public function __construct($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new InvalidArgumentException;
        }

        $this->email = $email;
    }
}