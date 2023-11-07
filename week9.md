# Week 9 - Object Oriented programming
## Why OOP?
  - most modern languages support OOP
  - allows for you to represent the STATE of something as well as its BEHAVIOUR
  - we represent objects in a CLASS with PROPERTIES and METHODS
    - STATE -> PROPERTIES
    - BEHAVOIUR -> METHODS
  - in this course we are not going to be really writing objects too often
  - more as a review to allow us to use PDO (PHP Data Objects) for database access
    - make new projects using PDO - best practice since you are not attached to a single database engine
   
## Example - Bank Account
### https://www.phptutorial.net/php-oop/php-objects/
  - Object -> Bank Account
  - State -> Account Number, Balance, Log
  - Behaviour -> Deposit, Withdrawl
```
<?php
  class BankAccount {}
?>
```
  - you create an instance of the object as follows:    ` $account = New BankAccount();`

  - Add properties to BankAccount to define the state
```
<?php
  class BankAccount {
    public $AccountNumber;
    public $Balance;
    public $Log;
  }
?>
```

- Add methods to BankAccount define the behaviour
```
<?php
  class BankAccount {
    public $AccountNumber;
    public $Balance;
    public $Log;
    public function deposit($amount, $details)	{
      if ($amount > 0) {
        $this->balance += $amount;
        // and also add the transaction to the $Log
        // ie. who deposited the money, what date, where the deposit occured. ($details)
      }
    }
    // and so on for all of our other methods.
  }
?>
```
