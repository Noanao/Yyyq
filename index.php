<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 
$i = 5;
$url = "https://docs.google.com/forms/d/e/1FAIpQLSdjc6n0_U4J1QypvlPKsLXDo9tF3FHhyXcfAoKzI5MAfXx7nA/formResponse?entry.605866994=%E3%81%8Ak";
while($i == 5){

$output = file_get_contents($url);
var_dump($output);
}
?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>