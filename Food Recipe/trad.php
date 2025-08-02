<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Sabut Moong Dal</title>
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
    <h1>Sabut Moong Dal</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Sabut Moong Dal, or whole green gram, is a nutritious and delicious ingredient often used in various cuisines, including Kashmiri cuisine. Here's a simple recipe for Kashmiri-style Sabut Moong Dal</p>  </div>
  <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/dal.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p> For the MoongDal:</p></div>
    <ul>
      <li>   
      1 cup whole green gram (sabut moong dal), soaked overnight
1 large onion, finely chopped
1 large tomato, chopped
1/2 cup yogurt
1/4 cup mustard oil (you can use any cooking oil if you prefer)
1 teaspoon cumin seeds
1 teaspoon fennel seeds
1 teaspoon ginger-garlic paste
1/2 teaspoon turmeric powder
1/2 teaspoon red chili powder (adjust according to spice preference)
1/2 teaspoon garam masala
Salt to taste
Fresh coriander leaves for garnish

</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Prepare the Dal:

Rinse the soaked whole green gram thoroughly and set aside.
Cook the Dal:

In a pressure cooker, add the soaked and rinsed whole green gram along with 3-4 cups of water. Cook until the dal is soft and well-cooked. Set aside.
Tempering:

Heat mustard oil in a pan until it starts to smoke. Allow it to cool slightly to reduce the strong flavor.
Add cumin seeds and fennel seeds to the hot oil. Let them splutter.
Add Aromatics:

Add finely chopped onions and sauté until they become golden brown.
Add Ginger-Garlic Paste:

Add ginger-garlic paste to the onions and sauté until the raw smell disappears.
Add Tomatoes and Spices:

Add chopped tomatoes and cook until they become soft and the oil starts to separate.
Add turmeric powder, red chili powder, and salt. Mix well.
Combine Dal and Tempering:

Add the cooked whole green gram to the tempering mixture. Mix well.
Simmer and Add Yogurt:

Simmer the dal for about 10-15 minutes to allow the flavors to meld.
In a small bowl, beat the yogurt and add it to the dal. Stir continuously to avoid curdling.
Adjust Consistency and Seasoning:

Adjust the consistency of the dal by adding water if needed.
Adjust salt and spice levels according to your taste.
Add Garam Masala and Garnish:

Add garam masala and stir well.
Garnish the dal with fresh coriander leaves.
Serve:

Serve the Kashmiri-style Sabut Moong Dal hot with steamed rice or Indian bread like roti or naan.
Enjoy the wholesome and flavorful Sabut Moong Dal, a Kashmiri dish that's both nutritious and satisfying. Adjust the spice levels according to your preference.




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
  
    1 cup whole green gram (sabut moong dal), soaked overnight
1 large onion, finely chopped
1 large tomato, chopped
1/2 cup yogurt
1/4 cup mustard oil (you can use any cooking oil if you prefer)
1 teaspoon cumin seeds
1 teaspoon fennel seeds
1 teaspoon ginger-garlic paste
1/2 teaspoon turmeric powder
1/2 teaspoon red chili powder (adjust according to spice preference)
1/2 teaspoon garam masala
Salt to taste
Fresh coriander leaves for garnish
Instructions:
Prepare the Dal:

Rinse the soaked whole green gram thoroughly and set aside.
Cook the Dal:

In a pressure cooker, add the soaked and rinsed whole green gram along with 3-4 cups of water. Cook until the dal is soft and well-cooked. Set aside.
Tempering:

Heat mustard oil in a pan until it starts to smoke. Allow it to cool slightly to reduce the strong flavor.
Add cumin seeds and fennel seeds to the hot oil. Let them splutter.
Add Aromatics:

Add finely chopped onions and sauté until they become golden brown.
Add Ginger-Garlic Paste:

Add ginger-garlic paste to the onions and sauté until the raw smell disappears.
Add Tomatoes and Spices:

Add chopped tomatoes and cook until they become soft and the oil starts to separate.
Add turmeric powder, red chili powder, and salt. Mix well.
Combine Dal and Tempering:

Add the cooked whole green gram to the tempering mixture. Mix well.
Simmer and Add Yogurt:

Simmer the dal for about 10-15 minutes to allow the flavors to meld.
In a small bowl, beat the yogurt and add it to the dal. Stir continuously to avoid curdling.
Adjust Consistency and Seasoning:

Adjust the consistency of the dal by adding water if needed.
Adjust salt and spice levels according to your taste.
Add Garam Masala and Garnish:

Add garam masala and stir well.
Garnish the dal with fresh coriander leaves.
Serve:

Serve the Kashmiri-style Sabut Moong Dal hot with steamed rice or Indian bread like roti or naan.
Enjoy the wholesome and flavorful Sabut Moong Dal, a Kashmiri dish that's both nutritious and satisfying. Adjust the spice levels according to your preference.


`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Dal.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
