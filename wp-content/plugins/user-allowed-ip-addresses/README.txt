=== Plugin Name ===
Contributors: mattpramschufer
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mattpram%40gmail%2ecom
Tags: IP Address, IP Login, User Profile, User IP Address, IP Address Login, Auto Login
Requires at least: 4.0
Tested up to: 4.3.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple plugin that gives the ability to restrict login access to specific IP addresses for specific users.
Option to Auto Login user based on IP.

== Description ==

If you ever needed the ability to have a specific user account only be able to login from specific IP addresses then
this is the plugin for you.  It is a simple plugin that adds an IP Addresses field to the user profile screen.  If you
add in an IP address or a list of IP addresses that user will only be able to login from that IP address.

You have the option to redirect a user to a specific page if their IP address is not in the list of allowed IPs in the
plugin options.  If you don't specify a URL it will redirect back to the homepage.

Another feature is to be able to have AUTO LOGIN from an IP address.  The auto login feature does exactly what it
sounds like. It will automatically login a user based on their IP Address.


== Installation ==

You can either browse for this plugin through Wordpress Admin and click install or you can upload the zip file via
Wordpress Admin.

After installing you will see extra field on Edit User page, and you will see setting page under Settings->User Allowed IP Addresses

If you want the AUTO LOGIN feature to work, you need to specifiy a URL in which the auto login will take place.


== Frequently Asked Questions ==

= Does this work with IPV4 and IPV6 Addresses? =
Yes.  This plugin will work with both IPV4 and IPV6 addresses.

== Screenshots ==

1. Settings Screen
2. User Profile Screen


== Changelog ==

= 1.1.1 =
* Added in trim function to inputter ip addresses

= 1.1 =
* Added in ability to auto login user based on IP Address
* Refactored and optimized code
* Added in settings and support links

= 1.0 =
* Initial Version