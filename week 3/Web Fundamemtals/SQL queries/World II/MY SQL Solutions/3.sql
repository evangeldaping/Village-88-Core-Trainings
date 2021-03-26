SELECT country.name AS country,
       lifeexpectancy
FROM country
WHERE country.LifeExpectancy > '75%'
	GROUP BY country.name;