SELECT DATE_FORMAT(payment.payment_date , "%M %Y") as month_and_year,
       sum(payment.amount) as total_rental_amount,
       count(customer.customer_id) as total_transactions,
       avg(payment.amount) as average_rental_amount
FROM customer 
left JOIN rental USING (customer_id)
left JOIN payment USING (customer_id) 
WHERE customer_id 
IN (SELECT customer_id FROM payment GROUP BY customer_id)
GROUP BY YEAR(payment.payment_date), Month(payment.payment_date);

