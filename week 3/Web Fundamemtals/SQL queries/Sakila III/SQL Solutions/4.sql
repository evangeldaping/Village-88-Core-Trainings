SELECT DATE_FORMAT(payment.payment_date , "%I %p") AS hour_of_the_day,
       SUM(payment.amount) AS total_payments_received
FROM customer 
LEFT JOIN rental ON rental.customer_id = customer.customer_id
LEFT JOIN payment ON payment.rental_id = rental.rental_id 
GROUP BY hour(payment.payment_date)
ORDER BY total_payments_received DESC
LIMIT 10;