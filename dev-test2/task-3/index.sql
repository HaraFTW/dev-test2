SELECT 
	name, 
	weight, 
	price, 
	ROUND(price / weight, 2) * 1000 AS price_per_kg
FROM products
ORDER BY 
	price_per_kg, 
	name