SELECT 	(sites.domain_name) AS website,
		COUNT(leads.leads_id) AS number_of_leads,
		DATE_FORMAT(sites.created_datetime , "%M %d %Y") AS date_generated
FROM sites
LEFT JOIN leads ON sites.site_id = leads.site_id
WHERE leads.registered_datetime BETWEEN "2011-01-01%" AND "2011-02-15%"
GROUP BY sites.domain_name;