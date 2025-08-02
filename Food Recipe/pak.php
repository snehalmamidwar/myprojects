<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>MysorePak</title>
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
    <h1>MysorePak</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Mysore Pak is a popular South Indian sweet, particularly famous in the region of Karnataka. It is a rich and delicious sweet made primarily with ghee (clarified butter), chickpea flour (besan), and sugar. Here's a traditional Mysore Pak recipe</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/pak.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Mysorepak:</p></div>
    <ul>
      <li>   
1 cup besan (chickpea flour)
1 cup ghee
1.5 cups sugar
1/2 cup water
A pinch of cardamom powder
A handful of chopped nuts (optional)



</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Prepare the Tray:

Grease a tray or plate with ghee and set it aside.
Sift Chickpea Flour:

Sift the besan to ensure there are no lumps.
Make Sugar Syrup:

In a saucepan, combine sugar and water.
Heat the mixture on medium heat, stirring until the sugar dissolves.
Allow the sugar syrup to boil until it reaches a one-string consistency. To check this, take a small amount of syrup between your thumb and forefinger. When you pull them apart, a single string should form.
Prepare Besan Mixture:

In a separate heavy-bottomed pan, heat ghee on low flame.
Add the sifted besan to the ghee and stir continuously to avoid lumps. Keep stirring until the besan is well-cooked and releases a pleasant aroma.
Combine Besan and Sugar Syrup:

Slowly pour the hot sugar syrup into the besan mixture while continuously stirring. Be cautious, as the mixture will be hot.
Cook the Mixture:

Continue cooking the mixture on low heat, stirring continuously to avoid lumps.
Keep adding ghee little by little as you stir. The mixture will start to thicken.
Add Cardamom Powder:

Once the mixture reaches a consistency where it leaves the sides of the pan and becomes frothy, add a pinch of cardamom powder and mix well.
Transfer to Tray:

Pour the mixture onto the greased tray and spread it evenly.
Cut into Pieces:

Allow it to cool for a few minutes but cut it into pieces while it's still warm. This makes it easier to cut.
Garnish (Optional):

Garnish with chopped nuts if desired.
Cool Completely:

Let the Mysore Pak cool completely before separating the pieces.
Your Mysore Pak is ready to be enjoyed. It has a melt-in-the-mouth texture and a rich, sweet flavor. Store it in an airtight container once it has cooled completely.
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
1 cup besan (chickpea flour)
1 cup ghee
1.5 cups sugar
1/2 cup water
A pinch of cardamom powder
A handful of chopped nuts (optional)
Instructions:
Prepare the Tray:

Grease a tray or plate with ghee and set it aside.
Sift Chickpea Flour:

Sift the besan to ensure there are no lumps.
Make Sugar Syrup:

In a saucepan, combine sugar and water.
Heat the mixture on medium heat, stirring until the sugar dissolves.
Allow the sugar syrup to boil until it reaches a one-string consistency. To check this, take a small amount of syrup between your thumb and forefinger. When you pull them apart, a single string should form.
Prepare Besan Mixture:

In a separate heavy-bottomed pan, heat ghee on low flame.
Add the sifted besan to the ghee and stir continuously to avoid lumps. Keep stirring until the besan is well-cooked and releases a pleasant aroma.
Combine Besan and Sugar Syrup:

Slowly pour the hot sugar syrup into the besan mixture while continuously stirring. Be cautious, as the mixture will be hot.
Cook the Mixture:

Continue cooking the mixture on low heat, stirring continuously to avoid lumps.
Keep adding ghee little by little as you stir. The mixture will start to thicken.
Add Cardamom Powder:

Once the mixture reaches a consistency where it leaves the sides of the pan and becomes frothy, add a pinch of cardamom powder and mix well.
Transfer to Tray:

Pour the mixture onto the greased tray and spread it evenly.
Cut into Pieces:

Allow it to cool for a few minutes but cut it into pieces while it's still warm. This makes it easier to cut.
Garnish (Optional):

Garnish with chopped nuts if desired.
Cool Completely:

Let the Mysore Pak cool completely before separating the pieces.
Your Mysore Pak is ready to be enjoyed. It has a melt-in-the-mouth texture and a rich, sweet flavor. Store it in an airtight container once it has cooled completely.
`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'MysorePak.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
