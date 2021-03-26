-- SELECT 	(clients.client_id) AS client_id,
-- 		count(sites.domain_name) AS number_of_websites,
-- 		DATE_FORMAT(sites.created_datetime , "%M") AS month_created,
--         DATE_FORMAT(sites.created_datetime , "%Y") AS year_created
-- FROM sites 
-- LEFT JOIN clients ON sites.client_id = clients.client_id
-- WHERE clients.client_id = 1
-- GROUP BY month_created, year_created
-- ORDER BY year_created;

SELECT 	(clients.client_id) AS client_id,
		count(sites.domain_name) AS number_of_websites,
		DATE_FORMAT(sites.created_datetime , "%M") AS month_created,
        DATE_FORMAT(sites.created_datetime , "%Y") AS year_created
FROM sites
LEFT JOIN clients ON sites.client_id = clients.client_id
WHERE clients.client_id = 20
GROUP BY month_created, year_created
ORDER BY year_created;

