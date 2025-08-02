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
    <h1>Rath Thali</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Narkel Diye Chholar Dal" is a Bengali dish where chana dal (Bengal gram lentils) is cooked with coconut. Here's a simple recipe for Narkel Diye Chholar Dal    </div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/rath.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Diye Chholar Dal:</p></div>
    <ul>
      <li>   

      1 cup chana dal (Bengal gram lentils)
1/2 cup freshly grated coconut
1 medium-sized onion, finely chopped
2 green chilies, chopped
1 teaspoon ginger, grated
1 teaspoon cumin seeds
1 teaspoon mustard seeds
1/2 teaspoon turmeric powder
A pinch of asafoetida (hing)
2-3 dried red chilies
1 bay leaf
2-3 tablespoons mustard oil or any cooking oil
Salt to taste
Fresh coriander leaves for garnish



</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions:
Prepare the Chana Dal:

Wash the chana dal thoroughly and soak it in water for 30 minutes.
After soaking, drain the water.
Cook the Dal:

In a pressure cooker, add the soaked chana dal with enough water to cover the lentils. Add turmeric powder and salt.
Pressure cook until the dal is soft and cooked. It usually takes about 3-4 whistles on medium heat.
Prepare the Coconut Mixture:

Heat oil in a pan. Add cumin seeds, mustard seeds, dried red chilies, bay leaf, and hing. Let the seeds splutter.
Add chopped onions, grated ginger, and green chilies. Saute until the onions are golden brown.
Add freshly grated coconut to the pan and sauté for a few more minutes until the coconut turns golden.
Combine Dal and Coconut Mixture:

Once the dal is cooked, open the pressure cooker and mix the coconut mixture into the dal.
Simmer the dal on low heat for 5-10 minutes to let the flavors blend.
Adjust Seasoning:

Check for salt and adjust if needed. You can also add a little water if the dal is too thick.
Temper with Mustard Oil:

In a small pan, heat mustard oil until it smokes. Let it cool for a moment.
Pour the tempered mustard oil over the dal for a distinct flavor.
Garnish and Serve:

Garnish with fresh coriander leaves.
Narkel Diye Chholar Dal is best served with steamed rice, but you can also enjoy it with chapati or paratha. The combination of chana dal and coconut gives this dish a unique and delicious taste that is sure to be a hit. Adjust the spice levels according to your preference.







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
1 cup chana dal (Bengal gram lentils)
1/2 cup freshly grated coconut
1 medium-sized onion, finely chopped
2 green chilies, chopped
1 teaspoon ginger, grated
1 teaspoon cumin seeds
1 teaspoon mustard seeds
1/2 teaspoon turmeric powder
A pinch of asafoetida (hing)
2-3 dried red chilies
1 bay leaf
2-3 tablespoons mustard oil or any cooking oil
Salt to taste
Fresh coriander leaves for garnish
Instructions:
Prepare the Chana Dal:

Wash the chana dal thoroughly and soak it in water for 30 minutes.
After soaking, drain the water.
Cook the Dal:

In a pressure cooker, add the soaked chana dal with enough water to cover the lentils. Add turmeric powder and salt.
Pressure cook until the dal is soft and cooked. It usually takes about 3-4 whistles on medium heat.
Prepare the Coconut Mixture:

Heat oil in a pan. Add cumin seeds, mustard seeds, dried red chilies, bay leaf, and hing. Let the seeds splutter.
Add chopped onions, grated ginger, and green chilies. Saute until the onions are golden brown.
Add freshly grated coconut to the pan and sauté for a few more minutes until the coconut turns golden.
Combine Dal and Coconut Mixture:

Once the dal is cooked, open the pressure cooker and mix the coconut mixture into the dal.
Simmer the dal on low heat for 5-10 minutes to let the flavors blend.
Adjust Seasoning:

Check for salt and adjust if needed. You can also add a little water if the dal is too thick.
Temper with Mustard Oil:

In a small pan, heat mustard oil until it smokes. Let it cool for a moment.
Pour the tempered mustard oil over the dal for a distinct flavor.
Garnish and Serve:

Garnish with fresh coriander leaves.
Narkel Diye Chholar Dal is best served with steamed rice, but you can also enjoy it with chapati or paratha. The combination of chana dal and coconut gives this dish a unique and delicious taste that is sure to be a hit. Adjust the spice levels according to your preference.

`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Rath Thali.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
