<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>rath</title>
  <link rel="stylesheet" href="puranpoli.css">
</head>
<body>
<!-- Puran Poli -->
<div id="google_translate_element"></div>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    function googleTranslateElementInit()
    {
        new google.translate.TranslateElement(
            {pageLanguage:'en'},
            'google_translate_element'

        );
    }
</script>
<div class="infocontainer">
  <div class="devinfo">
    <h1>Langar Thali</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      A Langar Thali typically refers to a meal served in the langar, which is a community kitchen in Sikh temples (Gurdwaras). Langar meals are simple, vegetarian, and served to everyone, regardless of their background or religion. The meals usually include a variety of dishes, and the recipes can vary based on regional preferences. Here's a basic Langar Thali recipe that you might find in a Gurdwara</p></div>    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/langar.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For langar thali:</p></div>
    <ul>
      <li>   
      1. Dal Tadka:
Ingredients:
1 cup yellow lentils (toor dal)
1 onion, finely chopped
1 tomato, chopped
1 tsp ginger-garlic paste
1/2 tsp turmeric powder
1 tsp cumin seeds
1 tsp mustard seeds
A pinch of asafoetida (hing)
2 green chilies, chopped
Fresh coriander leaves for garnish
Salt to taste
Ghee for tadka (tempering)

<br><br>
2. Rice:
Ingredients:
1 cup basmati rice
2 cups water
Salt to taste
Ghee for flavor (optional)
<br><br>
3. Roti or Naan:
Ingredients:
2 cups whole wheat flour
Water for kneading
Ghee or butter for brushing (optional)
<br><br>
4. Vegetable Sabji:
Ingredients:
Assorted vegetables (potatoes, carrots, peas, beans, etc.)
1 onion, finely chopped
1 tomato, chopped
1 tsp ginger-garlic paste
1/2 tsp turmeric powder
1 tsp cumin seeds
1 tsp coriander powder
1 tsp garam masala
Salt to taste
Fresh coriander leaves for garnish

<br><br>5. Kheer:
Ingredients:
1 cup rice
4 cups milk
1 cup sugar
A handful of raisins and chopped nuts
Cardamom powder for flavor
<br><br>
6. Salad:
Ingredients:
Sliced cucumbers, tomatoes, onions
Lemon wedges
Fresh coriander leaves for garnish

</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
    Langar Thali Menu:
Instructions:
Prepare Dal Tadka:

Cook the toor dal until soft. In a separate pan, heat ghee, add cumin seeds, mustard seeds, hing, chopped onions, ginger-garlic paste, green chilies, and tomatoes. Cook until the tomatoes are soft. Add turmeric powder and salt. Mix this tempering into the cooked dal. Garnish with fresh coriander leaves.

<br><br>Cook Rice:

Wash the basmati rice and cook it with water, salt, and ghee until fluffy.
<br><br>Make Roti or Naan:

Knead the whole wheat flour with water to make a soft dough. Roll out small portions into flatbreads (roti) or leavened bread (naan). Cook them on a hot griddle or tandoor.
<br><br>Prepare Vegetable Sabji:

In a pan, heat oil. Add cumin seeds, chopped onions, ginger-garlic paste, and tomatoes. Add the vegetables and spices. Cook until the vegetables are tender. Garnish with fresh coriander leaves.
<br><br>Make Kheer:

Cook rice in milk until it becomes creamy. Add sugar, cardamom powder, raisins, and chopped nuts. Cook until the kheer thickens.
<br>Assemble the Langar Thali:

Serve dal tadka, rice, roti or naan, vegetable sabji, kheer, and salad on a plate. Optionally, serve with a dollop of ghee on top.
Langar Thali emphasizes simplicity, humility, and equality in sharing a meal. Adjust the recipes based on personal preferences and the availability of ingredients.







</p></div></div>
</div>
 <!-- Add a comment section -->
 <div class="comments">
  <h2>Comments</h2>
  <div class="comment-form">
    <input type="text" id="name" placeholder="Your Name">
    <textarea id="comment" placeholder="Your Comment"></textarea>
    <button onclick="submitComment()">Submit</button>
  </div>
  <div class="comment-list">
    <!-- Display comments here -->
  </div>
</div>
</div>

<script>
  // Function to handle comment submission
  function submitComment() {
    const nameInput = document.getElementById("name");
    const commentInput = document.getElementById("comment");
    const commentList = document.querySelector(".comment-list");

    const name = nameInput.value;
    const comment = commentInput.value;

    if (name && comment) {
      // Create a new comment element
      const commentElement = document.createElement("div");
      commentElement.classList.add("comment");
      commentElement.innerHTML = `<strong>${name}:</strong> ${comment}`;

      // Append the comment to the comment list
      commentList.appendChild(commentElement);

      // Clear the input fields
      nameInput.value = "";
      commentInput.value = "";
    } else {
      alert("Please enter your name and comment.");
    }
  }

  let likeCount = 0;
  let dislikeCount = 0;
  let liked = false;
  let disliked = false;

  function updateCounts() {
    document.getElementById("like-count").textContent = likeCount;
    document.getElementById("dislike-count").textContent = dislikeCount;
  }

  function likeRecipe() {
    if (!liked) {
      likeCount++;
      updateCounts();
      liked = true;
      // Disable the "Dislike" button
      document.querySelector(".dislike-button").disabled = true;
      // You can add your logic for handling the like action here
      alert("You liked the recipe!");
    }
  }

  function dislikeRecipe() {
    if (!disliked) {
      dislikeCount++;
      updateCounts();
      disliked = true;
      // Disable the "Like" button
      document.querySelector(".like-button").disabled = true;
      // You can add your logic for handling the dislike action here
      alert("You disliked the recipe!");
    }
  }

  function saveRecipe() {
    // Create a text content for the recipe
    const recipeText = `
    Langar Thali Menu:
1. Dal Tadka:
Ingredients:
1 cup yellow lentils (toor dal)
1 onion, finely chopped
1 tomato, chopped
1 tsp ginger-garlic paste
1/2 tsp turmeric powder
1 tsp cumin seeds
1 tsp mustard seeds
A pinch of asafoetida (hing)
2 green chilies, chopped
Fresh coriander leaves for garnish
Salt to taste
Ghee for tadka (tempering)
2. Rice:
Ingredients:
1 cup basmati rice
2 cups water
Salt to taste
Ghee for flavor (optional)
3. Roti or Naan:
Ingredients:
2 cups whole wheat flour
Water for kneading
Ghee or butter for brushing (optional)
4. Vegetable Sabji:
Ingredients:
Assorted vegetables (potatoes, carrots, peas, beans, etc.)
1 onion, finely chopped
1 tomato, chopped
1 tsp ginger-garlic paste
1/2 tsp turmeric powder
1 tsp cumin seeds
1 tsp coriander powder
1 tsp garam masala
Salt to taste
Fresh coriander leaves for garnish
5. Kheer:
Ingredients:
1 cup rice
4 cups milk
1 cup sugar
A handful of raisins and chopped nuts
Cardamom powder for flavor
6. Salad:
Ingredients:
Sliced cucumbers, tomatoes, onions
Lemon wedges
Fresh coriander leaves for garnish
Instructions:
Prepare Dal Tadka:

Cook the toor dal until soft. In a separate pan, heat ghee, add cumin seeds, mustard seeds, hing, chopped onions, ginger-garlic paste, green chilies, and tomatoes. Cook until the tomatoes are soft. Add turmeric powder and salt. Mix this tempering into the cooked dal. Garnish with fresh coriander leaves.
Cook Rice:

Wash the basmati rice and cook it with water, salt, and ghee until fluffy.
Make Roti or Naan:

Knead the whole wheat flour with water to make a soft dough. Roll out small portions into flatbreads (roti) or leavened bread (naan). Cook them on a hot griddle or tandoor.
Prepare Vegetable Sabji:

In a pan, heat oil. Add cumin seeds, chopped onions, ginger-garlic paste, and tomatoes. Add the vegetables and spices. Cook until the vegetables are tender. Garnish with fresh coriander leaves.
Make Kheer:

Cook rice in milk until it becomes creamy. Add sugar, cardamom powder, raisins, and chopped nuts. Cook until the kheer thickens.
Assemble the Langar Thali:

Serve dal tadka, rice, roti or naan, vegetable sabji, kheer, and salad on a plate. Optionally, serve with a dollop of ghee on top.
Langar Thali emphasizes simplicity, humility, and equality in sharing a meal. Adjust the recipes based on personal preferences and the availability of ingredients.



`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Langar_Thali.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
