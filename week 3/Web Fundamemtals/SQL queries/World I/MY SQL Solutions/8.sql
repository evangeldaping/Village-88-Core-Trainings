SELECT country.name AS country,
	   countrylanguage.Language AS language,       
       IsOfficial,
       Percentage as percentage
FROM country
LEFT JOIN countrylanguage ON countrylanguage.CountryCode = country.Code
WHERE language = 'French'
	AND countrylanguage.Percentage < '50%'
	AND countrylanguage.IsOfficial = 'T';