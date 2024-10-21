<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waving Hotspot Image</title>
  <style>
    /* Optional: Style for the image container */
    #image-container {
      position: relative;
      width: 500px; /* Adjust the width as needed */
    }

    /* Optional: Style for the image */
    #hotspot-image {
      width: 100%;
      height: auto;
      display: block;
      position: relative;
    }

    /* Hotspot styles */
    .hotspot {
      position: absolute;
      background-color: #ff0000; /* Adjust hotspot color as needed */
      width: 20px;
      height: 20px;
      border-radius: 50%;
      cursor: pointer;
      transition: transform 0.5s ease-in-out; /* Waving animation */
    }

    /* Hotspot specific styles */
    .hotspot1 { top: 100px; left: 150px; }
    .hotspot2 { top: 200px; left: 250px; }
    /* Add more hotspot styles as needed */

    /* Waving animation for hotspots */
    .hotspot:hover {
      transform: translateX(10px) translateY(-10px);
    }
  </style>
</head>
<body>

<div id="image-container">
  <!-- Image with hotspots -->
  <img src="../assets/images/banner/background.png" alt="Hotspot Image" id="hotspot-image">

  <!-- Hotspot areas -->
  <div class="hotspot hotspot1" title="Hotspot 1"></div>
  <div class="hotspot hotspot2" title="Hotspot 2"></div>
  <!-- Add more hotspots as needed -->
</div>

</body>
</html>
