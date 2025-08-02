<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Ghevar</title>
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
    <h1>Ghevar</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Ghevar is a traditional Rajasthani sweet that is often prepared during festivals, especially during Teej and Raksha Bandhan. It is known for its intricate and lacy appearance. Here's a basic recipe for making Ghevar</p></div>    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/ghevar.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Ghevar:</p></div>
    <ul>
      <li>   
For the Batter:

2 cups all-purpose flour (maida)
1/2 cup ghee (clarified butter), melted
1/2 cup chilled milk
1/2 cup ice-cold water
For Sugar Syrup:

2 cups sugar
1 cup water
A pinch of saffron strands (optional)
1/2 teaspoon cardamom powder
For Garnishing:

Chopped nuts (almonds, pistachios) for garnish
Ghee for deep frying



</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions:
Prepare the Batter:

In a large mixing bowl, combine all-purpose flour and melted ghee.
Gradually add chilled milk while continuously stirring to avoid lumps.
Slowly add ice-cold water and mix until you get a smooth, lump-free batter with a pouring consistency.
Fry the Ghevar:

Heat ghee in a wide, heavy-bottomed pan. Make sure the ghee is not too hot.
Pour a ladleful of batter through the hole in the center of the pan, allowing it to spread and form a circular shape.
Fry until the edges become crispy and golden. Ghevar should have a porous and lacy structure.
Remove from Ghee:

Once fried, carefully lift the Ghevar from the ghee, allowing excess ghee to drain off.
Prepare Sugar Syrup:

In a separate pan, combine sugar and water to make a sugar syrup.
Add saffron strands (if using) and cardamom powder. Boil until it reaches a one-string consistency.
Soak the Ghevar:

Immerse the fried Ghevar in the warm sugar syrup for a few seconds. Allow it to soak in the syrup, ensuring it is well-coated.
Garnish:

Place the soaked Ghevar on a plate and garnish with chopped nuts.
Serve:

Ghevar is best served at room temperature. As it cools, the sugar syrup crystallizes, giving it a delightful texture.
Enjoy the rich and festive flavors of Ghevar, a dessert that beautifully captures the essence of Rajasthani cuisine.






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
For the Batter:

2 cups all-purpose flour (maida)
1/2 cup ghee (clarified butter), melted
1/2 cup chilled milk
1/2 cup ice-cold water
For Sugar Syrup:

2 cups sugar
1 cup water
A pinch of saffron strands (optional)
1/2 teaspoon cardamom powder
For Garnishing:

Chopped nuts (almonds, pistachios) for garnish
Ghee for deep frying
Instructions:
Prepare the Batter:

In a large mixing bowl, combine all-purpose flour and melted ghee.
Gradually add chilled milk while continuously stirring to avoid lumps.
Slowly add ice-cold water and mix until you get a smooth, lump-free batter with a pouring consistency.
Fry the Ghevar:

Heat ghee in a wide, heavy-bottomed pan. Make sure the ghee is not too hot.
Pour a ladleful of batter through the hole in the center of the pan, allowing it to spread and form a circular shape.
Fry until the edges become crispy and golden. Ghevar should have a porous and lacy structure.
Remove from Ghee:

Once fried, carefully lift the Ghevar from the ghee, allowing excess ghee to drain off.
Prepare Sugar Syrup:

In a separate pan, combine sugar and water to make a sugar syrup.
Add saffron strands (if using) and cardamom powder. Boil until it reaches a one-string consistency.
Soak the Ghevar:

Immerse the fried Ghevar in the warm sugar syrup for a few seconds. Allow it to soak in the syrup, ensuring it is well-coated.
Garnish:

Place the soaked Ghevar on a plate and garnish with chopped nuts.
Serve:

Ghevar is best served at room temperature. As it cools, the sugar syrup crystallizes, giving it a delightful texture.
Enjoy the rich and festive flavors of Ghevar, a dessert that beautifully captures the essence of Rajasthani cuisine.






`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Ghevar.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
