SELECT country.name AS country,
       SUM(population) AS populations
FROM country
	GROUP BY country.Population
	ORDER BY country.Population DESC
	LIMIT 10;