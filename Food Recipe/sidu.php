<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>sidu</title>
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
    <h1>Sidu</h1>
    <h4>Description</h4>
    <div class="desc"><p>
    Sidu is a traditional steamed bread from the state of Himachal Pradesh, India. It's often made during special occasions and festivals. Sidu is a stuffed bread, and the filling typically includes ingredients like wheat flour, ghee (clarified butter), jaggery, and sometimes dry fruits. Here's a basic recipe for making Sidu</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/sidu.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>   
For the Dough:

2 cups wheat flour
1/2 teaspoon baking soda
Salt to taste
Water (as needed)
For the Filling:

1 cup grated jaggery
1/4 cup ghee (clarified butter)
1/2 cup crushed dry fruits (like almonds and walnuts)
1 teaspoon cardamom powder
</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions:
For the Dough:
Prepare the Dough:
In a large mixing bowl, combine wheat flour, baking soda, and a pinch of salt.
Gradually add water and knead to form a soft and smooth dough. Allow it to rest for at least 30 minutes.
For the Filling:
Prepare the Filling:
In a separate bowl, mix grated jaggery, ghee, crushed dry fruits, and cardamom powder to form a uniform mixture.
Assembling and Steaming:
Divide the Dough:

Divide the rested dough into small lemon-sized balls.
Roll Out the Dough:

Take one dough ball and roll it out into a small disc on a floured surface.
Add the Filling:

Place a spoonful of the jaggery and dry fruit mixture in the center of the rolled-out dough.
Seal the Edges:

Fold the edges of the dough over the filling and seal them properly, ensuring no filling is visible.
Steam the Sidu:

Place the filled dough balls in a steamer and steam for approximately 30-40 minutes or until the Sidu is cooked through.
Serve:

Once cooked, let the Sidu cool for a few minutes before serving.
Serve Sidu with ghee or yogurt.
Enjoy the delightful flavors of Himachali Sidu, a special treat that captures the essence of Himachali cuisine. Adjust the sweetness according to your taste preferences and experiment with different dry fruits for added richness.

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
    Ingredients:
For the Dough:

2 cups wheat flour
1/2 teaspoon baking soda
Salt to taste
Water (as needed)
For the Filling:

1 cup grated jaggery
1/4 cup ghee (clarified butter)
1/2 cup crushed dry fruits (like almonds and walnuts)
1 teaspoon cardamom powder
Instructions:
For the Dough:
Prepare the Dough:
In a large mixing bowl, combine wheat flour, baking soda, and a pinch of salt.
Gradually add water and knead to form a soft and smooth dough. Allow it to rest for at least 30 minutes.
For the Filling:
Prepare the Filling:
In a separate bowl, mix grated jaggery, ghee, crushed dry fruits, and cardamom powder to form a uniform mixture.
Assembling and Steaming:
Divide the Dough:

Divide the rested dough into small lemon-sized balls.
Roll Out the Dough:

Take one dough ball and roll it out into a small disc on a floured surface.
Add the Filling:

Place a spoonful of the jaggery and dry fruit mixture in the center of the rolled-out dough.
Seal the Edges:

Fold the edges of the dough over the filling and seal them properly, ensuring no filling is visible.
Steam the Sidu:

Place the filled dough balls in a steamer and steam for approximately 30-40 minutes or until the Sidu is cooked through.
Serve:

Once cooked, let the Sidu cool for a few minutes before serving.
Serve Sidu with ghee or yogurt.
Enjoy the delightful flavors of Himachali Sidu, a special treat that captures the essence of Himachali cuisine. Adjust the sweetness according to your taste preferences and experiment with different dry fruits for added richness.  `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'sidu_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>

</body>
</html>
