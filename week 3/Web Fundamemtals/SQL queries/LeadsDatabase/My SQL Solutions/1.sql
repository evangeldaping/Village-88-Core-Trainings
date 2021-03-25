SELECT DATE_FORMAT(billing.charged_datetime , "%M") AS month,
       SUM(billing.amount) AS total_revenue
FROM billing 
WHERE billing.charged_datetime >= '2012/03/01'
AND billing.charged_datetime < '2012/04/01';