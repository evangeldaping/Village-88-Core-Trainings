SELECT customer_id store_id, first_name, last_name, email as email_address, address_id, active, create_date, last_update
FROM customer 
WHERE store_id = 2;