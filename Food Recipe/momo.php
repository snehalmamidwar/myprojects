<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Dumplings</title>
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
    <h1>Dumplings</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Thukpa is essentially a dish of Darjeeling but finds its roots in the Tibetan cuisine. A hot-noodle soup, Thukpa comprises of many veggies, some customary tinge of spices, and Hakka noodles. It is one of the most admired dishes within the town and is available at almost all the restaurants and roadside stalls.Arunachal Pradesh, located in northeastern India, has a rich culinary tradition. One popular dish you might be referring to is "Thukpa" with dumplings. Here's a recipe for Thukpa with vegetarian dumplings, known as "Momos"</p>

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
  <div class="img"><img src="populardishes/momo.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Dumplings:</p></div>
    <ul>
      <li>  Ingredients for Dumpling Filling:
1 cup finely chopped cabbage
1/2 cup grated carrot
1/2 cup finely chopped mushrooms
1/2 cup finely chopped spring onions
1/4 cup finely chopped green beans
2 cloves garlic, minced
1 tablespoon soy sauce
1 tablespoon vegetable oil
Salt and pepper to taste
Ingredients for Dumpling Dough:
2 cups all-purpose flour
Water (as needed)
A pinch of salt
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

    For Dumpling Filling:
Heat vegetable oil in a pan over medium heat.
Add minced garlic and sauté until aromatic.
Add chopped spring onions and sauté for a minute.
Add all the chopped vegetables and stir-fry until they are cooked but still slightly crunchy.
Add soy sauce, salt, and pepper to taste. Mix well and cook for another minute.
Allow the filling to cool completely.
For Dumpling Dough:
In a large bowl, mix the all-purpose flour and a pinch of salt.
Gradually add water and knead the flour to form a smooth, elastic dough. The consistency should be similar to that of bread dough.
Cover the dough with a damp cloth and let it rest for about 30 minutes.
Assembling and Cooking Dumplings:
Divide the dough into small, equal-sized portions.
Roll each portion into a thin, round disc (about 3 inches in diameter).
Place a spoonful of the vegetable filling in the center of the disc.
Fold the edges of the disc to form a half-moon shape and seal the edges by pinching them together.
Continue this process until all the dumplings are prepared.
Cooking Dumplings:
Steam the dumplings in a steamer for about 15-20 minutes or until the dumplings are cooked through.






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
    Ingredients for Dumpling Filling:
1 cup finely chopped cabbage
1/2 cup grated carrot
1/2 cup finely chopped mushrooms
1/2 cup finely chopped spring onions
1/4 cup finely chopped green beans
2 cloves garlic, minced
1 tablespoon soy sauce
1 tablespoon vegetable oil
Salt and pepper to taste
Ingredients for Dumpling Dough:
2 cups all-purpose flour
Water (as needed)
A pinch of salt
Instructions:
For Dumpling Filling:
Heat vegetable oil in a pan over medium heat.
Add minced garlic and sauté until aromatic.
Add chopped spring onions and sauté for a minute.
Add all the chopped vegetables and stir-fry until they are cooked but still slightly crunchy.
Add soy sauce, salt, and pepper to taste. Mix well and cook for another minute.
Allow the filling to cool completely.
For Dumpling Dough:
In a large bowl, mix the all-purpose flour and a pinch of salt.
Gradually add water and knead the flour to form a smooth, elastic dough. The consistency should be similar to that of bread dough.
Cover the dough with a damp cloth and let it rest for about 30 minutes.
Assembling and Cooking Dumplings:
Divide the dough into small, equal-sized portions.
Roll each portion into a thin, round disc (about 3 inches in diameter).
Place a spoonful of the vegetable filling in the center of the disc.
Fold the edges of the disc to form a half-moon shape and seal the edges by pinching them together.
Continue this process until all the dumplings are prepared.
Cooking Dumplings:
Steam the dumplings in a steamer for about 15-20 minutes or until the dumplings are cooked through.
For Thukpa:
Prepare the vegetable broth and noodles as mentioned in the previous "Vegetarian Thukpa" recipe.
Once the dumplings are steamed, add them to the hot thukpa broth just before serving.
Garnish the Thukpa with fresh cilantro and green onions. Serve hot and enjoy your delicious Arunachali-style Thukpa with vegetable dumplings!








`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Dumplings.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
