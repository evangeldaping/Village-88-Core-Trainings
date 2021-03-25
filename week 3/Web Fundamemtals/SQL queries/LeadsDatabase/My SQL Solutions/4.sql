SELECT 	(clients.client_id) AS client_id,
		count(sites.domain_name) AS number_of_websites,
		DATE_FORMAT(sites.created_datetime , "%M") AS month_created,
        DATE_FORMAT(sites.created_datetime , "%Y") AS year_created
FROM sites 
LEFT JOIN clients USING (client_id)
WHERE site_id 
IN (SELECT site_id FROM sites
	WHERE client_id in (1,20))
GROUP BY MONTH(sites.created_datetime) , YEAR(sites.created_datetime)
ORDER BY MONTH(sites.created_datetime) ASC;