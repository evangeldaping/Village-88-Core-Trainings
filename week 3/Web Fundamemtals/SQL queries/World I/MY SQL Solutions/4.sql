SELECT country.name AS country,
	   countrylanguage.Language AS language
FROM country
LEFT JOIN countrylanguage ON countrylanguage.CountryCode = country.Code
WHERE countrylanguage.Language = 'Spanish';