<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>PaniPitha</title>
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
    <h1>Pani Pitha</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

Pani Pitha is a traditional type of rice cake or dumpling that is commonly prepared in various forms across the Indian subcontinent, particularly in the eastern states of India such as Assam, West Bengal, Odisha, and Bangladesh. Pithas are often associated with festivals and special occasions, and they come in a wide variety of shapes, sizes, and flavors. Here's a general description of pitha</p>

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
  <div class="img"><img src="populardishes/panipitha.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the PaniPitha:</p></div>
    <ul>
      <li>For the Outer Covering (Pitha Dough):

1 cup rice flour
1/2 cup water
A pinch of salt
For the Filling:

1 cup sesame seeds (til)
1/2 cup grated jaggery (or adjust to taste)
1/4 cup grated coconut (optional)
1/2 teaspoon cardamom powder
For Frying:

Oil or ghee</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

    1. Prepare the Filling:

Dry roast the sesame seeds in a pan until they become golden brown. Allow them to cool.
Grind the roasted sesame seeds to make a coarse powder.
In a bowl, mix the ground sesame seeds, grated jaggery, grated coconut (if using), and cardamom powder. This is your filling.
2. Make the Outer Covering (Pitha Dough):

In a pan, bring water to a boil with a pinch of salt.
Slowly add rice flour to the boiling water while continuously stirring to avoid lumps.
Cook the mixture until it forms a soft dough. Turn off the heat and let it cool slightly.
3. Assemble the Pitha:

Take a small portion of the rice dough and flatten it in your hand to form a small disc.
Place a spoonful of the sesame-jaggery filling in the center of the disc.
Fold the edges of the disc to cover the filling and shape it into a ball or a small oval.
4. Cook the Pitha:

Heat oil or ghee in a pan for frying.
Fry the prepared pithas until they turn golden brown and crispy on the outside.
5. Serve:

Drain excess oil and let the pithas cool slightly before serving.
Tilor Pitha is often enjoyed during festivals like Bihu in Assam. The combination of the nutty sesame filling and the sweet jaggery makes it a delightful treat. Adjust the sweetness according to your preference, and feel free to experiment with variations based on your taste.    
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
For the Outer Covering:
1 cup rice flour
1 cup water
A pinch of salt
For the Filling:
1 cup grated jaggery
1 cup grated coconut
For Frying:
Oil or ghee
Instructions:
1. Prepare the Filling:

In a mixing bowl, combine the grated jaggery and grated coconut. Mix well and set aside.
2. Make the Outer Covering (Pitha Dough):

In a pan, bring water to a boil with a pinch of salt.
Slowly add rice flour to the boiling water while continuously stirring to avoid lumps.
Cook the mixture until it forms a soft, smooth dough. Turn off the heat and let it cool slightly.
3. Shape the Pani Pitha:

Take a small portion of the rice dough and roll it into a small ball.
Flatten the ball into a small disc using your palms or a rolling pin.
Place a spoonful of the jaggery-coconut filling in the center of the disc.
Fold the disc in half, covering the filling, and seal the edges to form a crescent or semicircular shape.
4. Cook the Pani Pitha:

Heat oil or ghee in a pan for frying.
Fry the prepared Pani Pithas until they turn golden brown on both sides.
5. Serve:

Drain excess oil and let the Pani Pithas cool slightly before serving.
Pani Pitha is best enjoyed when it is still warm. The combination of the sweet jaggery and coconut filling with the soft outer covering makes it a delightful treat. Adjust the sweetness according to your preference, and feel free to experiment with variations based on your taste.

Remember that regional variations in Pani Pitha recipes may exist, and some families may have their own unique twists on this traditional Assamese dish.`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'pani_pitha.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
