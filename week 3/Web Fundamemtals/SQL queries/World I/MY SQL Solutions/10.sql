SELECT country.name AS country, 
	   city.Name AS city,
	   countrylanguage.Language AS language,       
       IsOfficial
FROM city
LEFT JOIN countrylanguage ON countrylanguage.CountryCode =  city.CountryCode
LEFT JOIN country ON city.CountryCode = country.Code
WHERE countrylanguage.IsOfficial = TRUE
GROUP BY country.name
order by city.Population DESC
	LIMIT 100;