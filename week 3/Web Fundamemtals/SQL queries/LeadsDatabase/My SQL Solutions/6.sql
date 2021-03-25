SELECT CONCAT(clients.first_name, ' ', clients.last_name) AS client_name,
	   COUNT(leads.leads_id) AS number_of_leads
FROM clients
LEFT JOIN sites ON sites.client_id = clients.client_id
LEFT JOIN leads ON sites.site_id = leads.site_id
WHERE leads.registered_datetime BETWEEN "2011-01-01%" AND "2011-12-31%"
GROUP BY clients.first_name;