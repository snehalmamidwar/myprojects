<?php 
  session_start(); 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Gujiya Recipe</title>
  <link rel="stylesheet" href="populardishes/gujiya.css">
</head>
<body>
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
<!-- Gujiya -->
<div class="infocontainer">
  <div class="devinfo">
    <h1>Gujiya</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>Gujiya is a popular Indian sweet dumpling made during festivals, especially during Holi. It is typically stuffed with a sweet filling of khoya, nuts, and cardamom, and then deep-fried to golden perfection.</p>
    </div>    
    <div class="serve-time"><p><b>Servings:</b> 8 | <b>Timing:</b> 1.5 hours</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/gujiya.jpg" alt="Gujiya"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Gujiya:</p></div>
    <ul>
      <li>2 cups all-purpose flour</li>
      <li>1/4 cup ghee (clarified butter)</li>
      <li>1 cup khoya (mawa)</li>
      <li>1/2 cup powdered sugar</li>
      <li>1/4 cup chopped nuts (cashews, almonds, pistachios)</li>
      <li>1/2 tsp cardamom powder</li>
      <li>Oil for deep frying</li>
      <li>Milk for sealing</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>Step 1:</p></div>
    <p>In a mixing bowl, combine all-purpose flour and ghee. Rub the mixture between your palms until it resembles breadcrumbs.</p>
    
    <div><p>Step 2:</p></div>
    <p>Add water little by little and knead the mixture into a smooth and firm dough. Cover it with a damp cloth and let it rest for 30 minutes.</p>
    
    <div><p>Step 3:</p></div>
    <p>Heat khoya in a pan and cook until it turns slightly golden. Remove from heat and let it cool.</p>
    
    <div><p>Step 4:</p></div>
    <p>Add powdered sugar, chopped nuts, and cardamom powder to the khoya. Mix well to form a sweet filling.</p>
    
    <div><p>Step 5:</p></div>
    <p>Divide the dough into small equal portions and roll them into balls. Roll out each ball into a small puri-like circle.</p>
    
    <div><p>Step 6:</p></div>
    <p>Place a spoonful of the sweet filling in the center of the puri. Fold it in half and seal the edges by pressing with a fork.</p>
    
    <div><p>Step 7:</p></div>
    <p>Heat oil in a deep frying pan. Fry the gujiyas on medium heat until they turn golden brown.</p>
    
    <div><p>Step 8:</p></div>
    <p>Remove the fried gujiyas and place them on a paper towel to remove excess oil.</p>
    
    <div><p>Step 9:</p></div>
    <p>Let them cool and store in an airtight container. Serve and enjoy!</p>
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
        Ingredients for Gujiya:
        
        For the Gujiya Dough:
        - 2 cups all-purpose flour
        - 1/4 cup ghee (clarified butter)
        - Water for kneading
        
        For the Sweet Filling:
        - 1 cup khoya (mawa)
        - 1/2 cup powdered sugar
        - 1/4 cup chopped nuts (cashews, almonds, pistachios)
        - 1/2 tsp cardamom powder
        
        For Frying:
        - Oil for deep frying
        
        Method:
        
        Step 1:
        In a mixing bowl, combine all-purpose flour and ghee. Rub the mixture between your palms until it resembles breadcrumbs.
        
        Step 2:
        Add water little by little and knead the mixture into a smooth and firm dough. Cover it with a damp cloth and let it rest for 30 minutes.
        
        Step 3:
        Heat khoya in a pan and cook until it turns slightly golden. Remove from heat and let it cool.
        
        Step 4:
        Add powdered sugar, chopped nuts, and cardamom powder to the khoya. Mix well to form a sweet filling.
        
        Step 5:
        Divide the dough into small equal portions and roll them into balls. Roll out each ball into a small puri-like circle.
        
        Step 6:
        Place a spoonful of the sweet filling in the center of the puri. Fold it in half and seal the edges by pressing with a fork.
        
        Step 7:
        Heat oil in a deep frying pan. Fry the gujiyas on medium heat until they turn golden brown.
        
        Step 8:
        Remove the fried gujiyas and place them on a paper towel to remove excess oil.
        
        Step 9:
        Let them cool and store in an airtight container. Serve and enjoy!
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'gujiya_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>
</body>
</html>
