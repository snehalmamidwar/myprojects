<?php 
  session_start(); 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Vegetable Curry Recipe</title>
  <link rel="stylesheet" href="populardishes/curry.css">
</head>
<body>
<!-- Vegetable Curry -->
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
    <h1>Vegetable Curry</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>Vegetable Curry is a flavorful and nutritious dish made with a variety of vegetables cooked in a rich and aromatic curry sauce. It's a popular vegetarian option that's enjoyed by people around the world.</p>
    </div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 45 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/vegetablecurry.jpg" alt="Vegetable Curry"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Vegetable Curry:</p></div>
    <ul>
      <li>2 cups mixed vegetables (e.g., potatoes, carrots, peas, bell peppers)</li>
      <li>1 large onion, finely chopped</li>
      <li>2 tomatoes, chopped</li>
      <li>2 cloves garlic, minced</li>
      <li>1-inch piece of ginger, grated</li>
      <li>2-3 green chilies, finely chopped</li>
      <li>1/2 cup coconut milk</li>
      <li>2 tbsp vegetable oil</li>
      <li>1 tsp cumin seeds</li>
      <li>1 tsp ground turmeric</li>
      <li>1 tsp ground coriander</li>
      <li>1/2 tsp red chili powder (adjust to taste)</li>
      <li>Salt to taste</li>
      <li>Fresh cilantro leaves, chopped (for garnish)</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>Step 1:</p></div>
    <p>Heat vegetable oil in a pan. Add cumin seeds and let them sizzle.</p>
    
    <div><p>Step 2:</p></div>
    <p>Add chopped onions and sauté until they turn translucent.</p>
    
    <div><p>Step 3:</p></div>
    <p>Add minced garlic, grated ginger, and green chilies. Sauté for a minute.</p>
    
    <div><p>Step 4:</p></div>
    <p>Add chopped tomatoes and cook until they become soft and the oil starts to separate.</p>
    
    <div><p>Step 5:</p></div>
    <p>Add ground turmeric, ground coriander, red chili powder, and salt. Mix well.</p>
    
    <div><p>Step 6:</p></div>
    <p>Add mixed vegetables and sauté for a few minutes.</p>
    
    <div><p>Step 7:</p></div>
    <p>Pour in the coconut milk and simmer until the vegetables are tender and the curry has thickened.</p>
    
    <div><p>Step 8:</p></div>
    <p>Garnish with fresh cilantro leaves and serve hot with rice or bread.</p>
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
        Ingredients for Vegetable Curry:
        
        - 2 cups mixed vegetables (e.g., potatoes, carrots, peas, bell peppers)
        - 1 large onion, finely chopped
        - 2 tomatoes, chopped
        - 2 cloves garlic, minced
        - 1-inch piece of ginger, grated
        - 2-3 green chilies, finely chopped
        - 1/2 cup coconut milk
        - 2 tbsp vegetable oil
        - 1 tsp cumin seeds
        - 1 tsp ground turmeric
        - 1 tsp ground coriander
        - 1/2 tsp red chili powder (adjust to taste)
        - Salt to taste
        - Fresh cilantro leaves, chopped (for garnish)
        
        Method:
        
        Step 1:
        Heat vegetable oil in a pan. Add cumin seeds and let them sizzle.
        
        Step 2:
        Add chopped onions and sauté until they turn translucent.
        
        Step 3:
        Add minced garlic, grated ginger, and green chilies. Sauté for a minute.
        
        Step 4:
        Add chopped tomatoes and cook until they become soft and the oil starts to separate.
        
        Step 5:
        Add ground turmeric, ground coriander, red chili powder, and salt. Mix well.
        
        Step 6:
        Add mixed vegetables and sauté for a few minutes.
        
        Step 7:
        Pour in the coconut milk and simmer until the vegetables are tender and the curry has thickened.
        
        Step 8:
        Garnish with fresh cilantro leaves and serve hot with rice or bread.
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'vegetable_curry_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
