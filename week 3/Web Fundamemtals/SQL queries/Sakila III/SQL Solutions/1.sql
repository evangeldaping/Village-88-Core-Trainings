SELECT country.country, COUNT(customer.address_id) AS total_number_of_customer 
FROM customer
LEFT JOIN address ON address.address_id = customer.address_id
LEFT JOIN city ON address.city_id = city.city_id 
LEFT JOIN country ON city.country_id = country.country_id
GROUP BY country.country;