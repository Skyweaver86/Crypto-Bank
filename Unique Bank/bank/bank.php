<?php
// Pull in the simple classes that hold our data.
require_once 'classes/Account.php';
require_once 'classes/Customer.php';

// A few hard‑coded accounts just to have something to show on the page.
$accounts = [
    new Account('123456789', 'Checking', 1500.00),
    new Account('987654321', 'Savings', -250.00),
    new Account('555666777', 'Money Market', 3200.50),
    new Account('222333444', 'Credit Card', -780.25)
];

// One customer with a French name so the site feels a bit more “Unique Bank”.
$customer = new Customer('Étienne', 'Lévêque', $accounts);

// Header sets up the HTML, fonts, and logo.
include 'includes/header.php';
?>

<h1><?php echo $customer->getFullName(); ?></h1>

<h2>Accounts</h2>

<table>
    <tr>
        <th>Account Number</th>
        <th>Type</th>
        <th>Balance</th>
    </tr>
    <?php // Loop through each account and drop the details into a table row. ?>
    <?php foreach ($customer->getAccounts() as $account): ?>
    <tr>
        <td><?php echo $account->getAccountNumber(); ?></td>
        <td><?php echo $account->getType(); ?></td>
        <?php // Simple check: positive balances are white, negative ones stand out in orange. ?>
        <?php if ($account->getBalance() >= 0): ?>
            <td class="credit">₱<?php echo number_format($account->getBalance(), 2); ?></td>
        <?php else: ?>
            <td class="overdrawn">₱<?php echo number_format($account->getBalance(), 2); ?></td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>

<?php
// Close out the basic HTML structure.
include 'includes/footer.php';
?>
