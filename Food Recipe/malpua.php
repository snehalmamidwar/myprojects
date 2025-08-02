<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Malpua</title>
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
    <h1>Malpua N Halwa</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Malpua is a delectable Indian dessert that holds a special place in the heart of traditional festivals and celebrations. Originating from the Indian subcontinent, Malpua is a sweet, deep-fried pancake that boasts a delightful combination of flavors and textures. The batter is made from all-purpose flour, milk powder, semolina, and cardamom powder, resulting in a rich and aromatic base. Just before frying, melted ghee and saffron strands may be added to enhance the taste and fragrance.</p></div>  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/malpua.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Malpua n Halwa:</p></div>
    <ul>
      <li>   
For Malpua:

1 cup all-purpose flour (maida)
1/2 cup milk powder
1/4 cup semolina (sooji)
1 cup milk
1/4 cup ghee (clarified butter)
A pinch of cardamom powder
A pinch of saffron strands (optional)
Oil or ghee for frying
For Sugar Syrup:

1 cup sugar
1/2 cup water
A few strands of saffron
1/2 teaspoon cardamom powder
<br><br>

Ingredients for halwa:
1 cup semolina (sooji)
1/2 cup ghee (clarified butter)
1 cup sugar
2 cups water
A pinch of cardamom powder
Chopped nuts for garnish



</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p> 
Instructions for malpua:
Prepare Malpua Batter:

In a mixing bowl, combine all-purpose flour, milk powder, semolina, and cardamom powder.
Add milk gradually and whisk to form a smooth batter. The consistency should be like pancake batter.
Let the batter rest for 30 minutes.
Add melted ghee and saffron strands to the batter just before frying.
Make Sugar Syrup:

In a saucepan, combine sugar and water to make a sugar syrup.
Add saffron strands and cardamom powder. Boil until it reaches a one-string consistency. Keep the syrup warm.
Fry Malpua:

Heat oil or ghee in a pan for frying.
Pour a small ladleful of batter into the hot oil to form a pancake-like shape.
Fry until both sides are golden brown.
Soak in Sugar Syrup:

Immediately transfer the fried Malpua into the warm sugar syrup.
Allow it to soak for a minute, ensuring it's well-coated.
Garnish:

Garnish with chopped nuts, and serve warm.
Punjabi Halwa Recipe:
<br><br>
Instructions for halwa:
Roast Semolina:

In a heavy-bottomed pan, heat ghee and roast semolina until it becomes golden brown. Keep stirring to avoid burning.
Make Sugar Syrup:

In a separate pan, combine sugar and water to make a sugar syrup.
Boil until it reaches a one-string consistency.
Combine Semolina and Sugar Syrup:

Slowly add the sugar syrup to the roasted semolina, stirring continuously to avoid lumps.
Cook Halwa:

Continue cooking and stirring until the mixture thickens and the semolina is well-cooked.
Add cardamom powder and mix well.
Garnish:

Garnish with chopped nuts.
Serve:

Serve the Punjabi Halwa warm.
Enjoy these delightful and authentic Punjabi dessert



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
For Malpua:

1 cup all-purpose flour (maida)
1/2 cup milk powder
1/4 cup semolina (sooji)
1 cup milk
1/4 cup ghee (clarified butter)
A pinch of cardamom powder
A pinch of saffron strands (optional)
Oil or ghee for frying
For Sugar Syrup:

1 cup sugar
1/2 cup water
A few strands of saffron
1/2 teaspoon cardamom powder
Instructions:
Prepare Malpua Batter:

In a mixing bowl, combine all-purpose flour, milk powder, semolina, and cardamom powder.
Add milk gradually and whisk to form a smooth batter. The consistency should be like pancake batter.
Let the batter rest for 30 minutes.
Add melted ghee and saffron strands to the batter just before frying.
Make Sugar Syrup:

In a saucepan, combine sugar and water to make a sugar syrup.
Add saffron strands and cardamom powder. Boil until it reaches a one-string consistency. Keep the syrup warm.
Fry Malpua:

Heat oil or ghee in a pan for frying.
Pour a small ladleful of batter into the hot oil to form a pancake-like shape.
Fry until both sides are golden brown.
Soak in Sugar Syrup:

Immediately transfer the fried Malpua into the warm sugar syrup.
Allow it to soak for a minute, ensuring it's well-coated.
Garnish:

Garnish with chopped nuts, and serve warm.
Punjabi Halwa Recipe:
Ingredients:
1 cup semolina (sooji)
1/2 cup ghee (clarified butter)
1 cup sugar
2 cups water
A pinch of cardamom powder
Chopped nuts for garnish
Instructions:
Roast Semolina:

In a heavy-bottomed pan, heat ghee and roast semolina until it becomes golden brown. Keep stirring to avoid burning.
Make Sugar Syrup:

In a separate pan, combine sugar and water to make a sugar syrup.
Boil until it reaches a one-string consistency.
Combine Semolina and Sugar Syrup:

Slowly add the sugar syrup to the roasted semolina, stirring continuously to avoid lumps.
Cook Halwa:

Continue cooking and stirring until the mixture thickens and the semolina is well-cooked.
Add cardamom powder and mix well.
Garnish:

Garnish with chopped nuts.
Serve:

Serve the Punjabi Halwa warm.
Enjoy these delightful and authentic Punjabi desserts!



`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'halwa And malpua.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
