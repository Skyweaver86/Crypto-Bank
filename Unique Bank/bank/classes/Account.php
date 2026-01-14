<?php
// Simple value object that represents one bank account for a customer.
class Account {
    // Basic details we care about for this demo.
    private $accountNumber;
    private $type;
    private $balance;
    
    public function __construct($accountNumber, $type, $balance) {
        // Store whatever was passed in. No heavy validation here on purpose.
        $this->accountNumber = $accountNumber;
        $this->type = $type;
        $this->balance = $balance;
    }
    
    // Return the raw account number string.
    public function getAccountNumber() {
        return $this->accountNumber;
    }
    
    // Things like “Checking”, “Savings”, etc.
    public function getType() {
        return $this->type;
    }
    
    // Positive for money in the account, negative if the user owes money.
    public function getBalance() {
        return $this->balance;
    }
}
