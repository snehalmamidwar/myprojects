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
    <h1>Adai</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>


      Adai is a popular South Indian pancake made from a mixture of lentils and rice. It is a nutritious and protein-rich dish, and it's commonly served with avial (a mixed vegetable curry) and coconut chutney. Here's a simple recipe for making Adai</p></div>  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/adai.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For Adai:</p></div>
    <ul>
      <li>   
      1 cup raw rice
1/2 cup parboiled rice
1/4 cup chana dal (split chickpeas)
1/4 cup toor dal (split pigeon peas)
1/4 cup urad dal (split black gram)
1/4 cup moong dal (split green gram)
2-3 dry red chilies (adjust to taste)
A pinch of asafoetida (hing)
1 teaspoon cumin seeds
1 inch piece of ginger, grated
Salt to taste
Water for soaking and grinding
Oil for cooking

</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Soaking:

Wash the raw rice, parboiled rice, chana dal, toor dal, urad dal, and moong dal together.
Soak them in water for 3-4 hours.
Grinding:

After soaking, drain the water and grind the soaked ingredients along with dry red chilies, asafoetida, cumin seeds, and grated ginger to a coarse batter. Add water as needed while grinding.
Batter Consistency:

The batter should be thicker than dosa batter but not as thick as idli batter. It should have a coarse texture.
Add Salt:

Transfer the batter to a bowl and add salt. Mix well.
Prepare Adai:

Heat a griddle or a non-stick pan.
Take a ladle full of batter and spread it on the hot griddle to form a pancake. You can make it as thick or thin as you prefer.
Cooking:

Drizzle a little oil around the edges of the adai and in the center. Cook on medium heat until the edges start to brown.
Flip and Cook:

Flip the adai and cook the other side until it's cooked through and has a golden-brown color.
Serve:

Repeat the process with the remaining batter.
Serve the hot Adai with avial and coconut chutney.
Serving Suggestions:
Adai is often served with avial, a mixed vegetable curry made with coconut and yogurt, along with coconut chutney. It makes for a wholesome and satisfying meal. You can customize the recipe by adding finely chopped onions, curry leaves, or other ingredients of your choice to the batter before cooking.
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
1 cup raw rice
1/2 cup parboiled rice
1/4 cup chana dal (split chickpeas)
1/4 cup toor dal (split pigeon peas)
1/4 cup urad dal (split black gram)
1/4 cup moong dal (split green gram)
2-3 dry red chilies (adjust to taste)
A pinch of asafoetida (hing)
1 teaspoon cumin seeds
1 inch piece of ginger, grated
Salt to taste
Water for soaking and grinding
Oil for cooking
Instructions:
Soaking:

Wash the raw rice, parboiled rice, chana dal, toor dal, urad dal, and moong dal together.
Soak them in water for 3-4 hours.
Grinding:

After soaking, drain the water and grind the soaked ingredients along with dry red chilies, asafoetida, cumin seeds, and grated ginger to a coarse batter. Add water as needed while grinding.
Batter Consistency:

The batter should be thicker than dosa batter but not as thick as idli batter. It should have a coarse texture.
Add Salt:

Transfer the batter to a bowl and add salt. Mix well.
Prepare Adai:

Heat a griddle or a non-stick pan.
Take a ladle full of batter and spread it on the hot griddle to form a pancake. You can make it as thick or thin as you prefer.
Cooking:

Drizzle a little oil around the edges of the adai and in the center. Cook on medium heat until the edges start to brown.
Flip and Cook:

Flip the adai and cook the other side until it's cooked through and has a golden-brown color.
Serve:

Repeat the process with the remaining batter.
Serve the hot Adai with avial and coconut chutney.
Serving Suggestions:
Adai is often served with avial, a mixed vegetable curry made with coconut and yogurt, along with coconut chutney. It makes for a wholesome and satisfying meal. You can customize the recipe by adding finely chopped onions, curry leaves, or other ingredients of your choice to the batter before cooking.

`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'adai.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
