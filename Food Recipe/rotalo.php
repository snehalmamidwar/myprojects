<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>rotalo</title>
  <link rel="stylesheet" href="populardishes/daalkhichdi.css">
</head>
<body>
<!-- Daal khichdi -->
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
    <h1>Bajara Rotalo and Undhyu</h1>
    <h4>Description</h4>
    <div class="desc"><p>
    Undhiyu is a popular and elaborate Gujarati mixed vegetable curry. It is typically made during the winter season when fresh vegetables are abundant. Undhiyu is known for its rich and aromatic flavors, and it often includes a variety of winter vegetables, spices, and sometimes dumplings (muthia).</p>    <div class="serve-time"><p><b>Servings:</b> 2 | <b>Timing:</b> 25 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/dabeli.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the rotalo and undhyu:</p></div>
    <ul>
      <li>Ingredients for bajara rotalo:
      2 cups bajra (pearl millet) flour
Water (as needed)
Salt to taste
<br><br><br>
For Undhyu:
For the Curry:

1 cup fresh tuvar (pigeon peas) beans, shelled
1 cup fresh toor (split pigeon peas) dal
1 cup small eggplants, slit
1 cup baby potatoes, peeled
1 cup sweet potatoes, peeled and cubed
1 cup purple yam (ratalu), peeled and cubed
1 cup raw bananas, peeled and cubed
1 cup surti papdi (broad beans), stringed and chopped
1 cup fresh green garlic, chopped
1 cup fresh coriander leaves, chopped
1 cup methi (fenugreek) muthia (dumplings), optional
1/4 cup ginger-green chili paste
2 tablespoons groundnut oil
For the Masala Paste:

1 cup grated coconut
1/2 cup fresh coriander leaves
1/4 cup sesame seeds
1 tablespoon poppy seeds
1 tablespoon ginger-green chili paste
1 tablespoon garam masala
1 tablespoon sugar
Salt to taste
</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions For Rotalo:<br><br>
Prepare the Dough:

In a large mixing bowl, gradually add water to the bajra flour while kneading it simultaneously.
Knead the mixture into a soft and pliable dough. Add salt to taste.
Shape the Rotlo:

Take a small portion of the dough and shape it into a ball.
Flatten the ball using your palms to create a disc-like shape (rotlo).
Cooking the Rotlo:

Heat a griddle or tawa on medium heat.
Place the rotlo on the hot griddle and cook on both sides until it gets a slightly browned appearance.
Press the edges while cooking to ensure even cooking.
Serve hot with ghee, yogurt, or any Gujarati curry.
<br><br>

Instructions for undhyu:
Prepare the Masala Paste:

Grind all the masala paste ingredients together to form a smooth paste.
Prepare the Muthia:

If using methi muthia, prepare them as per the instructions on the packet.
Prepare the Curry:

In a large mixing bowl, mix the tuvar beans, toor dal, eggplants, baby potatoes, sweet potatoes, yam, raw bananas, surti papdi, green garlic, coriander leaves, and muthia.
Add the ginger-green chili paste, groundnut oil, and the prepared masala paste. Mix well.
Cooking Undhiyu:

Transfer the mixture to a heavy-bottomed pan or an earthen pot.
Cook on low heat, stirring occasionally, until the vegetables are tender and well-cooked.
Serve:

Garnish with fresh coriander leaves and serve hot with puris or rotis.
These recipes capture the essence of authentic Gujarati cuisine. Enjoy the wholesome flavors of Bajra no Rotlo and Undhiyu!





</p></div>
 
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
    Bajra no Rotlo:
Ingredients:
2 cups bajra (pearl millet) flour
Water (as needed)
Salt to taste
Instructions:
Prepare the Dough:

In a large mixing bowl, gradually add water to the bajra flour while kneading it simultaneously.
Knead the mixture into a soft and pliable dough. Add salt to taste.
Shape the Rotlo:

Take a small portion of the dough and shape it into a ball.
Flatten the ball using your palms to create a disc-like shape (rotlo).
Cooking the Rotlo:

Heat a griddle or tawa on medium heat.
Place the rotlo on the hot griddle and cook on both sides until it gets a slightly browned appearance.
Press the edges while cooking to ensure even cooking.
Serve:

Serve hot with ghee, yogurt, or any Gujarati curry.
Undhiyu:
Ingredients:
For the Curry:

1 cup fresh tuvar (pigeon peas) beans, shelled
1 cup fresh toor (split pigeon peas) dal
1 cup small eggplants, slit
1 cup baby potatoes, peeled
1 cup sweet potatoes, peeled and cubed
1 cup purple yam (ratalu), peeled and cubed
1 cup raw bananas, peeled and cubed
1 cup surti papdi (broad beans), stringed and chopped
1 cup fresh green garlic, chopped
1 cup fresh coriander leaves, chopped
1 cup methi (fenugreek) muthia (dumplings), optional
1/4 cup ginger-green chili paste
2 tablespoons groundnut oil
For the Masala Paste:

1 cup grated coconut
1/2 cup fresh coriander leaves
1/4 cup sesame seeds
1 tablespoon poppy seeds
1 tablespoon ginger-green chili paste
1 tablespoon garam masala
1 tablespoon sugar
Salt to taste
Instructions:
Prepare the Masala Paste:

Grind all the masala paste ingredients together to form a smooth paste.
Prepare the Muthia:

If using methi muthia, prepare them as per the instructions on the packet.
Prepare the Curry:

In a large mixing bowl, mix the tuvar beans, toor dal, eggplants, baby potatoes, sweet potatoes, yam, raw bananas, surti papdi, green garlic, coriander leaves, and muthia.
Add the ginger-green chili paste, groundnut oil, and the prepared masala paste. Mix well.
Cooking Undhiyu:

Transfer the mixture to a heavy-bottomed pan or an earthen pot.
Cook on low heat, stirring occasionally, until the vegetables are tender and well-cooked.
Serve:

Garnish with fresh coriander leaves and serve hot with puris or rotis.
These recipes capture the essence of authentic Gujarati cuisine. Enjoy the wholesome flavors of Bajra no Rotlo and Undhiyu!
   `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Bajare No Rotalo n Undhyu_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>

</body>
</html>
