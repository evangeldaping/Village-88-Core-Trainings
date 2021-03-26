SELECT 	(sites.domain_name) AS website,
		(clients.client_id) AS client_id
FROM sites
LEFT JOIN clients ON sites.client_id = clients.client_id
WHERE clients.client_id = 10;