SELECT country.country, count(customer.address_id) AS total_number_of_customer 
FROM customer 
JOIN address USING (address_id)
JOIN city USING (city_id) 
JOIN country USING (country_id) 
WHERE address_id 
IN (SELECT address_id FROM customer GROUP BY address_id)
GROUP BY country;