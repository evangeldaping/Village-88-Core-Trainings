SELECT DATE_FORMAT(payment.payment_date , "%I %p") as hour_of_the_day,
       sum(payment.amount) as total_payments_received
FROM customer 
left JOIN rental USING (customer_id)
left JOIN payment USING (customer_id) 
WHERE customer_id 
IN (SELECT customer_id FROM payment GROUP BY customer_id)
GROUP BY hour(payment.payment_date)
ORDER BY payment.amount DESC
limit 10;