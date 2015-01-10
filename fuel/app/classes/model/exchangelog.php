<?php

/**
 * Log, entity
 *
 * @author Wojciech Zdeb
 * @Entity
 * @Table(name="logs")
 */
class Model_ExchangeLog {

    /**
     * Identifier of log record
     * 
     * @var int
     * @Id 
     * @Column(type="integer", name="id") @GeneratedValue
     */
    private $id;

    /**
     * Date of exchange
     * @Column(type="datetime", name="date")
     * @var string
     */
    private $date;

    /**
     * Currency from
     * @Column(type="string", name="currency_from", length=3)
     * @var string
     */
    private $currencyFrom;

    /**
     * Currency to
     * @Column(type="string", name="currency_to", length=3)
     * @var string
     */
    private $currencyTo;

    /**
     * Rate
     * @Column(type="float", name="rate")
     * @var float
     */
    private $rate;

    public function getId() {
        return $this->id;
    }

    public function getDate() {
        return $this->date;
    }

    public function getCurrencyFrom() {
        return $this->currencyFrom;
    }

    public function getCurrencyTo() {
        return $this->currencyTo;
    }

    public function getRate() {
        return $this->rate;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setCurrencyFrom($currencyFrom) {
        $this->currencyFrom = $currencyFrom;
    }

    public function setCurrencyTo($currencyTo) {
        $this->currencyTo = $currencyTo;
    }

    public function setRate($rate) {
        $this->rate = $rate;
    }

}
