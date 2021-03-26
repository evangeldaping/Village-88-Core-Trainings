SELECT CONCAT(first_name," ",last_name) AS customer_name, country, CHAR_LENGTH(country) AS country_name_length
FROM customer
LEFT JOIN address ON customer.address_id = address.address_id
LEFT JOIN city ON address.city_id = city.city_id
LEFT JOIN country ON city.country_id = country.country_id
WHERE CHAR_LENGTH(country) < 5
ORDER BY CHAR_LENGTH(country) DESC;