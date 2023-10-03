# Week 5
## Count example from last day
Given 3 GET parameters named "start", "end", and "step" create output that shows all integers from the start up to the end, inclusive, counting up by the value of step. For example values of 1, 10, 3 would produce the output 1,4,7,10.  Output the result as a JSON encoded array of integers if all 3 integer parameters are valid.

To be valid, each parameter must be an integer and also:
- start != end
- step != 0
- if start < end, and start >= 0, step > 0
- if start > end, and start >= 0, step < 0
- if start < end, and start <=0, step < 0
- if start > end, and start <=0, step > 0
- the total number of integers in the list is less than 100

## Assignment updates

## Mentimeter 

## Manipulating Files in PHP
- Generally 3 steps required
  1. Open file - tell OS what filename, what access mode, other options
  2. Use file - either reading file or writing file
  3. Close file - tell the OS that you are done, and it can release resources, or perform any remaining operations
- Example of reading and writing files in PHP
  -- Our new application

  
