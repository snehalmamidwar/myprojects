<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title></title>
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
    <h1>Madhurai Malli poo Idli</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      "Madurai Malli Poo Idli" translates to "Madurai Jasmine Flower Idli," which is not a commonly known or traditional dish. However, if you're looking for a recipe for idli with a Madurai twist, you might be referring to the famous Madurai Malli Poo Idli, where malli poo could be associated with a special seasoning or flavoring.</p></div>         <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/idli.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For mallipo Idli:</p></div>
    <ul>
      <li>   
2 cups idli rice
1 cup urad dal (black gram)
1/2 teaspoon fenugreek seeds
Salt to taste
Water for soaking and grinding
For Madurai Malli Poo Seasoning:
Mustard seeds
Urad dal
Chana dal
Curry leaves
Green chilies, finely chopped
Grated coconut
Cashews
Ghee
Asafoetida (hing)
Fresh coriander leaves, chopped
Madurai Malli Poo essence (if available)


</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions:
Soaking:

Wash the idli rice and urad dal separately. Soak them in water for about 4-6 hours.
Grinding:

Grind the urad dal with fenugreek seeds to a smooth, fluffy batter using as little water as possible.
Grind the idli rice to a slightly coarse texture.
Mix both batters together, add salt, and let it ferment overnight or for at least 8 hours.
Preparing the Idlis:

Grease the idli molds and pour the batter into each mold.
Steam the idlis in an idli steamer for about 10-12 minutes or until a toothpick inserted comes out clean.
Madurai Malli Poo Seasoning:

In a pan, heat ghee and add mustard seeds. Once they splutter, add urad dal and chana dal. Sauté until they turn golden brown.
Add cashews and fry until they are lightly browned.
Add green chilies, curry leaves, and asafoetida. Sauté for a minute.
Add grated coconut and sauté until it turns golden.
Add this seasoning to the steamed idlis.
Finishing Touch:

Sprinkle Madurai Malli Poo essence if available for a floral aroma.
Garnish with chopped coriander leaves.
Serve your Madurai Malli Poo Idlis with coconut chutney or sambar for an authentic South Indian experience. Adjust the spice levels and the Malli Poo essence according to your taste preferences.







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
2 cups idli rice
1 cup urad dal (black gram)
1/2 teaspoon fenugreek seeds
Salt to taste
Water for soaking and grinding
For Madurai Malli Poo Seasoning:
Mustard seeds
Urad dal
Chana dal
Curry leaves
Green chilies, finely chopped
Grated coconut
Cashews
Ghee
Asafoetida (hing)
Fresh coriander leaves, chopped
Madurai Malli Poo essence (if available)
Instructions:
Soaking:

Wash the idli rice and urad dal separately. Soak them in water for about 4-6 hours.
Grinding:

Grind the urad dal with fenugreek seeds to a smooth, fluffy batter using as little water as possible.
Grind the idli rice to a slightly coarse texture.
Mix both batters together, add salt, and let it ferment overnight or for at least 8 hours.
Preparing the Idlis:

Grease the idli molds and pour the batter into each mold.
Steam the idlis in an idli steamer for about 10-12 minutes or until a toothpick inserted comes out clean.
Madurai Malli Poo Seasoning:

In a pan, heat ghee and add mustard seeds. Once they splutter, add urad dal and chana dal. Sauté until they turn golden brown.
Add cashews and fry until they are lightly browned.
Add green chilies, curry leaves, and asafoetida. Sauté for a minute.
Add grated coconut and sauté until it turns golden.
Add this seasoning to the steamed idlis.
Finishing Touch:

Sprinkle Madurai Malli Poo essence if available for a floral aroma.
Garnish with chopped coriander leaves.
Serve your Madurai Malli Poo Idlis with coconut chutney or sambar for an authentic South Indian experience. Adjust the spice levels and the Malli Poo essence according to your taste preferences.







`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'idli.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
