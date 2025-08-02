<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>gachak</title>
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
    <h1>Gachak</h1>
    <h4>Description</h4>
    <div class="desc"><p>
    
    Ghachak is a traditional sweet from Himachal Pradesh, often made during festivals and special occasions. It's a crispy and brittle sweet made with ingredients like jaggery, ghee (clarified butter), and sesame seeds. Here's a basic recipe for making Ghachak</p>    </div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/gajak.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients:</h2>
    <div><p>   
    
    1 cup sesame seeds
1 cup jaggery, grated
2 tablespoons ghee (clarified butter)
1/2 teaspoon cardamom powder
A pinch of salt (optional)
</p>

    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p> Dry Roast Sesame Seeds:

In a pan, dry roast the sesame seeds over medium heat until they become golden brown and release a nutty aroma. Keep stirring to ensure even roasting.
Prepare Jaggery Syrup:

In a separate pan, add grated jaggery and a little water.
Heat the jaggery over medium heat until it melts and forms a syrup. Stir continuously to prevent burning.
Check Jaggery Syrup Consistency:

To check the consistency of the jaggery syrup, drop a small amount into a bowl of water. It should form a hard ball.
Combine Sesame Seeds with Jaggery Syrup:

Once the jaggery syrup reaches the desired consistency, add the roasted sesame seeds to the syrup.
Mix well to coat the sesame seeds evenly with the jaggery syrup.
Add Ghee and Cardamom Powder:

Add ghee and cardamom powder to the sesame and jaggery mixture. Mix thoroughly.
Set the Mixture:

Transfer the mixture to a greased plate or a surface lined with parchment paper.
Quickly spread and flatten the mixture using a greased rolling pin or spatula.
Cut into Pieces:

While the mixture is still warm, cut it into desired shapes or squares using a knife.
Let it Cool:

Allow the Ghachak to cool completely and harden.
Serve:

Once completely cooled and hardened, break the Ghachak along the cut lines.
Serve the crispy Ghachak as a sweet treat during festivals or special occasions.
Enjoy the delightful crunch and sweetness of Himachali Ghachak. Adjust the sweetness according to your taste preferences and feel free to add chopped nuts for extra texture and flavor if desired.

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
1 cup sesame seeds
1 cup jaggery, grated
2 tablespoons ghee (clarified butter)
1/2 teaspoon cardamom powder
A pinch of salt (optional)
Instructions:
Dry Roast Sesame Seeds:

In a pan, dry roast the sesame seeds over medium heat until they become golden brown and release a nutty aroma. Keep stirring to ensure even roasting.
Prepare Jaggery Syrup:
In a separate pan, add grated jaggery and a little water.
Heat the jaggery over medium heat until it melts and forms a syrup. Stir continuously to prevent burning.
Check Jaggery Syrup Consistency:To check the consistency of the jaggery syrup, drop a small amount into a bowl of water. It should form a hard ball.
Combine Sesame Seeds with Jaggery Syrup:Once the jaggery syrup reaches the desired consistency, add the roasted sesame seeds to the syrup.
Mix well to coat the sesame seeds evenly with the jaggery syrup.
Add Ghee and Cardamom Powder:Add ghee and cardamom powder to the sesame and jaggery mixture. Mix thoroughly.
Set the Mixture:Transfer the mixture to a greased plate or a surface lined with parchment paper.
Quickly spread and flatten the mixture using a greased rolling pin or spatula.
Cut into Pieces:While the mixture is still warm, cut it into desired shapes or squares using a knife.
Let it Cool:Allow the Ghachak to cool completely and harden.
Serve:Once completely cooled and hardened, break the Ghachak along the cut lines.
Serve the crispy Ghachak as a sweet treat during festivals or special occasions.

 `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'gachak_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>

</body>
</html>
