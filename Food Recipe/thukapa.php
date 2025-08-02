<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>thukapa</title>
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
    <h1>thukapa</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Thukpa is essentially a dish of Darjeeling but finds its roots in the Tibetan cuisine. A hot-noodle soup, Thukpa comprises of many veggies, some customary tinge of spices, and Hakka noodles. It is one of the most admired dishes within the town and is available at almost all the restaurants and roadside stalls.</p>


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
  <div class="img"><img src="populardishes/thukapa.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Thukapa:</p></div>
    <ul>
      <li>  For the Broth:
8 cups vegetable broth
1 onion, thinly sliced
2 carrots, julienned
1 cup cabbage, shredded
1 bell pepper, thinly sliced
1 cup mushrooms, sliced
1/2 cup peas
3 cloves garlic, minced
1-inch ginger, grated
1 tablespoon soy sauce
1 tablespoon vegetable oil
Salt and pepper to taste
For the Noodles:
200g flat rice noodles, cooked according to package instructions
For Garnish:
Fresh cilantro, chopped
Green onions, chopped
Lime wedges
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

    Prepare the Vegetables:

Heat vegetable oil in a large pot. Add minced garlic and grated ginger, sauté for a minute.
Add sliced onions and cook until translucent.
Add carrots, bell pepper, cabbage, mushrooms, and peas. Stir-fry for a few minutes until the vegetables are slightly tender.
Make the Broth:

Pour in the vegetable broth and bring it to a simmer.
Add soy sauce, salt, and pepper to taste. Allow the broth to simmer for about 10-15 minutes until the vegetables are fully cooked.
Assemble the Thukpa:

In serving bowls, place a portion of cooked rice noodles.
Serve:

Ladle the hot vegetable broth over the noodles, making sure to include a variety of vegetables.
Garnish with chopped cilantro and green onions.
Serve hot with lime wedges on the side.






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
    For the Broth:
8 cups vegetable broth
1 onion, thinly sliced
2 carrots, julienned
1 cup cabbage, shredded
1 bell pepper, thinly sliced
1 cup mushrooms, sliced
1/2 cup peas
3 cloves garlic, minced
1-inch ginger, grated
1 tablespoon soy sauce
1 tablespoon vegetable oil
Salt and pepper to taste
For the Noodles:
200g flat rice noodles, cooked according to package instructions
For Garnish:
Fresh cilantro, chopped
Green onions, chopped
Lime wedges
Instructions:
Prepare the Vegetables:

Heat vegetable oil in a large pot. Add minced garlic and grated ginger, sauté for a minute.
Add sliced onions and cook until translucent.
Add carrots, bell pepper, cabbage, mushrooms, and peas. Stir-fry for a few minutes until the vegetables are slightly tender.
Make the Broth:

Pour in the vegetable broth and bring it to a simmer.
Add soy sauce, salt, and pepper to taste. Allow the broth to simmer for about 10-15 minutes until the vegetables are fully cooked.
Assemble the Thukpa:

In serving bowls, place a portion of cooked rice noodles.
Serve:

Ladle the hot vegetable broth over the noodles, making sure to include a variety of vegetables.
Garnish with chopped cilantro and green onions.
Serve hot with lime wedges on the side.
Enjoy your delicious and comforting vegetarian thukpa! Feel free to customize the vegetables and seasonings according to your taste preferences.





`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Thukapa.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
