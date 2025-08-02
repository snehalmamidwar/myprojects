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
    <h1>Sundal</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Sundal is a popular South Indian dish made with legumes like chickpeas, black-eyed peas, or green gram. It is often prepared during festivals, especially during Navaratri. Here's a simple recipe for making basic Chickpea Sundal</p></div>    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/sundal.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Sundal:</p></div>
    <ul>
      <li>   
1 cup dried chickpeas (kabuli chana)
2 cups water (for soaking)
1 tablespoon oil
1 teaspoon mustard seeds
1 teaspoon urad dal (split black gram)
1-2 green chilies, finely chopped
A pinch of asafoetida (hing)
Curry leaves
1/2 cup grated coconut
Salt to taste
Fresh coriander leaves for garnish



</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Soaking Chickpeas:

Wash the dried chickpeas thoroughly and soak them in water for at least 6-8 hours or overnight.
Cooking Chickpeas:

After soaking, drain the water and rinse the chickpeas.
Pressure cook the chickpeas with fresh water until they are cooked but still firm. You can also boil them in a regular pot until tender.
Tempering:

In a pan, heat oil. Add mustard seeds and let them splutter.
Add urad dal and sauté until it turns golden brown.
Add chopped green chilies, curry leaves, and a pinch of asafoetida. Sauté for a minute.
Add Chickpeas:

Add the cooked chickpeas to the tempering mixture. Mix well.
Seasoning:

Add salt to taste and toss the chickpeas to coat them with the tempering.
Add Coconut:

Finally, add grated coconut and mix well. Cook for an additional 2-3 minutes.
Garnish and Serve:

Garnish with fresh coriander leaves.
Your Chickpea Sundal is ready to be served!
Variations:
You can use other legumes like black-eyed peas, green gram, or peanuts to make different types of sundal.
Add a squeeze of lemon juice for a tangy flavor.
Garnish with chopped cilantro or mint for added freshness.
Sundal is often offered as prasad (offering) during festivals and is a healthy and nutritious snack. It can be enjoyed on its own or as a side dish with rice.

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
  
    Ingredients:
1 cup dried chickpeas (kabuli chana)
2 cups water (for soaking)
1 tablespoon oil
1 teaspoon mustard seeds
1 teaspoon urad dal (split black gram)
1-2 green chilies, finely chopped
A pinch of asafoetida (hing)
Curry leaves
1/2 cup grated coconut
Salt to taste
Fresh coriander leaves for garnish
Instructions:
Soaking Chickpeas:

Wash the dried chickpeas thoroughly and soak them in water for at least 6-8 hours or overnight.
Cooking Chickpeas:

After soaking, drain the water and rinse the chickpeas.
Pressure cook the chickpeas with fresh water until they are cooked but still firm. You can also boil them in a regular pot until tender.
Tempering:

In a pan, heat oil. Add mustard seeds and let them splutter.
Add urad dal and sauté until it turns golden brown.
Add chopped green chilies, curry leaves, and a pinch of asafoetida. Sauté for a minute.
Add Chickpeas:

Add the cooked chickpeas to the tempering mixture. Mix well.
Seasoning:

Add salt to taste and toss the chickpeas to coat them with the tempering.
Add Coconut:

Finally, add grated coconut and mix well. Cook for an additional 2-3 minutes.
Garnish and Serve:

Garnish with fresh coriander leaves.
Your Chickpea Sundal is ready to be served!
Variations:
You can use other legumes like black-eyed peas, green gram, or peanuts to make different types of sundal.
Add a squeeze of lemon juice for a tangy flavor.
Garnish with chopped cilantro or mint for added freshness.
Sundal is often offered as prasad (offering) during festivals and is a healthy and nutritious snack. It can be enjoyed on its own or as a side dish with rice.
`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Sundal.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
