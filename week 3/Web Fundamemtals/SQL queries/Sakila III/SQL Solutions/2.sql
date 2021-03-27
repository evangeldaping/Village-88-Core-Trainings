Select country.country, city, COUNT(customer.address_id) AS total_customer 
from country
LEFT JOIN city ON country.country_id = city.country_id
LEFT JOIN address ON city.city_id = address.city_id
LEFT JOIN customer ON country.country_id = customer.address_id
GROUP BY city.city
ORDER BY country.country, city.city ASC;