<!-- OOP --
A class is a template for objects, and an object is an instance of a class.
When the individual objects are created, they inherit all the properties and behaviors from the class, 
but each object will have different values for the properties.

=== THE CONSTRUCT FUNCTION ===
If you create a __construct() function, PHP will automatically
call this function when you create an object from a class.

Notice that the construct function starts with two underscores!

=== THE DESTRUCT FUNCTION ===
A destructor is called when the object is destructed or the script is 
stopped or exited. Notice that the destruct function starts with two underscores!

=== ACCESS MODIFIERS ===

* PUBLIC
The property or method can be accessed from everywhere.

* PROTECTED
The property or method can be accessed within the class and by classed derived from that class.

* PRIVATE
The property or method can ONLY be accessed within the class.

=== INHERITANCE ===
When a class derives from another class.
The child class will inherit all the public and protected properties and
methods from the parent class.

An inherited class is defined by using the "extends" keyword.

Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

The final keyword can be used to prevent class inheritance or to prevent method overriding.

=== CLASS CONSTANTS ===
It is recommended to name the constants in all uppercase letters.
We can access a constant from outside the class by using the class name
followed by the scope resolution operator (::) followed by the constant name.

=== ABSTRACT CLASSES ===
Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method.

An abstract class or method is defined with the abstract keyword.

=== INTERFACES ===
Interfaces allow you to specify what methods a class should implement
When one or more classes use the same interface, it is reffered to as POLYMORPHISM.

To implement an interface, a class must use the implements keyword.
A class that implements an interface must implement ALL of the interface's methods.

=== TRAITS ===
Traits are used to declare methods that can be used in multiple classes.
Traits are declared with the trait keyword.

=== STATIC METHODS ===
Static methods can be called directly - without creating an instance of
the class first. Static methods are declared with the static keyword.

To access a static method, use the class name, double colon (::), and the method name.

A static method can be accessed from a method in the same class using
the self keyword and double colon (::).

Static methods can also be called from methods in other classes. To do this, the static method should be public.

=== STATIC PROPERTIES ===
Static properties can be called directly - without creating an instance of the class first.

To access a static property, use the class name, double colon (::), and the property name.

=== NAMESPACES ===
Namespaces are qualifiers that solve two different problems:
1. They allow for better organization by grouping classes that work together to perform a task.
2. They allow the same name to be used for more than one class.

Namespaces are declared at the beginning of a file using the namespace keyword.

A namespace declaration must be the first thing in the PHP file!

=== ITERABLES ===
An iterable is any value which can be looped through with a foreach() loop.

The iterable keyword can be used as a data type of a function argument or as the return type of a function.