<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
</head>
<body>
    <h2>Load File Content with AJAX</h2>

    <button id="loadBtn">Load Hello.txt</button>
    <div id="content" style="margin-top: 20px; border: 1px solid #ccc; padding: 10px;">
        <!-- File content will appear here -->
    </div>

    <script>
        document.getElementById("loadBtn").addEventListener("click", function() {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it: GET-request for the file "hello.txt"
            xhr.open("GET", "hello.txt", true);

            // Set up the callback function
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) { // Request finished
                    if (xhr.status === 200) { // Success
                        document.getElementById("content").innerText = xhr.responseText;
                    } else {
                        document.getElementById("content").innerText = "Error loading file.";
                    }
                }
            };

            // Send the request
            xhr.send();
        });
    </script>
</body>
</html>