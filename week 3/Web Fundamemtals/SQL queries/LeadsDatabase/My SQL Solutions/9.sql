SELECT CONCAT(clients.first_name, ' ', clients.last_name) AS client_name,
	   SUM(billing.amount) AS Total_Revenue,
       DATE_FORMAT(billing.charged_datetime, "%M") AS month_charge,
       DATE_FORMAT(billing.charged_datetime, "%Y") AS year_charge
FROM clients
LEFT JOIN billing 
	 ON billing.client_id = clients.client_id
GROUP BY month_charge, 
		 clients.client_id
ORDER BY clients.client_id,
		 billing.charged_datetime;