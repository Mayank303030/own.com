<!DOCTYPE html>
<html>
  <head>
    <title>My Story</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="content">
      <h1 id="category">Horror</h1>
      <p id="story">Once upon a time, in a dark and eerie forest...</p>
      <button onclick="changeStory('horror')">Horror</button>
      <button onclick="changeStory('comedy')">Comedy</button>
      <button onclick="changeStory('love')">Love</button>
    </div>
    <?php include('footer.php'); ?>
    <script>
      function changeStory(category) {
        var storyElement = document.getElementById('story');
        var categoryElement = document.getElementById('category');
        switch (category) {
          case 'horror':
            categoryElement.textContent = 'Horror';
            storyElement.textContent = 'Once upon a time, in a dark and eerie forest...';
            break;
          case 'comedy':
            categoryElement.textContent = 'Comedy';
            storyElement.textContent = 'Two friends walked into a bar...';
            break;
          case 'love':
            categoryElement.textContent = 'Love';
            storyElement.textContent = 'They met in college and fell in love at first sight...';
            break;
        }
      }
    </script>
  </body>
</html>
