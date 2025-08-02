<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Babru</title>
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
    <h1>Babru</h1>
    <h4>Description</h4>
    <div class="desc"><p>
    
Babru is a traditional deep-fried bread from Himachal Pradesh, India. It's often enjoyed with various side dishes and is especially popular during festivals and special occasions. Here's a basic recipe for making Babru</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/babru.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients:</h2>
    <div><p>   
For the Dough:

2 cups wheat flour
1/2 teaspoon baking powder
Salt to taste
Water (as needed)
For the Filling:

1 cup soaked and coarsely ground urad dal (black gram lentils)
1 teaspoon grated ginger
1 green chili, finely chopped
1/2 teaspoon cumin seeds
A pinch of asafoetida (hing)
Salt to taste
For Deep Frying:

Oil
</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
For the Dough:
Prepare the Dough:
In a large mixing bowl, combine wheat flour, baking powder, and a pinch of salt.
Gradually add water and knead to form a soft and smooth dough. Allow it to rest for at least 30 minutes.
For the Filling:
Prepare the Filling:
Soak urad dal in water for a few hours. Drain the water and coarsely grind the dal.
In a bowl, mix the coarsely ground urad dal with grated ginger, chopped green chili, cumin seeds, asafoetida, and salt.
Assembling and Frying:
Divide the Dough:

Divide the rested dough into small lemon-sized balls.
Roll Out the Dough:

Take one dough ball and roll it out into a small disc on a floured surface.
Add the Filling:

Place a spoonful of the urad dal mixture in the center of the rolled-out dough.
Seal the Edges:

Fold the edges of the dough over the filling and seal them properly, ensuring no filling is visible.
Flatten and Deep Fry:

Gently flatten the filled dough ball using your palms.
Heat oil in a deep pan for frying. Carefully slide the babru into the hot oil.
Fry Until Golden Brown:

Fry the babru on medium heat until it turns golden brown on both sides.
Drain Excess Oil:

Once fried, remove the babru from the oil and place it on absorbent paper to drain excess oil.
Serve:

Serve Babru hot with a side of yogurt, pickles, or any other accompaniment of your choice.
Enjoy the delicious flavors of Himachali Babru, a delightful treat that's sure to please your taste buds.







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
1/2 teaspoon baking powder
Salt to taste
Water (as needed)
For the Filling:

1 cup soaked and coarsely ground urad dal (black gram lentils)
1 teaspoon grated ginger
1 green chili, finely chopped
1/2 teaspoon cumin seeds
A pinch of asafoetida (hing)
Salt to taste
For Deep Frying:

Oil
Instructions:
For the Dough:
Prepare the Dough:
In a large mixing bowl, combine wheat flour, baking powder, and a pinch of salt.
Gradually add water and knead to form a soft and smooth dough. Allow it to rest for at least 30 minutes.
For the Filling:
Prepare the Filling:
Soak urad dal in water for a few hours. Drain the water and coarsely grind the dal.
In a bowl, mix the coarsely ground urad dal with grated ginger, chopped green chili, cumin seeds, asafoetida, and salt.
Assembling and Frying:
Divide the Dough:

Divide the rested dough into small lemon-sized balls.
Roll Out the Dough:

Take one dough ball and roll it out into a small disc on a floured surface.
Add the Filling:

Place a spoonful of the urad dal mixture in the center of the rolled-out dough.
Seal the Edges:

Fold the edges of the dough over the filling and seal them properly, ensuring no filling is visible.
Flatten and Deep Fry:

Gently flatten the filled dough ball using your palms.
Heat oil in a deep pan for frying. Carefully slide the babru into the hot oil.
Fry Until Golden Brown:

Fry the babru on medium heat until it turns golden brown on both sides.
Drain Excess Oil:

Once fried, remove the babru from the oil and place it on absorbent paper to drain excess oil.
Serve:

Serve Babru hot with a side of yogurt, pickles, or any other accompaniment of your choice.
Enjoy the delicious flavors of Himachali Babru, a delightful treat that's sure to please your taste buds.





 `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'babru_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>

</body>
</html>
