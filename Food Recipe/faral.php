<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Faral Receipe</title>
  <link rel="stylesheet" href="populardishes/vegbiryani.css">
</head>
<body>
<!-- Veg Biryani -->
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
    <h1>Faral</h1>
    <h4>Description</h4>
    <div class="desc"><p>Diwali Faral is a true gift from Maharashtrian food culture to the whole world. The dishes prepared as Faral taste so good that you won't even think of having anything else during this festival. For those who don't know, Faral is a combination of sweet and savory snacks.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 180 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/faral.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Method</h2>
    <div><p>For the Faral:</p></div>
    <ul>
  
<li>Chakli Recipe:
Chakli is a deep-fried snack made from rice flour, gram flour, wheat flour or a mixture of lentil flours. Make this crispy and crunchy snack for Diwali festival. 

</li>
<li>
Shankarpali Recipe:
Sweet shankarpali are crisp, flaky, melt in the mouth fried and baked biscuits. Shankarpali is a popular festive snack from Maharashtra.</li>

<li>Karanji Recipe (Authentic):
Karanji is a crisp, flaky, fried, moon-shaped pastry stuffed with a sweet filling of desiccated coconut, nuts and dry fruits. It is also one of the sweet snack that is made during Diwali festival.</li>
   
<li>
Bhakarwadi:
Bhakarwadi is one of the popular snack from western India. Bhakarwadi are fried and crisp pinwheels or spirals. They are addictive and have a sweet, spicy and tangy taste.

<li>
Chivda Recipe | Poha Chivda | Namkeen Recipe
Chivda is a quick and delicious snack mix or namkeen mixture from the Maharashtrian cuisine made with flattened rice (poha), spices, dry fruit, nuts and with hints of salt and sugar.
</li>
</ul>
  </div>

 
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
        Ingredients for Veg Biryani:
        
          Chakli Recipe:
Chakli is a deep-fried snack made from rice flour, gram flour, wheat flour or a mixture of lentil flours. Make this crispy and crunchy snack for Diwali festival. 


Shankarpali Recipe:
Sweet shankarpali are crisp, flaky, melt in the mouth fried and baked biscuits. Shankarpali is a popular festive snack from Maharashtra.</li>

Karanji Recipe (Authentic):
Karanji is a crisp, flaky, fried, moon-shaped pastry stuffed with a sweet filling of desiccated coconut, nuts and dry fruits. It is also one of the sweet snack that is made during Diwali festival.</li>
   

Bhakarwadi:
Bhakarwadi is one of the popular snack from western India. Bhakarwadi are fried and crisp pinwheels or spirals. They are addictive and have a sweet, spicy and tangy taste.


Chivda Recipe | Poha Chivda | Namkeen Recipe
Chivda is a quick and delicious snack mix or namkeen mixture from the Maharashtrian cuisine made with flattened rice (poha), spices, dry fruit, nuts and with hints of salt and sugar.
;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Faral_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}


  updateCounts();
</script>
 

</body>
</html>
