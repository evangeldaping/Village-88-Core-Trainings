-- SELECT CONCAT(clients.first_name, ' ', clients.last_name) AS client_name,
-- 	   sites.domain_name AS website,
-- 	   COUNT(leads.leads_id) AS number_of_leads,
--        DATE_FORMAT(leads.registered_datetime , "%M") AS date_generated
-- FROM clients
-- LEFT JOIN sites ON sites.client_id = clients.client_id
-- LEFT JOIN leads ON sites.site_id = leads.site_id
-- WHERE leads.registered_datetime BETWEEN "2011-01-01%" AND "2011-12-31%"
-- GROUP BY sites.domain_name
-- ORDER BY clients.client_id;

SELECT CONCAT(clients.first_name, ' ', clients.last_name) AS client_name, 
	   sites.domain_name AS website,
       COUNT(leads.leads_id) AS number_of_leads
FROM clients
LEFT JOIN sites ON sites.client_id = clients.client_id
LEFT JOIN leads ON sites.site_id = leads.site_id
GROUP BY sites.domain_name
ORDER BY clients.client_id;