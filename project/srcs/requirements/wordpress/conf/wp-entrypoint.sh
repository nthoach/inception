#!bin/sh

if ! php82 /usr/local/bin/wp core is-installed --allow-root; then
  echo "Installing WordPress..."

  php82 /usr/local/bin/wp core install \
    --url="${WP_SITE_URL}" \
    --title="${WP_SITE_TITLE}" \
    --admin_user="${WP_ADMIN}" \
    --admin_password="${WP_ADMIN_PWD}" \
    --admin_email="${WP_ADMIN_EMAIL}" \
    --allow-root

  echo "Setting permalink structure..."
  php82 /usr/local/bin/wp rewrite structure '/%postname%/' --allow-root
  php82 /usr/local/bin/wp rewrite flush --allow-root

  echo "Activating theme: ${WP_THEME}..."
  php82 /usr/local/bin/wp theme install "${WP_THEME}" --activate --allow-root

  echo "Installing recommended plugin: Jetpack..."
  php82 /usr/local/bin/wp plugin install jetpack --activate --allow-root

  echo "WordPress installation completed!"
else
  echo "WordPress is already installed."
fi

# Start PHP-FPM after setup
exec /usr/sbin/php-fpm82 -F