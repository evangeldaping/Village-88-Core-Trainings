SELECT country.continent,
	   COUNT(country.name) AS total_countries,
       lifeexpectancy
FROM country
WHERE country.LifeExpectancy BETWEEN '60%' AND '70%'
	GROUP BY country.continent;