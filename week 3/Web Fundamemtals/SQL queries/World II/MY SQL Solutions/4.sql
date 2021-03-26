SELECT country.name AS country,
       lifeexpectancy
FROM country
WHERE country.LifeExpectancy < '40%'
	GROUP BY country.name;