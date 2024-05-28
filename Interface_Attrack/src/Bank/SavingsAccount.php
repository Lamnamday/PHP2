<?php

namespace Lam\InterfaceAttrack\Bank;

class SavingsAccount extends BankAccountAbstrack{
    public function withdraw(){
        echo __CLASS__ . ' _ ' . __FUNCTION__ . PHP_EOL;
    }
    public function getBalance(){
        echo __CLASS__ . ' _ ' . __FUNCTION__ . PHP_EOL;
    }
}