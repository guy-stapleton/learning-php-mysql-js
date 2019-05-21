# Learnings from Project

## Thoughts
PHP is pretty similar to JS on some fronts.

It does have some extra operators that are interesting.

It's also got two versions of some operators that have different precedence e.g. OR and || (the || has higher precedence)

## Notes
- <?php ?> and <? ?> are equivalent
- Variables are declared with $name
- arrays are made array('Ben', 'Tony', 'Guy')
- Comments work the same as in JS: single // or multiline /**/
- Use echo to print to screen
- You have to use break tags a lot to split up statements on to new lines
- you access content in arrays the same way as in js
- PHP is loosely typed so you get some type coercion happening
- PHP has uppcase and lower case versions of some commands (uppercase indicates constants, they can be used interchangely)
- booleans: true equates to 1, false equates to null
- if else statements structured in a simialar way to JS
- There's a special :: used to refernce particluar data in a class (Useful when subclasses want to use data stored in the parent)
 
## Techniques
- There's an exponent operator for powers **
- The exclusive logical operator xor (returns true if only one value is true, but false if both values are the same i.e. both true or both false)
- Strings are concatenated using .
- Two string types. '' are string literals (e.g. all charcters presented as is, so no code are expecuted inside). "" are variable strings so you can use variables inside them.
- There's some intersting operator: bitwise for manipulating bits, and execution
- nice tricks you can do with the increment and decrement operator: you can add it before the value. Onle application of this is to write concise while loops.
- What multiple iterators in one for loop! Madness!
- With loops, you break out of nested operations by using break with a number e.g. break 2;
- casting a value (override the namture of type coercion)
- Using the fucntion_exits to test if function is available
- Associative Arrays: rather than indexes you can refer to value by a name
## Learnings

## Mistakes
- You have to end statements with ; otherwise there will be an error
- When using the Here Docs selector <<<_END the closing syntax must start at the begining of a new line. No exceptions.
- Watch your logical operators: there's two different versions
- Writing for loops, i kept missriting the iterator variable i != $i
- I ran into problems with `` strings need to brush up on when and how you can use them
-I wasn't able to get constructors working for objects
-I tried calleing an object method how you wouldin Javascript, insread it uses the ->
- Getting up to speed with $ inside classes, when to use them, how to reference them
- Was trying to shuffle an array, but forgot that I to use the original array and instead wwas trying to shuffle a string
## Glossary
-Casting: you can cast to an object, cast to an array
-Associativty: how are these values are processed
- Class - a model 
- Instance: an individiaul occurence of the class
- Encapuslation: An object properties can only be modified by its methods
- Inheritance: Creating subclasses which inherit properties and methods of parent

## Ideas to be able to explain
- loosely typed: PHP is loosely typed.