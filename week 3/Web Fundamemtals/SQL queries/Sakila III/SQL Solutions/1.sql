SELECT country.country, COUNT(customer.address_id) AS total_number_of_customer 
FROM customer 
LEFT JOIN address USING (address_id)
LEFT JOIN city USING (city_id) 
LEFT JOIN country USING (country_id) 
WHERE address_id 
IN (SELECT address_id FROM customer GROUP BY address_id)
GROUP BY country;