<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>bhendi</title>
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
    <h1>Shoshe Bhendi</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Shorshe diye bhindi" is a Bengali dish where bhindi (okra or ladyfinger) is cooked in a mustard-based gravy. Here's a simple recipe for making Shorshe Diye Bhendi</p>
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
  <div class="img"><img src="populardishes/bhendi.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Shorshe Bhindi:</p></div>
    <ul>
      <li>   250 grams bhindi (okra), washed and dried
2 tablespoons mustard paste
1 tablespoon poppy seed paste
1/2 teaspoon turmeric powder
1/2 teaspoon red chili powder
Salt to taste
2 tablespoons mustard oil
1 teaspoon black mustard seeds
2 green chilies, chopped
A pinch of sugar (optional)
Fresh coriander leaves for garnish
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>





Prepare the bhindi:

Trim the ends of the bhindi and cut them into halves or long pieces as per your preference.
Make the mustard-poppy seed paste:

Grind mustard seeds and poppy seeds separately to form a smooth paste by adding a little water.
Marinate the bhindi:

In a bowl, mix the bhindi with mustard paste, poppy seed paste, turmeric powder, red chili powder, and salt. Ensure that the bhindi pieces are well coated with the masala mixture. Let it marinate for about 15-20 minutes.
Cook the bhindi:

Heat mustard oil in a pan. Add black mustard seeds and let them splutter.
Add the marinated bhindi and stir well.
Cook the bhindi on medium heat until it becomes tender. Stir occasionally to prevent sticking.
Add green chilies:

Once the bhindi is almost cooked, add chopped green chilies and mix well.
Finish the dish:

Pour in a little water if needed to adjust the consistency of the gravy.
If you like, you can add a pinch of sugar to balance the flavors.
Cook for a few more minutes until the bhindi is completely cooked, and the gravy thickens.
Garnish and serve:

Garnish with fresh coriander leaves.
Serve Shorshe Diye Bhendi with steamed rice or chapati. The unique combination of mustard and poppy seed paste gives this dish a distinct flavor that is both spicy and aromatic. Adjust the spice levels and consistency of the gravy according to your preference.









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

250 grams bhindi (okra), washed and dried
2 tablespoons mustard paste
1 tablespoon poppy seed paste
1/2 teaspoon turmeric powder
1/2 teaspoon red chili powder
Salt to taste
2 tablespoons mustard oil
1 teaspoon black mustard seeds
2 green chilies, chopped
A pinch of sugar (optional)
Fresh coriander leaves for garnish
Instructions:

Prepare the bhindi:

Trim the ends of the bhindi and cut them into halves or long pieces as per your preference.
Make the mustard-poppy seed paste:

Grind mustard seeds and poppy seeds separately to form a smooth paste by adding a little water.
Marinate the bhindi:

In a bowl, mix the bhindi with mustard paste, poppy seed paste, turmeric powder, red chili powder, and salt. Ensure that the bhindi pieces are well coated with the masala mixture. Let it marinate for about 15-20 minutes.
Cook the bhindi:

Heat mustard oil in a pan. Add black mustard seeds and let them splutter.
Add the marinated bhindi and stir well.
Cook the bhindi on medium heat until it becomes tender. Stir occasionally to prevent sticking.
Add green chilies:

Once the bhindi is almost cooked, add chopped green chilies and mix well.
Finish the dish:

Pour in a little water if needed to adjust the consistency of the gravy.
If you like, you can add a pinch of sugar to balance the flavors.
Cook for a few more minutes until the bhindi is completely cooked, and the gravy thickens.
Garnish and serve:

Garnish with fresh coriander leaves.
Serve Shorshe Diye Bhendi with steamed rice or chapati. The unique combination of mustard and poppy seed paste gives this dish a distinct flavor that is both spicy and aromatic. Adjust the spice levels and consistency of the gravy according to your preference.


`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'shorshe diye bhendi.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
