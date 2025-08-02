<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>prasad</title>
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
    <h1>Karah Prashad</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Karah Prashad, also known as Kada Prashad or simply Prashad, is a sacred sweet offering in Sikhism. It is commonly prepared and served in Gurdwaras during religious ceremonies and is given to all visitors as a sign of equality and humility. Here's a basic recipe for making Karah Prashad</p></div>    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/prasad.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Kara Prashad:</p></div>
    <ul>
      <li>   
1 cup whole wheat flour (atta)
1 cup sugar
1 cup ghee (clarified butter)
4 cups water



</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions:
Prepare the Ingredients:

Measure out the whole wheat flour, sugar, ghee, and water.
Roast the Flour:

Heat a heavy-bottomed pan or karahi on low to medium heat.
Add the whole wheat flour (atta) and roast it in ghee, continuously stirring to prevent burning.
Roast until the flour turns golden brown, and a rich aroma emanates. This step is crucial for the flavor of Karah Prashad.
Prepare Sugar Syrup:

In a separate pan, combine sugar and water to make a sugar syrup.
Stir well until the sugar dissolves, creating a smooth syrup.
Combine Roasted Flour and Sugar Syrup:

Gradually add the sugar syrup to the roasted flour, stirring continuously to avoid lumps.
Keep the heat low to medium to prevent splattering.
Cooking the Prashad:

Continue cooking and stirring until the mixture thickens, and the ghee starts to separate from the mixture. This process takes about 15-20 minutes.
Final Touch:

Once the mixture reaches a halwa-like consistency and the ghee separates, turn off the heat.
The Karah Prashad is now ready.
Serving:

Offer the Karah Prashad in prayer, and then serve it to everyone present.
Tradition:

In Sikh tradition, Karah Prashad is often stirred with a kirpan (a ceremonial sword) while reciting prayers to impart blessings and positive energy.
Note:
The proportion of ingredients can be adjusted based on the desired quantity.
The key to a good Karah Prashad is patience in roasting the flour to achieve the right color and aroma.
The act of preparing and serving Karah Prashad is considered a sacred and respectful practice in Sikhism, emphasizing equality and humility.
Always keep in mind the spiritual significance of Karah Prashad while preparing and sharing this sacred sweet.
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
1 cup whole wheat flour (atta)
1 cup sugar
1 cup ghee (clarified butter)
4 cups water
Instructions:
Prepare the Ingredients:

Measure out the whole wheat flour, sugar, ghee, and water.
Roast the Flour:

Heat a heavy-bottomed pan or karahi on low to medium heat.
Add the whole wheat flour (atta) and roast it in ghee, continuously stirring to prevent burning.
Roast until the flour turns golden brown, and a rich aroma emanates. This step is crucial for the flavor of Karah Prashad.
Prepare Sugar Syrup:

In a separate pan, combine sugar and water to make a sugar syrup.
Stir well until the sugar dissolves, creating a smooth syrup.
Combine Roasted Flour and Sugar Syrup:

Gradually add the sugar syrup to the roasted flour, stirring continuously to avoid lumps.
Keep the heat low to medium to prevent splattering.
Cooking the Prashad:

Continue cooking and stirring until the mixture thickens, and the ghee starts to separate from the mixture. This process takes about 15-20 minutes.
Final Touch:

Once the mixture reaches a halwa-like consistency and the ghee separates, turn off the heat.
The Karah Prashad is now ready.
Serving:

Offer the Karah Prashad in prayer, and then serve it to everyone present.
Tradition:

In Sikh tradition, Karah Prashad is often stirred with a kirpan (a ceremonial sword) while reciting prayers to impart blessings and positive energy.
Note:
The proportion of ingredients can be adjusted based on the desired quantity.
The key to a good Karah Prashad is patience in roasting the flour to achieve the right color and aroma.
The act of preparing and serving Karah Prashad is considered a sacred and respectful practice in Sikhism, emphasizing equality and humility.
Always keep in mind the spiritual significance of Karah Prashad while preparing and sharing this sacred sweet.
`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Karah_Prashad.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
