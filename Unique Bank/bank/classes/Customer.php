<?php
// Represents a single customer in our tiny “bank” example.
class Customer {
    private $firstName;
    private $lastName;
    // This will usually be an array of Account objects.
    private $accounts;
    
    public function __construct($firstName, $lastName, $accounts = []) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }
    
    // Give back something we can drop straight into the page header.
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
    
    // Return whatever list of accounts we attached to this customer.
    public function getAccounts() {
        return $this->accounts;
    }
}
