# Week 6

## Assignment 2

## Overall course review
### 1. HTTP client server model
  - lifecycle of a web request
  - REST API
### 2. Web application development model
### 3. Software development lifecycle 
  - Define
  - Design 
  - Implement 
  - Test 
  - Deploy 
  - Prodtest
### 4. PHP syntax
  - comments
  - variables
  - data types
  - output 
  - constants
  - operators
  - conditionals
  - loops
  - functions
### 5. Model - View - Controller design pattern
  - Model - business logic and data
  - View - presentation layer for user interface
  - Controller - facilitates communication between the Model and View
### 6. PHP arrays and Superglobal arrays
  - what datatypes can arrays hold?
  - catbook comment data -> array of associative arrays
  - what do the Superglobals do?
### 7. Data Validation and Input handling
  - filter_input function - when should this be used?
### 8. XSS and Web vulnerabilities
### 9. Working with files in PHP
  - Open file - fopen - files can be opened for read, write, append ... and more
  - Close file - why do we close files?
  - file operations (general format)
    - fgets - read a single line from a file
    - file_get_contents - reads entire file into string
    - fwrite - write data to a file
    - feof - test for end of file marker

## Example problems
 Code questions:
1. Write a PHP function that accepts a string and searches the string for either of the angle bracket characters (eg.  <>) and replaces them with an underscore character.  Ensure that your solution demonstrates the use of loops and conditional statements (ie. Don’t use a regex, or any advanced PHP functions).
2. Write a PHP function that opens a file called “weather.txt” and processes its contents.  The weather file contains a json encoded list of cities with the corresponding daily temperature recorded in that city.  Eg. [{"city":"Toronto","temp":15},{"city":"Hamilton","temp":16}] Your function should accept and sanitize 2 parameters, one representing the city, and the second representing the daily temperature.  Your function should take the following actions:  If city is already in the array, it should update the temperature in the array, and return a string that reads “<city> temperature updated from <old_temp> to <new_temp>.” If the city is not found in the array, it should add the city and temperature to the list and return a string that reads “<city> was added with temperature <temp>”.  In both cases the function should write out the updated temperature array to the file as a json encoded object.

