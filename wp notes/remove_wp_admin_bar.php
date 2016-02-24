
remove wordpress admin bar



put this code in the theme's functions.php:

add_filter('show_admin_bar', '__return_false');



references:
https://codex.wordpress.org/Function_Reference/show_admin_bar
https://davidwalsh.name/hide-admin-bar-wordpress