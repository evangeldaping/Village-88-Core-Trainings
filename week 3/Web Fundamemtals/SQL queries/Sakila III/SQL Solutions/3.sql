SELECT DATE_FORMAT(payment.payment_date , "%M %Y") AS month_and_year,
       SUM(payment.amount) AS total_rental_amount,
       COUNT(customer.customer_id) AS total_transactions,
       AVG(payment.amount) AS average_rental_amount
FROM customer 
LEFT JOIN rental USING (customer_id)
LEFT JOIN payment USING (customer_id) 
WHERE customer_id 
IN (SELECT customer_id FROM payment GROUP BY customer_id)
GROUP BY YEAR(payment.payment_date), Month(payment.payment_date);

