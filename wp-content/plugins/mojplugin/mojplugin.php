<?php
/*
Plugin Name: COntact form
Plugin URI: https://repot.petratrananh.dk/
Description: Shows a contact form
Version: 1.0.0
Author: Petra
Text Domain: Petra
*/

// Function to show HTML on posts
function show_form() {
  return '<form>'
  . '<label for="name">Name:</label>'
  . '<input id="name">'
  . '<label for="email">Email:</label>'
  . '<input id="email">'
  . '<label for="phone">Phone number:</label>'
  . '<input id="phone">'
  . '</form';
}

// adds the HTML as a short code so it can be added to pages and posts with [contact_form]
add_shortcode('contact_form', 'show_form');

// makes the contact form admin page in the menu
function contact_form_menu() {
  add_menu_page('Contact form', // menu name
                'Contact form',
                'manage_options', // who has access
                'contact-form-admin-menu', // slug in the url
                'contact_form_page_func,', // function to show HTML
                '', // Icon
                5); // menu button placement
}

// add the function as a action to show it in the menu
add_action('admin_menu', 'contact_form_menu');

// show HTML on the contacts admin page
// /wp-admin/admin.php?page=contact-form-admin-menu
function contact_form_page_func() {
	// Should contain some html like
  /*
  <ul>
    <li>customer name</li>
    <li>customer email</li>
    <li>customer phone number</li>
  </ul>
  */
}
?>