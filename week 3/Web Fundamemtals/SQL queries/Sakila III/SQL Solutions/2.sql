SELECT country.country, city.city, COUNT(customer.address_id) AS total_customer 
FROM customer 
LEFT JOIN address USING (address_id)
LEFT JOIN city USING (city_id) 
LEFT JOIN country USING (country_id) 
WHERE address_id 
IN (SELECT address_id FROM customer GROUP BY address_id)
GROUP BY city;