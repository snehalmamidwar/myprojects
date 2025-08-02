<?php 
  session_start(); 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Pav Bhaji Recipe</title>
  <link rel="stylesheet" href="populardishes/pavbhaji.css">
</head>
<body>
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
<!-- Pav Bhaji -->
<div class="infocontainer">
  <div class="devinfo">
    <h1>Pav Bhaji</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>Pav Bhaji is a popular Indian street food dish that consists of a spicy vegetable curry (Bhaji) served with soft bread rolls (Pav). It's a flavorful and satisfying dish enjoyed by people of all ages.</p>
    </div>    
    <div class="serve-time"><p><b>Servings:</b> 2 | <b>Timing:</b> 30 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/pavbhaji.jpg" alt="pavbhaji"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Pav Bhaji:</p></div>
    <ul>
      <li>2 cups mixed vegetables (potatoes, peas, carrots, capsicum, etc.)</li>
      <li>4-5 Pav (bread rolls)</li>
      <li>1 large onion, finely chopped</li>
      <li>2 tomatoes, chopped</li>
      <li>2 cloves garlic, minced</li>
      <li>1-inch piece of ginger, grated</li>
      <li>2-3 green chilies, finely chopped</li>
      <li>1/2 cup butter</li>
      <li>1 tsp pav bhaji masala</li>
      <li>1/2 tsp red chili powder</li>
      <li>Salt to taste</li>
      <li>Fresh coriander leaves, chopped (for garnish)</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>Step 1:</p></div>
    <p>Boil and mash the mixed vegetables. Set them aside.</p>
    
    <div><p>Step 2:</p></div>
    <p>Heat some butter in a pan. Add chopped onions and sauté until they turn translucent.</p>
    
    <div><p>Step 3:</p></div>
    <p>Add minced garlic, grated ginger, and chopped green chilies. Sauté for a minute.</p>
    
    <div><p>Step 4:</p></div>
    <p>Add chopped tomatoes, pav bhaji masala, red chili powder, and salt. Cook until the tomatoes become soft and the mixture thickens.</p>
    
    <div><p>Step 5:</p></div>
    <p>Add the mashed vegetables and mix well. Cook for a few minutes, mashing the vegetables further.</p>
    
    <div><p>Step 6:</p></div>
    <p>Toast the Pav with butter on a griddle until they are golden brown.</p>
    
    <div><p>Step 7:</p></div>
    <p>Garnish the Pav Bhaji with chopped coriander leaves and serve hot with the toasted Pav.</p>
  </div>
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
        Ingredients for Pav Bhaji:
        
        - 2 cups mixed vegetables (potatoes, peas, carrots, capsicum, etc.)
        - 4-5 Pav (bread rolls)
        - 1 large onion, finely chopped
        - 2 tomatoes, chopped
        - 2 cloves garlic, minced
        - 1-inch piece of ginger, grated
        - 2-3 green chilies, finely chopped
        - 1/2 cup butter
        - 1 tsp pav bhaji masala
        - 1/2 tsp red chili powder
        - Salt to taste
        - Fresh coriander leaves, chopped (for garnish)
        
        Method:
        
        Step 1:
        Boil and mash the mixed vegetables. Set them aside.
        
        Step 2:
        Heat some butter in a pan. Add chopped onions and sauté until they turn translucent.
        
        Step 3:
        Add minced garlic, grated ginger, and chopped green chilies. Sauté for a minute.
        
        Step 4:
        Add chopped tomatoes, pav bhaji masala, red chili powder, and salt. Cook until the tomatoes become soft and the mixture thickens.
        
        Step 5:
        Add the mashed vegetables and mix well. Cook for a few minutes, mashing the vegetables further.
        
        Step 6:
        Toast the Pav with butter on a griddle until they are golden brown.
        
        Step 7:
        Garnish the Pav Bhaji with chopped coriander leaves and serve hot with the toasted Pav.
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'pav_bhaji_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
