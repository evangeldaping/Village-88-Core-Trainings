SELECT	continent, 
		COUNT(Name) AS country,
		SUM(population) AS total_population,
        AVG(LifeExpectancy) AS life_expectancy
FROM country
GROUP BY Continent
HAVING AVG(LifeExpectancy) < 71;