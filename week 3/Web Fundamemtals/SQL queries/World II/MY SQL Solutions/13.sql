SELECT countrylanguage.Language,
       SUM(city.Population + country.Population) AS total_population
FROM countrylanguage 
LEFT JOIN country ON countrylanguage.CountryCode = country.Code
LEFT JOIN city ON city.CountryCode = country.Code
	GROUP BY countrylanguage.Language;