SELECT country.name AS country,
	   countrylanguage.Language AS language,
       IsOfficial
FROM country
LEFT JOIN countrylanguage ON countrylanguage.CountryCode = country.Code
WHERE countrylanguage.Language = 'Spanish'
	AND countrylanguage.IsOfficial = 'T';