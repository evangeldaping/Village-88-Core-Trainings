SELECT	country.Name AS country,
		COUNT(city.Name) AS number_of_cities
FROM city
LEFT JOIN country ON country.Code = city.CountryCode
GROUP BY country.name;
