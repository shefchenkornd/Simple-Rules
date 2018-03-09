<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 09.03.18
 * Time: 13:10
 */

/**
 * ex.#2
 */
class BankAccount
{
    protected $accounts;

    public function __construct($accounts)
    {
        $this->accounts = $accounts;
    }

    public function filterBy($accountType)
    {
        // мы даже еще упростили с помощью array_filter
        return array_filter($this->accounts, function($account) use($accountType)
        {
            return $this->isOfType($account, $accountType);
        });

//        $filtered = [];
//
//        foreach ($this->accounts as $account)
//        {
//
//            if ($this->isOfType($account, $accountType))
//            {
//                $filtered[] = $account;
//            }
        // заменили код, что ниже, кодом, что выше,
        // просто добавил один публичный метод isOfType()
//            if ($account->type == $accountType)
//            {
//                if ($account->isActive())
//                {
//                    $filtered[] = $account;
//                }
//            }
//        }
//
//        return $filtered;
    }

    public function isOfType($account, $accountType)
    {
        return $account->type() == $accountType && $account->isActive();
    }
}

class Account
{
    protected $type;

    private function __construct($type)
    {
        $this->type = $type;
    }

    public static function open($type)
    {
        return new static($type);
    }

    public function type()
    {
        return $this->type;
    }

    public function isActive()
    {
        return true;
    }
}

$accounts = [
    Account::open('checking'),
    Account::open('savings'),
    Account::open('checking'),
    Account::open('savings')
];

$accounts = new BankAccount($accounts);
$savings = $accounts->filterBy('savings');
var_dump($savings);