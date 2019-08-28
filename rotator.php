<script>
var URLlist = [
"url-wa-cs1",
"url-wa-cs2",
"url-wa-cs3" // <-- the last URL has no comma
];
var reDelay = 1000;  // <-- time in seconds. 0000 = immediate redirect (0 seconds), 1000 = 1 sec delay, 2000 = 2 sec delay, etc
setTimeout(function(){window.location = URLlist[Math.floor(Math.random() * URLlist.length)];}, reDelay);
</script>
