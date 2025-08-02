<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>NaraliBhat Receipe</title>
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
    <h1>NaraliBhat</h1>
    <h4>Description</h4>
    <div class="desc"><p>Narali Bhat is a traditional Maharashtrian dish served for Narali Poornima, a festival that marks the end of the monsoon season. Most festival dishes aren't as easy to make as Narali Bhat. This dish can be made in only 15 minutes, simply by adding ingredients to the Instant Pot and letting it cook.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 45 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/naralibhat.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the NaraliBhat:</p></div>
    <ul>
   <li> Basmati rice – 1 cup (200 grams)</li>
<li>Fresh coconut – 1 cup (grated) (100 grams)</li>
<li>Jaggery – 1 cup (200 grams)</li>
<li>Ghee – 2 to 4 tbsp</li>
<li>Almonds – 6 to 7</li>
<li>Cashews – 8 to 10</li>
<li>Raisins – 2 tbsp</li>
<li>Green cardamom – 4 to 5</li>
<li>Clove – 4</li>
<li>Cinnamon stick – 1 inch long piece</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    
    <p>We need less cooked rice for making coconut bhat. The rice can be prepared in microwave or over flame. Wash the rice thoroughly and soak them in water for half an hour. Drain out the water from rice after half an hour is over.

Take a microwave safe bowl for cooking rice in microwave. Add 2 tsp ghee in the bowl and microwave it for 1 minute. Take out the bowl and add cinnamon and 4 cloves into it and microwave for another 1 minute.

Take out the bowl again and place the rice into it, followed with 2 cups of water. Cover the bowl, leaving it slightly open and cook for 8 minutes. Chop the dry fruits. Make 6 to 7 pieces of each cashew and thinly slice the almonds. Remove stalk from the raisins and clean. Peel cardamom and powder. 

Take the bowl out after 8 minutes and let them stay as it is for 15 minutes. Rice will be prepared instantly. 
Add 2 to 3 tbsp ghee in a wok and heat sufficiently. When the ghee is heated sufficiently, add almonds, cashews and raisins into it. Also add grated coconut and crushed jaggery as well. Cook until jaggery melts completely. Now add rice and mix all ingredients really well. 

Cover the vessel and cook bhat for 20 minutes on low flame. After cooking, open the lid and add cardamom powder into it. Scrumptious coconut bhat is ready. Garnish with chopped almonds-cashews and raisins. </p>
  <div>
    <br>
    <h4>Tips And Tricks: Traditionally, coconut bhat is prepared with jaggery, but you can replace it with sugar as well. 
You can make rice over flame in any vessel. 
Don't cook the rice to much, keep them bit granulated and hard. </h4></div>
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
        
-Basmati rice – 1 cup (200 grams)
-Fresh coconut – 1 cup (grated) (100 grams)
-Jaggery – 1 cup (200 grams)
-Ghee – 2 to 4 tbsp
-Almonds – 6 to 7
-Cashews – 8 to 10
-Raisins – 2 tbsp
-Green cardamom – 4 to 5
-Clove – 4</li>
-Cinnamon stick – 1 inch long piece
        
        Method:
        
        We need less cooked rice for making coconut bhat. The rice can be prepared in microwave or over flame. Wash the rice thoroughly and soak them in water for half an hour. Drain out the water from rice after half an hour is over.

Take a microwave safe bowl for cooking rice in microwave. Add 2 tsp ghee in the bowl and microwave it for 1 minute. Take out the bowl and add cinnamon and 4 cloves into it and microwave for another 1 minute.

Take out the bowl again and place the rice into it, followed with 2 cups of water. Cover the bowl, leaving it slightly open and cook for 8 minutes. Chop the dry fruits. Make 6 to 7 pieces of each cashew and thinly slice the almonds. Remove stalk from the raisins and clean. Peel cardamom and powder. 

Take the bowl out after 8 minutes and let them stay as it is for 15 minutes. Rice will be prepared instantly. 
Add 2 to 3 tbsp ghee in a wok and heat sufficiently. When the ghee is heated sufficiently, add almonds, cashews and raisins into it. Also add grated coconut and crushed jaggery as well. Cook until jaggery melts completely. Now add rice and mix all ingredients really well. 

Cover the vessel and cook bhat for 20 minutes on low flame. After cooking, open the lid and add cardamom powder into it. Scrumptious coconut bhat is ready. Garnish with chopped almonds-cashews and raisins. ;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'NaraliBhat.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}


  updateCounts();
</script>
 

</body>
</html>
