=== is-logged-in ===
License: MIT
License URI: https://github.com/Trifoia/is-logged-in/blob/master/LICENSE

Adds shortcodes that can be used to only show content when a user is logged in or logged out

== Description ==
Adds two shortcodes: `[logged_in]` and `[not_logged_in]`. Any content within these shortcodes will only be rendered when the user is logged in, or not logged in, respectively. Shortcodes within the content are recursively processed

Examples:
```
[logged_in]The user is logged in![/logged_in]
[not_logged_in]The user is not logged in![/not_logged_in]

[logged_in]The user is logged in, with an internal shortcode [example_shortcode] [/logged_in]
```
