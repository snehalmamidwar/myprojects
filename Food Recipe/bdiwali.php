<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>bdiwali</title>
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
    <h1>Bengoli diwali sweets</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
    recipes for Roshogolla (Rasgulla), Sandesh, and Channar Jalebi, which are popular Bengali sweets. Here are recipes for each:
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
  <div class="img"><img src="populardishes/diwali.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Bengoli Diwali Sweets:</p></div>
    <ul>
      <li>   

Rasgulla (Roshogolla):
Ingredients:

1 liter full-fat milk
2 tablespoons lemon juice or vinegar
1 cup sugar
4 cups water
A pinch of cardamom powder (optional)
<br> <br>
Sandesh:
Ingredients:

2 cups paneer (chenna)
1/2 cup powdered sugar
A pinch of cardamom powder
Saffron strands for garnish (optional)
<br><br>
Channar Jalebi:
Ingredients:

2 cups paneer (chenna)
1/4 cup all-purpose flour (maida)
A pinch of baking powder
1/4 cup ghee (clarified butter) for frying



</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions for Rashogolla:

Boil the milk in a heavy-bottomed pan.
Once it boils, add lemon juice or vinegar gradually until the milk curdles. Strain the whey using a muslin cloth.
Rinse the chenna (paneer) under cold water to remove any traces of lemon or vinegar.
Hang the chenna for about 1 hour to drain excess water.
Knead the chenna until it becomes smooth and soft.
Make small balls from the kneaded chenna.
In a separate pot, mix sugar and water and bring it to a boil. Add cardamom powder if desired.
Add the chenna balls to the boiling sugar syrup and cover the pot. Cook for 15-20 minutes.
Let them cool and refrigerate before serving.
<br><br>

Instructions for sandesh: 

Knead the paneer until smooth.
Add powdered sugar and cardamom powder to the paneer and mix well.
Cook the mixture on low heat until it thickens and leaves the sides of the pan.
Remove from heat and let it cool slightly.
Shape the mixture into small, flat discs or any desired shape.
Garnish with saffron strands if desired.
Allow it to cool completely before serving.
Channar Jalebi Instructions:
<br><br>

Knead the paneer until it becomes smooth.
Add all-purpose flour and baking powder to the paneer and mix well.
Heat ghee in a pan for frying.
Shape the paneer mixture into jalebi-like spirals using a piping bag or a cloth with a small hole.
Fry the jalebis in the hot ghee until they turn golden brown.
Remove excess ghee by placing the jalebis on absorbent paper.
Serve warm.
These Bengali sweets are delicious and perfect for festive occasions. Adjust the sugar quantities according to your taste preferences. Enjoy making and sharing these treats!












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
  
It seems like you're asking for recipes for Roshogolla (Rasgulla), Sandesh, and Channar Jalebi, which are popular Bengali sweets. Here are recipes for each:

Rasgulla (Roshogolla):
Ingredients:

1 liter full-fat milk
2 tablespoons lemon juice or vinegar
1 cup sugar
4 cups water
A pinch of cardamom powder (optional)
Instructions:

Boil the milk in a heavy-bottomed pan.
Once it boils, add lemon juice or vinegar gradually until the milk curdles. Strain the whey using a muslin cloth.
Rinse the chenna (paneer) under cold water to remove any traces of lemon or vinegar.
Hang the chenna for about 1 hour to drain excess water.
Knead the chenna until it becomes smooth and soft.
Make small balls from the kneaded chenna.
In a separate pot, mix sugar and water and bring it to a boil. Add cardamom powder if desired.
Add the chenna balls to the boiling sugar syrup and cover the pot. Cook for 15-20 minutes.
Let them cool and refrigerate before serving.
Sandesh:
Ingredients:

2 cups paneer (chenna)
1/2 cup powdered sugar
A pinch of cardamom powder
Saffron strands for garnish (optional)
Instructions:

Knead the paneer until smooth.
Add powdered sugar and cardamom powder to the paneer and mix well.
Cook the mixture on low heat until it thickens and leaves the sides of the pan.
Remove from heat and let it cool slightly.
Shape the mixture into small, flat discs or any desired shape.
Garnish with saffron strands if desired.
Allow it to cool completely before serving.
Channar Jalebi:
Ingredients:

2 cups paneer (chenna)
1/4 cup all-purpose flour (maida)
A pinch of baking powder
1/4 cup ghee (clarified butter) for frying
Instructions:

Knead the paneer until it becomes smooth.
Add all-purpose flour and baking powder to the paneer and mix well.
Heat ghee in a pan for frying.
Shape the paneer mixture into jalebi-like spirals using a piping bag or a cloth with a small hole.
Fry the jalebis in the hot ghee until they turn golden brown.
Remove excess ghee by placing the jalebis on absorbent paper.
Serve warm.
These Bengali sweets are delicious and perfect for festive occasions. Adjust the sugar quantities according to your taste preferences. Enjoy making and sharing these treats!




`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Bdiwali_Sweets.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
