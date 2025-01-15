# 6.3.1
* Apple Pay Infotext in backend
* Fix: Retry payment after being cancelled by Unzer JS

# 6.3.0
* Updated Apple Pay Integration

# 6.2.6
* Fix Apple Pay payment processing

# 6.2.5
* Update to improve compatibility with 3rd-party-plugins

# 6.2.4
* Update Basket Conversion functionality

# 6.2.3
* Invoice (Paylater): Charge without Invoice document possible
* "Save Paypal Account" now optional
* Prevented lineItems with no Parent ID and Product ID to be hydrated

# 6.2.2
* Invoice and Installment : Adjust Payment Status for New Orders to be Authorized
* Invoice Paylater: Delete the payment information in the order success page. Information is already sent by mail to end customer
* Adjust font weight for Unzer transaction ID in order overview
* Use plugin logo with correct dimensions in backend
* Enable “Pay” Button when saved payments are used
* EPS: Remove Bank Field

# 6.2.1
* Added cardholder name to creditcard checkout

# 6.2.0
* Add TWINT as new payment method
* Removal / setting inactive of Giropay as payment method

# 6.1.0
* Add Google Pay as new payment method
* Certificate handling Apple Pay improved

# 6.0.0
* Compatibility shopware 6.6

# 5.7.1
* Added compatability for PHP 8.3
* Removed Kellerkinder name from the plugin and payment method descriptions
* Added the Technical names for the payment methods
* Fixed the card number field for mobile devices

# 5.7.0
* Add Direct Debit as new payment method
* Changed the release process for building one plugin version that is compatible with Shopware 6.4 and Shopware 6.5
* Fixed the shipping notice for payments with "Invoice Secured (Deprecated)"

# 5.6.1
* Fixed decoration of CheckoutController for compatibility to other plugins

# 5.6.0
* Add Paylater Installment as new payment method
* Mark existing Secured Installment as deprecated
* Fixed the display of the Unzer tab in the administration

# 5.5.2
* Fixed the payment status "Authorized" for Apple Pay, PayPal and credit card in authorize mode
* Fixed the payment status "Failed" for PayPal and credit card in charge mode

# 5.5.1
* Fixed the order completion if the TOS was not initially accepted
* Fixed compatibility to other plugins that decorate the CheckoutController

# 5.5.0
* The order will now be reloaded after the actions in the Unzer tab so that the payment status is displayed correctly.
* Added the cancel of an authorization
* Fixed an additional parameter in the transfer of payment data to Unzer when credit card information is saved in checkout for the first time

# 5.4.1
* Fixed the payment via PayPal with a guest account

# 5.4.0
* Removed the settings for registering the payment details in the plugin configuration
* Added and adjusted the registering of payment details in the checkout

# 5.3.0
* Fixed the names of the frontend routes
* Added compatibility to PHP 8.2
* Fixed the sorting of transactions in the Unzer tab on an order

# 5.2.0
* Added compatibility to Shopware 6.5
* Fixed the cart calculation for net customers (thanks to twidmer)

# 5.1.1
* Added compatibility to CSRF mode ajax

# 5.1.0
* Added Apple Pay as new payment method

# 5.0.0
* Fix of recurring use of a credit card
* Added Paylater Invoice as new payment method
* Updated Unzer PHP SDK to version 1.2.2.0
* Added compatibility to Unzer Basket V2 API
* Fix the update of payment methods when updating the plugin
* Added new parameter to `PaymentResourceHydratorInterface::hydateArray` to handle the display of refunds for Paylater invoice

# 4.0.0
* Transfer information is now stored in the custom fields instead of a separate table.
  * **Please note,** that existing data will **not** be migrated
* Added a pagination for the webhook registration
* Add additional saving of custom fields for an Unzer transaction in the webhook handler
* The Unzer client is now initialized with the current language of the store
* Discounts are now determined on the basis of the `good` property and transferred to Unzer
* Fixed validation of SEPA payment methods in checkout

# 3.2.1
* Fix of error handling in case of an error triggered by Unzer

# 3.2.0
* Fix validation of tos checkbox in checkout with Unzer payment methods
* Correction of the error logic within the payment types to pick up the Shopware standard handling
* Add compatibility to Shopware 6.4.10.0

# 3.1.0
* Add compatibility to EasyCoupon plugin
* Fix deletion of customer with saved payment
* Fix payment status when redirected to external payment page
* Add webhook management
  * **Please note,** that webhooks should be re-registered if necessary

# 3.0.1
* Fix redirect in case of an error when deleting a payment device
* Fix display of the devices for SEPA secured
* Updated Unzer PHP SDK to version 1.1.4.0
* Add compatibility to PHP 8
* Add recurrence type for payments with credit card

# 3.0.0
* Add Administration UI for refund reason codes
* Add additional routes for passing reason codes
* Change Cancel Order Interface to pass reason code
* Added Bancontact as a new payment method
* Fixed payment with installment and discounts
* Fixed an error that occured when switching the shipping address
* Customers are now being updated in the Unzer Insight Board
* Fixed backwards compatibility to Shopware 6.3 and lower for SEPA payment methods
* Fixed the maximum birthday year
* Fixed the order list override so other plugins are also able to manipulate the list
* Compatibility with shopware 6.4.3.0 ensured
* Correction of the webhook registration for multiple sales channels with different credentials
* Fixed an error that saved PayPal accounts although no email was provided by the API

# 2.0.1
* Compatibility with shopware 6.4.0.0 ensured
* Fixed SEPA-Mandate text in checkout

# 2.0.0
* Added birthdate validation to payment method Unzer installment in checkout
* Switch to the new unzer SDK (https://packagist.org/packages/unzerdev/php-sdk)
* Error in plugin configuration for inherited settings corrected

# 1.0.4
* Error in Invoice (guaranteed/factoring) for B2B customers corrected
* Error in the decimal place display in the administration fixed
* Correction of the missing display of the total amount in the checkout
* Correction of an error in the administration when editing an order.
* Compatibility with shopware 6.3.5.1 ensured

# 1.0.3
* Adjustments of the code style and increase of the code quality
* Correction of missing decimal places Display in admin for reimbursement and collection
* Correction of missing labels in the plugin settings
* Correction of webhook registration
* Payment methods for shopping carts with a value of zero are now disabled

# 1.0.2
* Correction of the voucher handling

# 1.0.1
* Correction of payment status changes

# 1.0.0
* Release
