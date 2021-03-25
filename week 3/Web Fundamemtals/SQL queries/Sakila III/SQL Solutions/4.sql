SELECT DATE_FORMAT(payment.payment_date , "%I %p") AS hour_of_the_day,
       SUM(payment.amount) AS total_payments_received
FROM customer 
LEFT JOIN rental USING (customer_id)
LEFT JOIN payment USING (customer_id) 
WHERE customer_id 
IN (SELECT customer_id FROM payment GROUP BY customer_id)
GROUP BY hour(payment.payment_date)
ORDER BY payment.amount DESC
LIMIT 10;