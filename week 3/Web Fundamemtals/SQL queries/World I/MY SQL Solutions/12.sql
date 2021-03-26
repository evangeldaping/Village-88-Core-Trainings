SELECT country.name AS country,	   
       city.Name AS city,
       LifeExpectancy
FROM city
LEFT JOIN country ON city.CountryCode = country.Code
LEFT JOIN countrylanguage ON countrylanguage.CountryCode = city.CountryCode
WHERE countrylanguage.Language = 'English'
	GROUP BY city
	ORDER BY LifeExpectancy DESC
	LIMIT 100;