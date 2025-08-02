<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>dum</title>
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
    <h1>DoomAalo</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
It seems like there might be a slight spelling mistake in your query. If you are referring to Kashmiri Dum Aloo, it's a delicious and flavorful potato curry from the Kashmiri cuisine. Here's a simple recipe for Kashmiri Dum Aloo</p>    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
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
  <div class="img"><img src="populardishes/dum.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p> For the Dum Aloo:</p></div>
    <ul>
      <li>   

500 grams baby potatoes, peeled and parboiled
1 cup yogurt (whisked)
2 tablespoons oil
1 teaspoon cumin seeds
2-3 green cardamom pods
2-3 cloves
1-inch cinnamon stick
1 bay leaf
1/2 teaspoon turmeric powder
1 teaspoon Kashmiri red chili powder (for color, adjust according to spice preference)
1 teaspoon fennel powder
1 teaspoon dry ginger powder
Salt to taste
Chopped cilantro for garnish
For the Gravy:

2 tablespoons oil
1 large onion, finely chopped
1 teaspoon ginger-garlic paste
1 cup tomato puree
1/2 cup cashew nuts, soaked in warm water and ground to a paste
1/2 cup cream or milk
Salt to taste


</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Dum Aloo Preparation:
Parboil Potatoes:

Peel and parboil the baby potatoes until they are just cooked. Prick the potatoes with a fork.
Prepare Yogurt Marinade:

In a bowl, mix whisked yogurt, turmeric powder, Kashmiri red chili powder, fennel powder, dry ginger powder, and salt to form a smooth marinade.
Marinate Potatoes:

Coat the parboiled potatoes with the yogurt marinade. Let them marinate for at least 30 minutes.
Cook Potatoes:

Heat oil in a pan. Add cumin seeds, green cardamom pods, cloves, cinnamon stick, and bay leaf. Sauté for a minute.
Add the marinated potatoes and cook until they are golden brown on all sides.
Gravy Preparation:
Saute Onions:

In a separate pan, heat oil. Add finely chopped onions and sauté until they are golden brown.
Add Ginger-Garlic Paste:

Add ginger-garlic paste to the onions and sauté until the raw smell disappears.
Add Tomato Puree:

Add tomato puree to the onion mixture and cook until the oil separates from the masala.
Add Cashew Paste and Cream:

Add the ground cashew paste and cook for a few more minutes.
Pour in the cream or milk and stir well.
Combine with Potatoes:

Add the prepared gravy to the pan with the cooked potatoes. Mix gently.
Simmer and Garnish:

Let the Dum Aloo simmer on low heat for about 10-15 minutes.
Garnish with chopped cilantro before serving.
Serve Kashmiri Dum Aloo with steamed rice or Indian bread like naan or roti. Enjoy the rich and aromatic flavors of this Kashmiri delicacy! Adjust the spice levels according to your preference.









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
  
    For the Dum Aloo:

500 grams baby potatoes, peeled and parboiled
1 cup yogurt (whisked)
2 tablespoons oil
1 teaspoon cumin seeds
2-3 green cardamom pods
2-3 cloves
1-inch cinnamon stick
1 bay leaf
1/2 teaspoon turmeric powder
1 teaspoon Kashmiri red chili powder (for color, adjust according to spice preference)
1 teaspoon fennel powder
1 teaspoon dry ginger powder
Salt to taste
Chopped cilantro for garnish
For the Gravy:

2 tablespoons oil
1 large onion, finely chopped
1 teaspoon ginger-garlic paste
1 cup tomato puree
1/2 cup cashew nuts, soaked in warm water and ground to a paste
1/2 cup cream or milk
Salt to taste
Instructions:
Dum Aloo Preparation:
Parboil Potatoes:

Peel and parboil the baby potatoes until they are just cooked. Prick the potatoes with a fork.
Prepare Yogurt Marinade:

In a bowl, mix whisked yogurt, turmeric powder, Kashmiri red chili powder, fennel powder, dry ginger powder, and salt to form a smooth marinade.
Marinate Potatoes:

Coat the parboiled potatoes with the yogurt marinade. Let them marinate for at least 30 minutes.
Cook Potatoes:

Heat oil in a pan. Add cumin seeds, green cardamom pods, cloves, cinnamon stick, and bay leaf. Sauté for a minute.
Add the marinated potatoes and cook until they are golden brown on all sides.
Gravy Preparation:
Saute Onions:

In a separate pan, heat oil. Add finely chopped onions and sauté until they are golden brown.
Add Ginger-Garlic Paste:

Add ginger-garlic paste to the onions and sauté until the raw smell disappears.
Add Tomato Puree:

Add tomato puree to the onion mixture and cook until the oil separates from the masala.
Add Cashew Paste and Cream:

Add the ground cashew paste and cook for a few more minutes.
Pour in the cream or milk and stir well.
Combine with Potatoes:

Add the prepared gravy to the pan with the cooked potatoes. Mix gently.
Simmer and Garnish:

Let the Dum Aloo simmer on low heat for about 10-15 minutes.
Garnish with chopped cilantro before serving.
Serve Kashmiri Dum Aloo with steamed rice or Indian bread like naan or roti. Enjoy the rich and aromatic flavors of this Kashmiri delicacy! Adjust the spice levels according to your preference.



`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'DumAalo.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
