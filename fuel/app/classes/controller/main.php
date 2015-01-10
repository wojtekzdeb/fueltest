<?php

use Fuel\App\Classes as myClasses;

class Controller_Main extends Controller_Template {

    /**
     * Main template
     */
    public $template = 'template.tpl';

    /**
     * Your before method
     */
    public function before() {
        parent::before();
        $this->template->title = 'Exchange rate checker';
    }

    /**
     * Make after() compatible with Controller_Template by adding $response as a parameter
     */
    public function after($response) {
        $response = parent::after($response);

        return $response;
    }

    /**
     * Processes index action
     */
    public function action_index() {
        $em = \Fuel\Doctrine::manager();
        $exchangeRateLogRepository = $em->getRepository('Model_ExchangeLog');
        $validation = $this->getValidation();
        if ($validation->run()) {
            $input = $validation->input();
            $this->processInputData($input);
        } else {
            $this->template->val = array('errors' => $validation->error(), 'values' => $validation->input());
        }

        $logs = $exchangeRateLogRepository->findBy(array(), array('date' => 'desc'));
        $this->template->content = View::forge('main/index.tpl');
        $this->template->logs = $logs;
        $this->template->set('form', $validation->fieldset()->form()->build(), false);
    }

    /**
     * Gets exchange rate from database of from remote service, 
     * if in logs we have rate from current day we get it from db, 
     * if not - from remote service
     * @param array $input
     */
    private function processInputData(array $input) {
        $storedExchangeRate = myClasses\ExchangeRateProvider::getStoredExchangeRate($input['currency_from'], $input['currency_to']);
        if (!empty($storedExchangeRate)) {
            $avg = myClasses\ExchangeRateProvider::getAverageRateForCurrencies($input['currency_from'], $input['currency_to']);
            $this->addRateToTemplate($storedExchangeRate->getCurrencyFrom(), $storedExchangeRate->getCurrencyTo(), $storedExchangeRate->getRate(), $avg);
        } else {
            try {
                $exchangeRate = myClasses\ExchangeRateProvider::getRate($input['currency_from'], $input['currency_to']);
                var_dump('TEST2', $exchangeRate);
                $this->storeExchangeRate($exchangeRate);
                $this->addRateToTemplate($exchangeRate->from, $exchangeRate->to, $exchangeRate->rate, $exchangeRate->rate);
            } catch (Exception $e) {
                $this->template->val = array('errors' => $e->getMessage());
            }
        }
    }

    /**
     * Stores exchange rate in db
     * @param StdClass $exchangeRateOb
     */
    private function storeExchangeRate(StdClass $exchangeRateOb) {
        $em = \Fuel\Doctrine::manager();
        $exchangeRateLog = new Model_ExchangeLog();
        $exchangeRateLog->setCurrencyFrom($exchangeRateOb->from);
        $exchangeRateLog->setCurrencyTo($exchangeRateOb->to);
        $exchangeRateLog->setRate($exchangeRateOb->rate);
        $exchangeRateLog->setDate(date_create());

        $em->persist($exchangeRateLog);
        $em->flush();
    }

    /**
     * Adds rate to template values
     * @param string $currencyFrom
     * @param string $currencyTo
     * @param string $rate
     * @param float $avarageRate
     */
    private function addRateToTemplate($currencyFrom, $currencyTo, $rate, $avarageRate) {
        $this->template->val = array('rate' => array(
                'from' => $currencyFrom,
                'to' => $currencyTo,
                'rate' => $rate,
                'avg' => $avarageRate));
    }

    /**
     * Returns currencies' form
     * @return Validation
     */
    private function getValidation() {
        $validation = Validation::forge('exchange_rate');
        $validation->add('currency_from', 'Currency from')
                ->add_rule('required')
                ->add_rule('match_pattern', '/^[A-Za-z]{3}$/');
        $validation->add('currency_to', 'Currency to')
                ->add_rule('required')
                ->add_rule('match_pattern', '/^[A-Za-z]{3}$/');
        $validation->add('get_exchange_rate', '', array('type' => 'submit', 'value' => 'Get rate!'));
        return $validation;
    }

}
