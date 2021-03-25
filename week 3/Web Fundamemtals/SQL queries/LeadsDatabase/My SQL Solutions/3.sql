SELECT 	(sites.domain_name) AS website,
		(clients.client_id) AS client_id
FROM billing 
LEFT JOIN clients USING (client_id)
LEFT JOIN sites USING (client_id)
WHERE site_id 
IN (SELECT site_id FROM sites
	WHERE client_id = 10
    GROUP BY domain_name)
GROUP BY domain_name;