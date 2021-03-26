SELECT country.continent, SUM(population) AS total_population
FROM country
GROUP BY Continent
HAVING SUM(population) > 500000000;