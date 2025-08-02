<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Sabudana khichadi</title>
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
    <h1>Sabudana Khichadi</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Sabudana Khichadi is a popular fasting recipe in Gujarat and other parts of India. It's made from sabudana (tapioca pearls) and is often consumed during festivals like Navratri. Here's a simple recipe for Gujarati Sabudana Khichadi</p>

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
  <div class="img"><img src="populardishes/sabu.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Gujarati Sabudana Khichadi:</p></div>
    <ul>
      <li>1 cup sabudana (tapioca pearls)
2 medium-sized potatoes, peeled and diced
1/2 cup roasted peanuts, coarsely ground
1-2 green chilies, finely chopped
1 teaspoon cumin seeds
2 tablespoons ghee or oil
A pinch of asafoetida (hing)
1 teaspoon sugar (optional)
Salt to taste
Fresh coriander leaves, chopped for garnish
Lemon wedges for serving</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Wash and Soak Sabudana:

Wash the sabudana under running water until the water runs clear.
Soak the sabudana in enough water for 4-5 hours or overnight. Ensure that the sabudana pearls are soaked well and become fluffy.
Drain Excess Water:

After soaking, drain any excess water from the sabudana using a colander. Be gentle to avoid breaking the pearls.
Roast Peanuts:

Dry roast the peanuts and grind them coarsely. Set aside.
Prepare Potatoes:

Boil or steam the diced potatoes until they are just tender. Set aside.
Cooking the Khichadi:

Heat ghee or oil in a pan. Add cumin seeds and let them splutter.
Add chopped green chilies and sauté for a minute.
Add boiled potatoes and stir-fry for 2-3 minutes until they get a light golden color.
Add Sabudana:

Add the soaked and drained sabudana to the pan.
Add salt and sugar (if using) and mix well. Keep stirring gently to avoid sticking.
Add Peanuts:

Add the coarsely ground peanuts and mix well. Continue to cook on low heat.
Cook Until Done:

Cook the khichadi for 7-10 minutes, stirring occasionally until the sabudana becomes translucent and cooked through.
Garnish and Serve:

Garnish with chopped coriander leaves.
Serve hot with a side of lemon wedges.
Gujarati Sabudana Khichadi is often enjoyed with plain yogurt or a cup of tea. It's a delicious and filling dish, perfect for those observing fasting or looking for a tasty breakfast or snack. Adjust the spice levels and other ingredients according to your taste preferences.






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
1 cup sabudana (tapioca pearls)
2 medium-sized potatoes, peeled and diced
1/2 cup roasted peanuts, coarsely ground
1-2 green chilies, finely chopped
1 teaspoon cumin seeds
2 tablespoons ghee or oil
A pinch of asafoetida (hing)
1 teaspoon sugar (optional)
Salt to taste
Fresh coriander leaves, chopped for garnish
Lemon wedges for serving
Instructions:
Wash and Soak Sabudana:

Wash the sabudana under running water until the water runs clear.
Soak the sabudana in enough water for 4-5 hours or overnight. Ensure that the sabudana pearls are soaked well and become fluffy.
Drain Excess Water:

After soaking, drain any excess water from the sabudana using a colander. Be gentle to avoid breaking the pearls.
Roast Peanuts:

Dry roast the peanuts and grind them coarsely. Set aside.
Prepare Potatoes:

Boil or steam the diced potatoes until they are just tender. Set aside.
Cooking the Khichadi:

Heat ghee or oil in a pan. Add cumin seeds and let them splutter.
Add chopped green chilies and sauté for a minute.
Add boiled potatoes and stir-fry for 2-3 minutes until they get a light golden color.
Add Sabudana:

Add the soaked and drained sabudana to the pan.
Add salt and sugar (if using) and mix well. Keep stirring gently to avoid sticking.
Add Peanuts:

Add the coarsely ground peanuts and mix well. Continue to cook on low heat.
Cook Until Done:

Cook the khichadi for 7-10 minutes, stirring occasionally until the sabudana becomes translucent and cooked through.
Garnish and Serve:

Garnish with chopped coriander leaves.
Serve hot with a side of lemon wedges.
Gujarati Sabudana Khichadi is often enjoyed with plain yogurt or a cup of tea. It's a delicious and filling dish, perfect for those observing fasting or looking for a tasty breakfast or snack. Adjust the spice levels and other ingredients according to your taste preferences.

 `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'sabudana_khichadi.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
