SELECT	continent, 
		COUNT(city.Name) AS total_cities,
		AVG(city.Population) AS average_cities_population
FROM country
LEFT JOIN city ON city.CountryCode = country.Code 
GROUP BY Continent
HAVING AVG(city.Population);