<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title></title>
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
    <h1>SheerKurama</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      It seems like there might be a slight confusion in the name. I assume you are referring to "Sheer Khurma," a popular and traditional dessert made during the festival of Eid in many parts of India and Pakistan. Sheer Khurma translates to "milk with dates" in Persian, and it's a rich and flavorful dessert that involves cooking vermicelli, milk, and dates together. Here's a basic recipe for Sheer Khurma</p></div> 
         <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/sheer.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For SheerKhurama:</p></div>
    <ul>
      <li>   

      1 cup thin vermicelli
1 liter whole milk
1/2 cup ghee (clarified butter)
1 cup sugar (adjust according to taste)
1/2 cup chopped dates
1/4 cup chopped almonds
1/4 cup chopped cashews
1/4 cup chopped pistachios
1/4 cup chopped raisins
1/2 teaspoon cardamom powder
A pinch of saffron strands (optional)
Rose water or kewra water (optional, for flavor)


</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

    Instructions:
Prepare the Vermicelli:

Heat ghee in a pan and roast the vermicelli until it turns golden brown. Ensure not to burn it.
Boil Milk:

In a separate pot, bring the milk to a boil. Once it boils, reduce the heat to simmer.
Add Vermicelli:

Add the roasted vermicelli to the simmering milk. Cook until the vermicelli is soft and the milk has thickened. Stir occasionally to avoid sticking.
Add Sugar and Dry Fruits:

Add sugar to the milk and stir until it dissolves.
Add chopped dates, almonds, cashews, pistachios, and raisins. Continue to simmer until the dry fruits are soft.
Add Cardamom and Saffron:

Add cardamom powder and saffron strands (if using). Stir well to combine.
Flavor with Rose Water or Kewra Water:

Optionally, add a few drops of rose water or kewra water for additional flavor. Stir well.
Simmer Until Desired Consistency:

Continue to simmer until the Sheer Khurma reaches your desired consistency. It's traditionally a thick and rich dessert.
Serve:

Once done, remove from heat and let it cool slightly before serving.
Garnish and Serve Warm:

Garnish with more chopped dry fruits and serve the Sheer Khurma warm.
Enjoy the creamy and delicious Sheer Khurma, a delightful dessert often served during festive occasions like Eid. Adjust the sugar and dry fruit quantities according to your taste preferences.




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
1 cup thin vermicelli
1 liter whole milk
1/2 cup ghee (clarified butter)
1 cup sugar (adjust according to taste)
1/2 cup chopped dates
1/4 cup chopped almonds
1/4 cup chopped cashews
1/4 cup chopped pistachios
1/4 cup chopped raisins
1/2 teaspoon cardamom powder
A pinch of saffron strands (optional)
Rose water or kewra water (optional, for flavor)
Instructions:
Prepare the Vermicelli:

Heat ghee in a pan and roast the vermicelli until it turns golden brown. Ensure not to burn it.
Boil Milk:

In a separate pot, bring the milk to a boil. Once it boils, reduce the heat to simmer.
Add Vermicelli:

Add the roasted vermicelli to the simmering milk. Cook until the vermicelli is soft and the milk has thickened. Stir occasionally to avoid sticking.
Add Sugar and Dry Fruits:

Add sugar to the milk and stir until it dissolves.
Add chopped dates, almonds, cashews, pistachios, and raisins. Continue to simmer until the dry fruits are soft.
Add Cardamom and Saffron:

Add cardamom powder and saffron strands (if using). Stir well to combine.
Flavor with Rose Water or Kewra Water:

Optionally, add a few drops of rose water or kewra water for additional flavor. Stir well.
Simmer Until Desired Consistency:

Continue to simmer until the Sheer Khurma reaches your desired consistency. It's traditionally a thick and rich dessert.
Serve:

Once done, remove from heat and let it cool slightly before serving.
Garnish and Serve Warm:

Garnish with more chopped dry fruits and serve the Sheer Khurma warm.
Enjoy the creamy and delicious Sheer Khurma, a delightful dessert often served during festive occasions like Eid. Adjust the sugar and dry fruit quantities according to your taste preferences.



`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'sheerkhurama.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
