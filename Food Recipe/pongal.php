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
    <h1>Sweet Pongal</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Sweet Pongal is a traditional South Indian dish that holds a special place in the cuisine, especially during the Pongal festival. It is a delightful and comforting sweet dish made with rice, lentils (moong dal), jaggery, ghee (clarified butter), and flavored with cardamom. </p></div> 
         <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/pongal.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For Sweet Pongal:</p></div>
    <ul>
      <li>   
1 cup rice
1/4 cup split yellow moong dal (lentils)
1 cup jaggery (grated)
1/2 cup ghee (clarified butter)
10-12 cashews
1/4 cup raisins
1/2 teaspoon cardamom powder
A pinch of edible camphor (optional)
A pinch of salt
4 cups water


</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:

Wash the rice and lentils:

Rinse the rice and moong dal under running water until the water runs clear.
Pressure cook:

Combine the washed rice and moong dal with 4 cups of water in a pressure cooker.
Cook until you get 3-4 whistles or until the rice and dal are soft and well-cooked. Set aside.
Prepare jaggery syrup:

Dissolve the grated jaggery in a little water to make a syrup. Strain it to remove impurities.
Cook rice and dal mixture:

In a pan, add the cooked rice and dal mixture along with the jaggery syrup.
Cook on medium heat, stirring continuously.
Add ghee and cardamom:

In a separate pan, heat ghee. Fry the cashews until golden brown, then add the raisins and fry until they plump up.
Add this ghee-nut mixture to the cooking rice and dal.
Flavor with cardamom:

Add cardamom powder and a pinch of edible camphor (if using) to the mixture. Mix well.
Simmer until thickened:

Continue to cook on low heat until the Pongal thickens to your desired consistency. It should have a creamy texture.
Serve:

Once done, remove from heat and let it cool for a few minutes before serving.
Enjoy your homemade sweet Pongal! You can garnish it with additional ghee, cashews, and raisins if desired.



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

1 cup rice
1/4 cup split yellow moong dal (lentils)
1 cup jaggery (grated)
1/2 cup ghee (clarified butter)
10-12 cashews
1/4 cup raisins
1/2 teaspoon cardamom powder
A pinch of edible camphor (optional)
A pinch of salt
4 cups water
Instructions:

Wash the rice and lentils:

Rinse the rice and moong dal under running water until the water runs clear.
Pressure cook:

Combine the washed rice and moong dal with 4 cups of water in a pressure cooker.
Cook until you get 3-4 whistles or until the rice and dal are soft and well-cooked. Set aside.
Prepare jaggery syrup:

Dissolve the grated jaggery in a little water to make a syrup. Strain it to remove impurities.
Cook rice and dal mixture:

In a pan, add the cooked rice and dal mixture along with the jaggery syrup.
Cook on medium heat, stirring continuously.
Add ghee and cardamom:

In a separate pan, heat ghee. Fry the cashews until golden brown, then add the raisins and fry until they plump up.
Add this ghee-nut mixture to the cooking rice and dal.
Flavor with cardamom:

Add cardamom powder and a pinch of edible camphor (if using) to the mixture. Mix well.
Simmer until thickened:

Continue to cook on low heat until the Pongal thickens to your desired consistency. It should have a creamy texture.
Serve:

Once done, remove from heat and let it cool for a few minutes before serving.
Enjoy your homemade sweet Pongal! You can garnish it with additional ghee, cashews, and raisins if desired.


`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Pongal.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
