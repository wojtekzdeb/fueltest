<?php

namespace Fuel\App\Classes;

/**
 * ExchangeRateProvider, responsible for providing exchange rates
 *
 * @author wojtek
 */
class ExchangeRateProvider {

    /**
     * Provides rate for given currencies
     * 
     * @param string $currencyFrom
     * @param string $currencyTo
     * @return StdClass
     * @throws Exception
     */
    public static function getRate($currencyFrom, $currencyTo) {
        $url = "http://rate-exchange.appspot.com/currency?from=$currencyFrom&to=$currencyTo";
        $result = file_get_contents($url);
        $jsonResult = json_decode($result);
        if (!isset($jsonResult->err)) {
            return $jsonResult;
        } else {
            throw new \Exception("Couldn't find rate from $currencyFrom to $currencyTo");
        }
    }

    /**
     * Returns avarage currency from our logs
     * @param string $currencyFrom
     * @param string $currencyTo
     * @return float $avg
     */
    public static function getAverageRateForCurrencies($currencyFrom, $currencyTo) {
        $em = \Fuel\Doctrine::manager();
        try {
            $query = $em->createQuery("
              SELECT avg(c.rate) as avg
              Model_ExchangeLog     c
              WHERE c.currencyFrom = :currency_from AND c.currencyTo = :currency_to")
                    ->setPArameter('currency_from', $currencyFrom)
                    ->setPArameter('currency_to', $currencyTo)
                    ->setMaxResults(1);

            $avg = $query->getResult();
            if (!empty($avg)) {
                $retVal = $avg[0][1];
            }
        } catch (\Exception $e) {
            $retVal = 0.00;
        }
        return $retVal;
    }

    /**
     * Function responsible for finding rate in db
     * @param string $currencyFrom
     * @param string $currencyTo
     * @return Model_ExchangeLog|NULL
     */
    public static function getStoredExchangeRate($currencyFrom, $currencyTo) {
        $em = \Fuel\Doctrine::manager();
        $date = date_create();
        try {
            $qb = $em->createQueryBuilder();
            $qb->select('c')
                    ->from('Model_ExchangeLog', 'c')
                    ->where($qb->expr()->andX(
                                    $qb->expr()->gte('c.date', '?1'), $qb->expr()->lte('c.date', '?2'), $qb->expr()->eq('c.currencyFrom', '?3'), $qb->expr()->eq('c.currencyTo', '?4')
                    ))
                    ->setParameter(1, $date->format('Y-m-d 00:00:00'))
                    ->setParameter(2, $date->format('Y-m-d 23:59:59'))
                    ->setParameter(3, $currencyFrom)
                    ->setParameter(4, $currencyTo)
                    ->setMaxResults(1);
            $query = $qb->getQuery();
            $storedExchangeRate = $query->getResult();
            return $storedExchangeRate[0];
        } catch (\Exception $e) {
            return NULL;
        }
    }

}
