SELECT country.name AS country,
	   LifeExpectancy,
       city.Name AS city,
       city.Population
FROM city
LEFT JOIN country ON city.CountryCode = country.Code
LEFT JOIN countrylanguage ON countrylanguage.CountryCode = city.CountryCode
WHERE country.LifeExpectancy < 40
	GROUP BY city.Name
	ORDER BY city.Population DESC
	LIMIT 100;