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
    <h1>Manga Pacchadi</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>


      "Manga Pachadi" is a South Indian dish, particularly popular in the state of Tamil Nadu. It's a type of chutney or relish made with raw mangoes, and it typically has a sweet, tangy, and spicy flavor profile. It's often served as an accompaniment to rice during festive meals and special occasions.</p></div>    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/manga.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For Manga Pacchadi:</p></div>
    <ul>
      <li>   
1 cup raw mango, peeled and grated
1/2 cup jaggery, grated
1/2 teaspoon mustard seeds
1/4 teaspoon fenugreek seeds
2-3 dry red chilies
1/4 teaspoon turmeric powder
A pinch of asafoetida (hing)
Salt to taste
1 tablespoon oil
Water

</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Prepare the Mango:

Peel and grate the raw mango. Ensure you remove the seed.
Cooking the Mango:

In a pan, add the grated mango along with a little water, turmeric powder, and salt.
Cook the mango on low to medium heat until it becomes soft. This usually takes about 8-10 minutes.
Prepare Jaggery Syrup:

In a separate pan, melt the grated jaggery with a little water to make a syrup. Strain to remove impurities.
Combine Mango and Jaggery:

Add the jaggery syrup to the cooked mango and mix well. Let it simmer for a few more minutes until the mixture thickens.
Tempering:

In a small pan, heat oil. Add mustard seeds, fenugreek seeds, dry red chilies, and a pinch of asafoetida.
Once the mustard seeds splutter and the fenugreek seeds turn golden, pour this tempering over the mango-jaggery mixture.
Final Touch:

Stir everything together and let it simmer for a couple more minutes, allowing the flavors to meld.
Cool and Serve:

Let the Manga Pachadi cool to room temperature before serving.
Serving Suggestions:
Manga Pachadi is typically served as an accompaniment to rice in South Indian meals. It pairs well with plain rice and a dollop of ghee. The sweet and tangy taste of the mango, combined with the jaggery and spices, makes it a delicious and unique addition to the meal.

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
1 cup raw mango, peeled and grated
1/2 cup jaggery, grated
1/2 teaspoon mustard seeds
1/4 teaspoon fenugreek seeds
2-3 dry red chilies
1/4 teaspoon turmeric powder
A pinch of asafoetida (hing)
Salt to taste
1 tablespoon oil
Water
Instructions:
Prepare the Mango:

Peel and grate the raw mango. Ensure you remove the seed.
Cooking the Mango:

In a pan, add the grated mango along with a little water, turmeric powder, and salt.
Cook the mango on low to medium heat until it becomes soft. This usually takes about 8-10 minutes.
Prepare Jaggery Syrup:

In a separate pan, melt the grated jaggery with a little water to make a syrup. Strain to remove impurities.
Combine Mango and Jaggery:

Add the jaggery syrup to the cooked mango and mix well. Let it simmer for a few more minutes until the mixture thickens.
Tempering:

In a small pan, heat oil. Add mustard seeds, fenugreek seeds, dry red chilies, and a pinch of asafoetida.
Once the mustard seeds splutter and the fenugreek seeds turn golden, pour this tempering over the mango-jaggery mixture.
Final Touch:

Stir everything together and let it simmer for a couple more minutes, allowing the flavors to meld.
Cool and Serve:

Let the Manga Pachadi cool to room temperature before serving.
Serving Suggestions:
Manga Pachadi is typically served as an accompaniment to rice in South Indian meals. It pairs well with plain rice and a dollop of ghee. The sweet and tangy taste of the mango, combined with the jaggery and spices, makes it a delicious and unique addition to the meal.



`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'MangaPacchadi.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
