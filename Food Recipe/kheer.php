<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>kheer</title>
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
    <h1>kheer</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Punjabi Kheer, also known as Rice Kheer or Chawal ki Kheer, is a classic Indian rice pudding that's rich, creamy, and flavored with cardamom. Here's a simple recipe for making Punjabi Kheer</p></div>      <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/kheer.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p> For the Kheer:</p></div>
    <ul>
       
1/2 cup basmati rice
1 liter full-fat milk
1 cup sugar (adjust to taste)
1/2 teaspoon cardamom powder
A pinch of saffron strands (optional)
2 tablespoons chopped nuts (almonds, cashews, pistachios), for garnish
1 tablespoon raisins (optional)
1 teaspoon ghee (clarified butter)


</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Wash and Soak Rice:

Rinse the basmati rice under running water until the water runs clear. Soak the rice in water for about 30 minutes.
Cook Rice:

Drain the soaked rice and set it aside.
In a heavy-bottomed pan, bring the milk to a boil. Add the drained rice to the boiling milk.
Simmer:

Reduce the heat to low and simmer the rice in milk, stirring frequently to prevent sticking. Cook until the rice is soft and the milk has thickened. This can take about 30-40 minutes.
Add Sugar:

Once the rice is cooked and the milk has thickened, add sugar to the kheer. Stir well to dissolve the sugar.
Add Cardamom Powder and Saffron:

Add cardamom powder and saffron strands (if using) to the kheer. Mix well. Saffron adds a lovely color and aroma to the kheer.
Roast Nuts:

In a separate pan, heat ghee and roast the chopped nuts until they are golden brown. Add raisins if using and fry until they plump up.
Garnish:

Add the roasted nuts and raisins to the kheer. Keep some aside for garnishing.
Serve Warm or Chilled:

Allow the kheer to cool to room temperature before refrigerating. Kheer can be served warm or chilled, depending on your preference.
Garnish Before Serving:

Garnish with the remaining roasted nuts before serving.
Enjoy this creamy and delicious Punjabi Kheer as a dessert or during festive occasions!







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
1/2 cup basmati rice
1 liter full-fat milk
1 cup sugar (adjust to taste)
1/2 teaspoon cardamom powder
A pinch of saffron strands (optional)
2 tablespoons chopped nuts (almonds, cashews, pistachios), for garnish
1 tablespoon raisins (optional)
1 teaspoon ghee (clarified butter)
Instructions:
Wash and Soak Rice:

Rinse the basmati rice under running water until the water runs clear. Soak the rice in water for about 30 minutes.
Cook Rice:

Drain the soaked rice and set it aside.
In a heavy-bottomed pan, bring the milk to a boil. Add the drained rice to the boiling milk.
Simmer:

Reduce the heat to low and simmer the rice in milk, stirring frequently to prevent sticking. Cook until the rice is soft and the milk has thickened. This can take about 30-40 minutes.
Add Sugar:

Once the rice is cooked and the milk has thickened, add sugar to the kheer. Stir well to dissolve the sugar.
Add Cardamom Powder and Saffron:

Add cardamom powder and saffron strands (if using) to the kheer. Mix well. Saffron adds a lovely color and aroma to the kheer.
Roast Nuts:

In a separate pan, heat ghee and roast the chopped nuts until they are golden brown. Add raisins if using and fry until they plump up.
Garnish:

Add the roasted nuts and raisins to the kheer. Keep some aside for garnishing.
Serve Warm or Chilled:

Allow the kheer to cool to room temperature before refrigerating. Kheer can be served warm or chilled, depending on your preference.
Garnish Before Serving:

Garnish with the remaining roasted nuts before serving.
Enjoy this creamy and delicious Punjabi Kheer as a dessert or during festive occasions!







`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Kheer.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
