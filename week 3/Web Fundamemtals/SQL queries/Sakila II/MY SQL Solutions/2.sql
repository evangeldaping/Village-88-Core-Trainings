SELECT CONCAT(first_name," ",last_name) AS customer_name, address
FROM customer
LEFT JOIN address ON customer.address_id = address.address_id;