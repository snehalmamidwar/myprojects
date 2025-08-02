<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Bodo</title>
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
    <h1>Bodo</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Bodo cuisine is diverse and reflects the cultural and culinary traditions of the Bodo people, an indigenous community in Assam, India. One popular Bodo dish is "Zou," which is a traditional Bodo rice pancake. Here's a simple recipe for making Bodo Zou</p>

    </div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/bodo.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Bodo:</p></div>
    <ul>
      <li>For the Batter:
2 cups rice flour
1 cup grated coconut
1 cup jaggery (grated or powdered)
1/2 teaspoon baking soda
Water (as needed for batter consistency)
A pinch of salt
For Frying:
Mustard oil or any cooking oil of your choice</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

    1. Prepare the Batter:

In a large mixing bowl, combine the rice flour, grated coconut, jaggery, baking soda, and a pinch of salt.
Gradually add water and mix well to form a smooth, lump-free batter. The consistency should be like a pancake batter.
2. Heat the Griddle:

Heat a griddle or a non-stick pan on medium heat.
3. Make the Zou:

Grease the griddle with a little oil.
Pour a ladleful of the batter onto the griddle and spread it evenly to form a thin pancake.
4. Cook:

Cook the Zou on medium heat until bubbles form on the surface and the edges start to lift.
5. Flip and Cook:

Flip the Zou and cook the other side until it turns golden brown.
6. Repeat:

Repeat the process with the remaining batter to make more Zou.
7. Serve:

Serve the Bodo Zou warm. It can be enjoyed as is or with a side of yogurt or chutney.
Bodo Zou is a sweet pancake with the natural sweetness coming from jaggery and the rich flavor from grated coconut. It's a traditional dish often made during festivals and special occasions in the Bodo community.

Please note that this is a basic recipe, and variations may exist within Bodo households. Additionally, Bodo cuisine includes a variety of other dishes, and the choice of ingredients may vary based on personal preferences and regional differences. 
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
    1. Prepare the Batter:

In a large mixing bowl, combine the rice flour, grated coconut, jaggery, baking soda, and a pinch of salt.
Gradually add water and mix well to form a smooth, lump-free batter. The consistency should be like a pancake batter.
2. Heat the Griddle:

Heat a griddle or a non-stick pan on medium heat.
3. Make the Zou:

Grease the griddle with a little oil.
Pour a ladleful of the batter onto the griddle and spread it evenly to form a thin pancake.
4. Cook:

Cook the Zou on medium heat until bubbles form on the surface and the edges start to lift.
5. Flip and Cook:

Flip the Zou and cook the other side until it turns golden brown.
6. Repeat:

Repeat the process with the remaining batter to make more Zou.
7. Serve:

Serve the Bodo Zou warm. It can be enjoyed as is or with a side of yogurt or chutney.
Bodo Zou is a sweet pancake with the natural sweetness coming from jaggery and the rich flavor from grated coconut. It's a traditional dish often made during festivals and special occasions in the Bodo community.

Please note that this is a basic recipe, and variations may exist within Bodo households. Additionally, Bodo cuisine includes a variety of other dishes, and the choice of ingredients may vary based on personal preferences and regional differences.`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'bodo.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
