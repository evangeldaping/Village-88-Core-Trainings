SELECT country.continent,
	   COUNT(country.name) AS total_countries,
       lifeexpectancy
FROM country
WHERE country.LifeExpectancy > '70%'
	GROUP BY country.continent;