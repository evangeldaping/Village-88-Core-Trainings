SELECT countrylanguage.Language,
	   COUNT(country.name) AS total_countries,
       countrylanguage.IsOfficial
FROM countrylanguage
LEFT JOIN country ON countrylanguage.CountryCode = country.Code
WHERE countrylanguage.IsOfficial = TRUE
	GROUP BY Language;