SELECT country.name AS country,
	   countrylanguage.Language AS language,       
       IsOfficial
FROM country 
LEFT JOIN countrylanguage ON countrylanguage.CountryCode = country.Code
WHERE countrylanguage.IsOfficial = TRUE 
GROUP BY country.Name
ORDER BY countrylanguage.Language ASC;
