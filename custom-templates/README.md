#Making Bootstrap UI Templates More Accessible
1. Calling custom-templates in template files such as front-page.php provide a modular way to include Bootstrap templates in the UI. These custom-templates make wp query calls to posts, pages, and categories in the WordPress admin (database). The Developer chooses what BS templates to include (the layout), the Client is able to control the content (without messing up the layout).

BS => WP_Query => WP admin/database

2. This requires specific posts, pages, and categories to make this work, obviously. Categories are pre-populated from inc/create-categories.php called by functions.php.

3. Pre-populate posts and pages with the WP-CLI as needed. In terminal type:
$ for ((n=0;n<3;n++)); do wp post create --post_title='margot' --post_category=2; done
to control the count, title, and category wanted. If a virgin installation,the category ids are in the order created in create-categories.php, starting with 2 (I think).

This is just going to have to do until I can get create-page.php up and running.
