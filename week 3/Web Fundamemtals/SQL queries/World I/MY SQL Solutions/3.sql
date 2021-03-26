SELECT Countrycode AS country_code,
	   country.name AS country_name, 
       Continent AS continent,
	   country.population AS country_population, 
       city.name as city
FROM country
LEFT JOIN city ON city.CountryCode = country.Code
WHERE country.Population > 100000000;