<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 08.03.18
 * Time: 20:39
 */


/**
 * foreach ($people as $person){}
 * UserRepository подробнее указывать
 * billingIdentificator -> billingId
 *
 */

/**
 * создаем фабричный метод, где и будет разруливаться создание того или иного типа Subscription
 */
function signUp(Subscription $subscription)
{
    $subscription->create();
}

function getSubscriptionType($type) // factoryMethod
{
    if ($type == 'forever')
    {
        return new ForeverSubscription;
    }

    return new MonthlySubscription;
}

$subscription = getSubscriptionType($type);
signUp($subscription);