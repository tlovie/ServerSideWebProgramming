# Week 11

## Assignment 4
  - In a nutshell - build a script that implements the query provided.
```SQL
SELECT quotes.quote_id, authors.author_name, quotes.quote_text 
FROM quotes INNER JOIN authors ON authors.author_id=quotes.author_id
ORDER BY quotes.quote_id
LIMIT 20 
OFFSET (page - 1) * 20;
```
  - Use PDO - do not use mysqli

# Review APIs
  - last day we covered a method to implement APIs
  - .htaccess script to turn rewrite engine on and direct all/most calls to a single script
  - use $_SERVER['REQUEST_METHOD']; to determine action
  - use string functions:
      - $found = strpos($path, "$prefix/student_id/"); to determine endpoint matched
      - https://www.php.net/manual/en/function.strpos.php
  - decode body of the request:
      - $data = json_decode(file_get_contents('php://input'), true);
  - other ways to get data into the request
      - GET Parameters
      - POST Parameters
  - once the endpoint / request / data is understood formulate the correct response
      - send meaningful response code
      - http_response_code(400);
  - often involves interacting with a database - but could really be anything (neural engine/filesystem/database)
  - security considerations
    - header("Access-Control-Allow-Origin: *");
    - header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
    - API key in request header  https://www.php.net/manual/en/function.apache-request-headers.php

# Exercise
1. Create a database table for “twits” (they’re like tweets but shorter – 40 characters maximum).
   - Every twit should have an ID, a UserID (for the sender of the twit), and the text of the twit.
   - Every UserID should be 8 digits long. Add a few rows to the table.
- Now implement the following RESTful API, using rest_api_basics as a starting point:
- GET /twits/all
  - Retrieve all tweets in the table. Should return a JSON-encoded array with the ID, UserID, and text of each tweet.
- GET /twits/:userid
  - Retrieve all tweets from the given :userid.
- Should return a JSON-encoded array with the
    - ID and text of each tweet.
- Test your API through the URL of a web browser.
2. Expand your twits API to add the following:
-  POST /twits/:userid Adds a new tweet to the table for :userid.
  - text of the tweet is in the body of the request.
  - Should return the ID of the new tweet.
- DELETE /twits/:id Deletes the tweet by :id
- PUT /twits/:id Changes the text of a tweet by :id.
    - The new text is sent in the body of the request.
- Test your API using Insomnia, making sure that the correct changes are made to the database tabl
  
