SELECT DATE_FORMAT(payment.payment_date , "%M %Y") AS month_and_year,
       SUM(payment.amount) AS total_rental_amount,
       COUNT(customer.customer_id) AS total_transactions,
       AVG(payment.amount) AS average_rental_amount
FROM customer 
LEFT JOIN rental ON rental.rental_id = customer.customer_id
LEFT JOIN payment ON payment.customer_id = customer.customer_id
GROUP BY YEAR(payment.payment_date), Month(payment.payment_date);

