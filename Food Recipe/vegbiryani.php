<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Veg Biryani Recipe</title>
  <link rel="stylesheet" href="populardishes/vegbiryani.css">
</head>
<body>
<!-- Veg Biryani -->
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
    <h1>Veg Biryani</h1>
    <h4>Description</h4>
    <div class="desc"><p>Veg Biryani is a delicious and aromatic Indian rice dish made with an assortment of vegetables and aromatic spices. It's a perfect blend of flavors and textures that's sure to tantalize your taste buds. Veg Biryani is a popular choice for special occasions and gatherings.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 45 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="https://t3.ftcdn.net/jpg/04/95/95/20/360_F_495952045_QbkDgCNqd0u1XRw1hh6N9FuefQoMKNv5.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Veg Biryani:</p></div>
    <ul>
      <li>2 cups Basmati rice</li>
      <li>2 cups mixed vegetables (carrots, peas, bell peppers, etc.)</li>
      <li>1 large onion, thinly sliced</li>
      <li>2 tomatoes, chopped</li>
      <li>1/2 cup yogurt</li>
      <li>1/4 cup mint leaves, chopped</li>
      <li>1/4 cup coriander leaves, chopped</li>
      <li>2 tbsp ghee or oil</li>
      <li>1 bay leaf</li>
      <li>4-5 green cardamom pods</li>
      <li>4-5 cloves</li>
      <li>1-inch cinnamon stick</li>
      <li>1/2 tsp cumin seeds</li>
      <li>1/2 tsp red chili powder (adjust to taste)</li>
      <li>Salt to taste</li>
      <li>2 cups water</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>Step 1:</p></div>
    <p>Wash the Basmati rice under running water until the water runs clear. Soak the rice in water for 30 minutes, and then drain.</p>
    
    <div><p>Step 2:</p></div>
    <p>Heat ghee or oil in a large pot or pressure cooker. Add the bay leaf, green cardamom pods, cloves, cinnamon stick, and cumin seeds. Sauté for a minute until they release their aroma.</p>
    
    <div><p>Step 3:</p></div>
    <p>Add the sliced onions and sauté until they turn golden brown. Then, add the chopped tomatoes and cook until they become soft and the oil starts to separate.</p>
    
    <div><p>Step 4:</p></div>
    <p>Add the mixed vegetables and cook for a few minutes. Add the red chili powder, salt, and yogurt. Mix well and cook for another few minutes until the vegetables are partially cooked.</p>
    
    <div><p>Step 5:</p></div>
    <p>Layer the soaked and drained rice on top of the vegetables. Add 2 cups of water and mix gently. Sprinkle mint leaves and coriander leaves on top.</p>
    
    <div><p>Step 6:</p></div>
    <p>Cover the pot or pressure cooker with a tight-fitting lid. Cook on low heat for 20-25 minutes until the rice is cooked and the vegetables are tender. Remove from heat and let it rest for 10 minutes before opening the lid.</p>
    
    <div><p>Step 7:</p></div>
    <p>Fluff the Veg Biryani with a fork, garnish with additional mint and coriander leaves if desired, and serve hot. You can enjoy it with raita or a side salad.</p>
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
        Ingredients for Veg Biryani:
        
        - 2 cups Basmati rice
        - 2 cups mixed vegetables (carrots, peas, bell peppers, etc.)
        - 1 large onion, thinly sliced
        - 2 tomatoes, chopped
        - 1/2 cup yogurt
        - 1/4 cup mint leaves, chopped
        - 1/4 cup coriander leaves, chopped
        - 2 tbsp ghee or oil
        - 1 bay leaf
        - 4-5 green cardamom pods
        - 4-5 cloves
        - 1-inch cinnamon stick
        - 1/2 tsp cumin seeds
        - 1/2 tsp red chili powder (adjust to taste)
        - Salt to taste
        - 2 cups water
        
        Method:
        
        Step 1:
        Wash the Basmati rice under running water until the water runs clear. Soak the rice in water for 30 minutes, and then drain.
        
        Step 2:
        Heat ghee or oil in a large pot or pressure cooker. Add the bay leaf, green cardamom pods, cloves, cinnamon stick, and cumin seeds. Sauté for a minute until they release their aroma.
        
        Step 3:
        Add the sliced onions and sauté until they turn golden brown. Then, add the chopped tomatoes and cook until they become soft and the oil starts to separate.
        
        Step 4:
        Add the mixed vegetables and cook for a few minutes. Add the red chili powder, salt, and yogurt. Mix well and cook for another few minutes until the vegetables are partially cooked.
        
        Step 5:
        Layer the soaked and drained rice on top of the vegetables. Add 2 cups of water and mix gently. Sprinkle mint leaves and coriander leaves on top.
        
        Step 6:
        Cover the pot or pressure cooker with a tight-fitting lid. Cook on low heat for 20-25 minutes until the rice is cooked and the vegetables are tender. Remove from heat and let it rest for 10 minutes before opening the lid.
        
        Step 7:
        Fluff the Veg Biryani with a fork, garnish with additional mint and coriander leaves if desired, and serve hot. You can enjoy it with raita or a side salad.
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'veg_biryani_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}


  updateCounts();
</script>
 

</body>
</html>
