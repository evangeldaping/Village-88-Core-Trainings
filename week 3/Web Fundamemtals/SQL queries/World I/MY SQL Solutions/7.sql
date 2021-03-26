SELECT country.name AS country,
	   countrylanguage.Language AS language,
       Percentage as percentage,
       IsOfficial
FROM country
LEFT JOIN countrylanguage ON countrylanguage.CountryCode = country.Code
WHERE language = 'Arabic'
	AND countrylanguage.Percentage > '30%'
	AND countrylanguage.IsOfficial = 'F';