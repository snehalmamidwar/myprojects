<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Puran Poli Recipe</title>
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
    <h1>Puran Poli</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>Puran Poli is a traditional Indian flatbread stuffed with a sweet lentil filling (puran). It's a popular dessert or snack enjoyed during festivals and special occasions.</p>
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
  <div class="img"><img src="populardishes/puranpoli1.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Puran Poli:</p></div>
    <ul>
      <li>1 cup chana dal (split chickpea lentils)</li>
      <li>1 cup jaggery (or sugar)</li>
      <li>1 cup whole wheat flour</li>
      <li>1/4 tsp turmeric powder</li>
      <li>1/4 tsp cardamom powder</li>
      <li>A pinch of salt</li>
      <li>Ghee or oil for cooking</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>Step 1:</p></div>
    <p>Wash and pressure cook the chana dal with enough water until it becomes soft and mushy. Drain any excess water.</p>
    
    <div><p>Step 2:</p></div>
    <p>Heat jaggery (or sugar) in a pan with a little water and make a syrup. Add the cooked chana dal and cook until it thickens into a filling. Add cardamom powder and mix well.</p>
    
    <div><p>Step 3:</p></div>
    <p>In a mixing bowl, combine whole wheat flour, turmeric powder, a pinch of salt, and enough water to make a soft dough. Let it rest for 30 minutes.</p>
    
    <div><p>Step 4:</p></div>
    <p>Divide the dough into small portions and roll them into balls. Divide the puran filling into equal portions.</p>
    
    <div><p>Step 5:</p></div>
    <p>Take a dough ball, flatten it, and place a portion of the puran filling in the center. Close the edges and roll it out gently into a circle.</p>
    
    <div><p>Step 6:</p></div>
    <p>Heat a griddle (tava) and cook the puran poli on both sides using ghee or oil until it turns golden brown.</p>
    
    <div><p>Step 7:</p></div>
    <p>Repeat the process with the remaining dough and filling.</p>
    
    <div><p>Step 8:</p></div>
    <p>Serve hot or warm. Puran poli can be enjoyed as a dessert or snack.</p>
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
        Ingredients for Puran Poli:
        
        For the Puran (Sweet Filling):
        - 1 cup chana dal (split chickpea lentils)
        - 1 cup jaggery (or sugar)
        - 1/4 tsp cardamom powder
        
        For the Poli (Outer Layer):
        - 1 cup whole wheat flour
        - 1/4 tsp turmeric powder
        - A pinch of salt
        - Ghee or oil for cooking
        
        Method:
        
        Step 1:
        Wash and pressure cook the chana dal with enough water until it becomes soft and mushy. Drain any excess water.
        
        Step 2:
        Heat jaggery (or sugar) in a pan with a little water and make a syrup. Add the cooked chana dal and cook until it thickens into a filling. Add cardamom powder and mix well.
        
        Step 3:
        In a mixing bowl, combine whole wheat flour, turmeric powder, a pinch of salt, and enough water to make a soft dough. Let it rest for 30 minutes.
        
        Step 4:
        Divide the dough into small portions and roll them into balls. Divide the puran filling into equal portions.
        
        Step 5:
        Take a dough ball, flatten it, and place a portion of the puran filling in the center. Close the edges and roll it out gently into a circle.
        
        Step 6:
        Heat a griddle (tava) and cook the puran poli on both sides using ghee or oil until it turns golden brown.
        
        Step 7:
        Repeat the process with the remaining dough and filling.
        
        Step 8:
        Serve hot or warm. Puran poli can be enjoyed as a dessert or snack.
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'puran_poli_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
