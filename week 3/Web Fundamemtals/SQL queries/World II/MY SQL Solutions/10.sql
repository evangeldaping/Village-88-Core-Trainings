SELECT	country.Name AS country,
		countrylanguage.Language AS language,
        COUNT(country.Name) AS number_of_countries
FROM countrylanguage
LEFT JOIN country ON country.Code = countrylanguage.CountryCode
GROUP BY language;
