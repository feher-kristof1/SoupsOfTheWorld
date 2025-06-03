CREATE DATABASE IF NOT EXISTS soups;

USE soups;

CREATE TABLE IF NOT EXISTS sups (
    name VARCHAR(100) NOT NULL,
    ingredients TEXT NOT NULL,
    preptime INT,
    cookingtime INT,
    servings INT,
    instructions TEXT
);

SET NAMES 'utf8';

INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Tomato Basil Soup', 'Tomatoes, Basil, Garlic, Onion, Olive Oil, Vegetable Broth, Salt, Pepper', 10, 30, 4, 'Sauté onions and garlic, add tomatoes and broth, simmer, blend, stir in basil.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Chicken Noodle Soup', 'Chicken, Carrots, Celery, Onion, Noodles, Chicken Broth, Salt, Pepper', 15, 40, 6, 'Cook chicken and vegetables, add broth and noodles, simmer until noodles are tender.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Cream of Mushroom', 'Mushrooms, Onion, Garlic, Butter, Flour, Cream, Chicken Broth, Thyme, Salt, Pepper', 10, 25, 4, 'Sauté mushrooms and onions, add flour, stir in broth and cream, simmer until thick.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Minestrone', 'Zucchini, Carrots, Beans, Pasta, Tomatoes, Onion, Garlic, Vegetable Broth, Italian Herbs', 20, 35, 6, 'Sauté vegetables, add broth and pasta, simmer until vegetables and pasta are tender.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Lentil Soup', 'Lentils, Carrots, Celery, Onion, Garlic, Cumin, Turmeric, Vegetable Broth, Salt, Pepper', 15, 45, 5, 'Sauté vegetables and spices, add lentils and broth, simmer until lentils are soft.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('French Onion Soup', 'Onions, Butter, Beef Broth, Thyme, Bay Leaf, Gruyère Cheese, Baguette', 20, 60, 4, 'Caramelize onions, add broth and herbs, simmer, serve with toasted baguette and melted cheese.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Butternut Squash Soup', 'Butternut Squash, Onion, Garlic, Carrot, Vegetable Broth, Cream, Nutmeg, Salt, Pepper', 15, 30, 4, 'Sauté vegetables, add broth, simmer, blend, stir in cream and seasonings.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Clam Chowder', 'Clams, Potatoes, Onion, Celery, Bacon, Cream, Butter, Flour, Salt, Pepper', 20, 35, 6, 'Cook bacon and vegetables, stir in flour, add broth and cream, simmer until thick.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Broccoli Cheddar Soup', 'Broccoli, Carrots, Onion, Garlic, Butter, Flour, Milk, Cheddar Cheese, Salt, Pepper', 15, 25, 4, 'Sauté vegetables, make roux, add milk, cheese, and broccoli, simmer until thick.');
INSERT INTO soups.sups(name, ingredients, preptime, cookingtime, servings, instructions) VALUES
('Thai Coconut Soup', 'Chicken, Mushrooms, Lemongrass, Coconut Milk, Lime Juice, Chili, Fish Sauce, Cilantro', 10, 20, 4, 'Simmer lemongrass and broth, add chicken and vegetables, stir in coconut milk and seasonings.');