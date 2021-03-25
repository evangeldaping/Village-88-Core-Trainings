SELECT (clients.client_id) AS client_id,
       SUM(billing.amount) AS total_revenue
FROM billing 
LEFT JOIN clients USING (client_id)
WHERE client_id 
IN (SELECT client_id FROM clients
	WHERE client_id = 2);