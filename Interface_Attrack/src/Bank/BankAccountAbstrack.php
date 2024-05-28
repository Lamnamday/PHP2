<?php

namespace Lam\InterfaceAttrack\Bank;


abstract class BankAccountAbstrack{
    abstract public function withdraw();
    abstract public function getBalance();
    public function showWithdrawAndBalance(){
        $this->withdraw();
        $this->getBalance();
    }
}