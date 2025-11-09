# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy all project files into the container
COPY . /var/www/html/

# Give permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
