SELECT CONCAT(first_name," ",last_name) AS customer_name, address, city, country
FROM customer
LEFT JOIN address ON customer.address_id = address.address_id
LEFT JOIN city ON address.city_id = city.city_id
LEFT JOIN country ON city.country_id = country.country_id
WHERE city = 'Baku';