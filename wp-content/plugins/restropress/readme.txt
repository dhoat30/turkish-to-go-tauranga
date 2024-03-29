=== RestroPress - Online Food Ordering System ===
Contributors: magnigenie,sagarseth9,kshirod-patel,dipakbbsr
Tags: Food ordering, Online ordering, Restaurant ordering, Restaurant menu, Food delivery, Takeaway, Pickup
Donate link: https://paypal.me/magnigeeks
Requires at least: 4.0
Requires PHP: 5.3
Tested up to: 5.5
Stable tag: 2.6.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

RestroPress is a Food Ordering System for WordPress which will help the restaurant owners to sell their food online.

== Description ==

RestroPress is a Online Food Ordering system for WordPress. It is a standalone WordPress plugin which allows you to easily add Food Ordering System to your WordPress Website. Using RestroPress you can easily receive both PickUp and Delivery orders.

RestroPress has a user friendly frontend and backend interface which will allow you to easily manage the orders and also comes with pre-built user dashboard to manage their profile and orders.

The plugin automatically adds the required pages to your site when you activate the plugin. The plugin outputs the food items on your page using [fooditems] shortcode.

= Shortcode Attributes =
* category( category ids or slug separated by comma(,) )
* category_menu(this will show only the child category of the specified category)
* cat_orderby( Ordering for category )
* fooditem_orderby ( ordering of food items inside the category )
* cat_order: asc/desc
* fooditem_order: asc/desc

**Examples**

[fooditems category="starter,snacks,lunch"]

The above shortcode should display the category sidebar with those 3 category and the products would only be displayed from those 3 category.

[fooditems category_menu="lunch"]

The above shortcode will only display the child categories of lunch on the category sidebar and also display the food items from the child category of lunch.

= Restropress In action =
[youtube https://www.youtube.com/watch?v=CGVpXYw6JDQ]

Check  [RestroPress Website](https://www.restropress.com/) for details and support.

= Restropress Demo =
Check [RestroPress Demo Website](https://demo.restropress.com/)

= Benefits: =
* 100% Free and easy to install and setup.
* Add food ordering system to your WordPress site without any coding skills.
* Easy to use interface to manage food items, add-on items, food category etc.
* Allows to receive both PickUp and Delivery orders.
* Get instant push notifications for online orders.
* User friendly admin interface to add restaurant menu.
* Reporting system to view sales, customers etc.
* Allows you to add multiple add-on options for your food.
* Custom user login, register and dashboard.
* Receive payments using PayPal, Amazon and Cash On Delivery and more options coming soon.
* Developer friendly with sufficient hooks.
* And much more coming soon...

= Extending the possibilities with RestroPress =
RestroPress has some basic features for food ordering system. If you want more exciting premium features then we have some addons to boost your restropress powered ordering system.

[Check RestroPress Extensions](https://www.restropress.com/extensions/)

= Want some custom extension? =
If you want any custom extension for RestroPress, feel free to contact us at support@restropress.com

If you have any suggestions for a new extension, feel free to email us at support@restropress.com

== Installation ==
1. Login to your WordPress dashboard and navigate to Plugins > Add New
2. Search for "RestroPress".
3. Click install.
4. Click activate.
5. Once the plugin is installed then you can see RestroPress on the left navigation bar of WordPress Dashboard.

== ChangeLog ==

= Version 2.6.2 =
* New - Live price change on Variable Price or Addon Selection.
* Update - Filter added to search orders with specific service date.
* Fixed - 3x slower time with certain paid extensions has been fixed now.
* Fixed - RestroPress assets affecting Non RestroPress Pages performance.
* Fixed - Optimized CSS and JavaScripts files to enhance performance.
* Fixed - Addons not getting selected while editing cart item.
* Fixed - Modal windows not opening in Bootstrap 4 themes.
* Fixed - Issue with exporting orders report.
* Fixed - Discount value mismatch in order notification emails.
* Fixed - Discount calculation considering chosen addon items.

= Version 2.6.1 =
* Fixed fooditem quantity issue
* Fixed translation issue
* Fixed tax calculation issue on fees.
* Fixed order count issue.
* Fixed food item display issue on the order details page.
* Added selected variation name in the emails, order details.
* Added fooditem description in the popup.
* Added option for minimum order amount for pickup.

= Version 2.6 =
* Added variable pricing for food items.
* Added Email notifications based on different order status.
* Added filter for updating Order and Payment status color codes.
* Updated Tax options.
* Updated billing fields to have the option to enable/disable on tax setting.
* Updated Add/Edit food item page with item data tabs.
* Updated admin order listing UI and functionality.
* Fixed Emails Tags and Labels for Tax.
* Added category menu on mobile.
* Code optimized for faster checkout.
* UI improvements throughout the frontend and admin screens.
* Fixed discount code functionalities.

= Version 2.5.3 =
* Updated order confirmation page template.
* Updated food item list email tag.
* Fixed issue with search box.
* Checkout page css fixes.

= Version 2.5.2 =
* Updated food items page ui and responsive fixes.
* Updated checkout page responsive issues.
* Removed disable guest checkout option in favour of Login/Register option under checkout options.
* Fixed date issue based on different timezones.
* Fixed subtotal related issues.

= Version 2.5.1 =
* Added new bulk actions for orders.
* Fixed admin order status column translation issue.
* Fixed time slot issue.
* Fixed bulk payment status change issue.

= Version 2.5 =
* Admin menu split in to two parts.
* Added missing translation strings to be translatable.
* Added validation methods to the checkout page.
* Added guest checkout option.
* Updated admin templates loading method.
* Updated PayPal standard payment gateway.
* Updated checkout address fields.
* Update email content and tags.
* Cleaned un-necessary admin options.
* Fixed issue related to order date.
* Fixed issue with the delivery text translation.
* Fixed date translation issue.
* Fixed email tag issue with delivery/billing address.
* Fixed add-on quantity on quick-view popup.

= Version 2.4.1 =
* Added validation for time slot checking on proceed to checkout.
* Code cleanup & admin updates.
* Fixed admin service date issue.
* Fixed plugin conflict issues.

= Version 2.4 =
* Updated order history screen to display additonal columns.
* Added option to quick view the order details.
* Added new order statuses.
* Fixed minimum order issue with tax and fees.
* Fixed modal backdrop issue.
* Fixed modal not opening issue.
* FIxed issue with cart item edit.
* Fixed tax column issue on checkout.


= Version 2.3.5 =
* Fixed update cart items issue
* Fixed food items issue in the order history
* Fixed backdrop issue
* Added functionality for orders quick view


= Version 2.3.4 =
* Fixed date issue on the order confirmation page.
* Fixed issue with order pickup/delivery time dropdown.
* Updated delivery/pickup at text on cart/checkout pages.


= Version 2.3.3 =
* Fixed issue with tax calculation with fee.
* Updated total/subtotal/fee position.
* Fixed issue with address hide option on pickup.
* Fixed issue with cart breaking in some themes.
* Added special instructions to the fooditem_list email tag.

= Version 2.3.2 =
* Fixed addon price calculation issue when using fee
* Fixed discount code issues
* Fixed fooditems count issue in discount
* Updated fooditem single to be not accessible by public
* Updated push notification to show after payment
* Updated free purchase to test payment
* Updated fooditem category column to display food items
* Updated checkout page cart to display subtotal
* Minor css optimisation
* Added nl_NL translation.

= Version 2.3.1 =
* Fixed extra div issue for popup
* Fixed backdrop issue on closing popup
* Functionality to show delivery date in the cart


= Version 2.3 =
* Fixed issue for the map_meta_cap in checkout page
* Added order_id in the email tag
* Fixed order_note email tag
* Added parameters to [fooditems] shortcode
* Added {service_type}, {service_date}, {payment_status} variables in the order push notifications

= Version 2.2.4 =
* Fixed bootstrap theme compatibility issue
* Fixed flat number and phone email tag issue
* Replaced addon category column with food categories on fooditem page
* Fixed backdrop issue for the modal
* Added option to have 24hr store time format

= Version 2.2.3 =
* Fixed order status filter issue

= Version 2.2.2 =
* Added order note functionality
* Added email tag for order note

= Version 2.2.1 =
* Fixed delivery address for online payment gateways

= Version 2.2 =
* Fixed responsive design issue
* Fixed customer delivery address issue
* Added order status
* Fixed currency issue for email tag
* Fixed payment status when payment is done
* Fixed delete icon issue from checkout page
* Fixed delivery date issue


= Version 2.1 =
* Updated responsive design
* Added sliding cart for mobile devices
* Added option to set order prep/cooking time
* Added option to set store closed message
* Fixed the time dropdown for pickup and deliery
* Updated plus(+) icon to ADD button.

= Version 2.0.9 =
* Fixed address field in the checkout page
* Fixed address email tag in the mail tag list
* Fixed translation issue for the service type
* Fixed translation issue for the checkout fields

= Version 2.0.8 =
* Fixed issue with addon food category in the email receipt
* Fixed issue with special instruction in the email receipt
* Fixed delivery address email tag for email receipt
* Fixed multiple email when using cash on delivery payment gateway

= Version 2.0.7 =
* Fixed issue with store delivery hours
* Fixed email tag issue for service_type
* Fixed email tag issue for service_time
* Added email tags list in the admin screen

= Version 2.0.6 =
* Fixed issue with settings submenu
* Fixed issue with store open time and close time
* Added settings hook for notification

= Version 2.0.5 =
* Fixed issue with string offset notice with WordPress version 5.3
* Fixed issue with no fooditems found message
* Fixed issue with gutenberg error
* Fixed issue with default store open and close time
* Fixed addon page css

= Version 2.0.4 =
* Fixed empty cart message
* Added email tags for service time {service_time} and service type {service_type}
* Added shortcode for showing fooditems by category wise
* Fixed store timings
* Updated admin settings
* css and js optimized
* Fixed issue for total costs on payment gateway
* Code optimized.

= Version 2.0.3 =
* Fixed bugs with the price calculation.
* Fixed issue with add-on price.
* Fixed remove cart item reload issue.
* Disabled past time display on dropdown of pickup/delivery time.
* Updated delivery/pickup time options on admin.
* Updated categories display.
* Updated cart layout.

= Version 2.0.2 =
* Fixed issues with push notifications.
* Fixed issues with emails.
* Fixed subtotal calculation issue.
* Fixed discount calculation issue.
* Fixed problems with checkbox/radio options.
* Fixed issues with the image popup display.
* Updated to automatically create the food items page.
* Updated admin settings.
* Added option for to add sound to push notifications.

= Version 2.0.1 =
* Fixed popup z-index issue
* fixed template part issue for before and after food items
* Added prefix rp for bootstrap classes
* Added option to open the food image in lighbox.
* Removed view option from admin food items
* Removed view option from admin add-on category
* Removed view option from admin food category
* Fixed cart shortcode template issue
* Added delivery hours hooks for the add-on
* Renamed food item add-on category into add-on category
* Added option to choose if you want to disable the bootstrap files of the plugin.
* Fixed email template issue when order placed

= Version 2.0 =
* Changed checkout layout
* Changed quantity box design
* Fixed css issues
* Fixed option for color theme
* Js modified for change delivery options
* Added add-ons page in the admin


= Version 1.0.7 =
* Fixed email issue when order placed
* Fixed store open hours issue
* Replaced bootstrap modal with fancybox
* Fixed responsive issues
* Styles and script modified.

= Version 1.0.6 =
* Discount code functionality added.
* Minimum order price option added.
* Option to use google address autocomplete on checkout page.
* Modified process to ask for pickup or delivery before adding item to cart.
* Cash on delivery method added in the payment gateway
* Fixed issue for address in order history
* Design fixes.

= Version 1.0.5 =
* Payment gateway link modified
* Minor code optimized

= Version 1.0.4 =
* Fixed css conflict issue with theme
* Fixed js issues
* Optimized code
* Fixed template override method
* jQuery live search for food items implemented
* Checked plugin compatibility with different themes
* Removed slug generation from food items custom post type

= Version 1.0.3 =
* Added loader in popup when ajax calls
* Style fixed for the checkbox
* Added label for delivery options
* Added heading for delivery time select

= Version 1.0.2 =
* Fixed issue with currency option in add-on food items.

= Version 1.0.1 =
* Fixed design issues.
* CSS modified
* JS issue fixed
* Bugs Fixed

= Version 1.0 =
* Initial public release.

== Upgrade Notice ==

= Version 2.6.2 =
* New update is available, make sure to take a backup before update.
