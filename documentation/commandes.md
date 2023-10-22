# SOLID PRINCIPLES

## Démarrer serveur en local
```bash
$ symfony serve -d
```
Lien pour accéder à l'interface: [localhost:8000][1]  

## Liens utiles
[SRP - Dan North][2]

## Single responsability principle
Think off all the different reasons that this Class might change.
Separate things that might change for different reasons.
Write classes so that your code fits in your head.

## Cohesion
Keep things together that are related

## Open Closed Principle
A module should be open for extension, but closed for modification.
You should be able to change what a class does without changing its code. 
Design your classes so that you can change their behaviour without changing their code.
Similar to :
 - Strategy Pattern
 - Template Method Pattern

## Liskov substitution principle
Subtypes must be substitutable for their base types
Subtypes = class that extends a base class or implements an interface

On a subclass (extends another class) :
 - You can change the return type if you make it more narrow / more specific type
 - You can change the argument type hint if you make it more wider / less specific type


Look at :
    Decorator Pattern

# Interface Segragation Principle
Clients should not be forced to depend on interfaces that they do not use.
Interfaces = the public "stuff" (e.g. methods) of a class
If a class has a large interface (a lot of methods) and you often inject the class and only use only some of the methods,
consider splitting your classes into smaller pieces.

# Dependency Inversion Principle
High level modules should not depend on low level modules. Both should depend on abstrations.
Abstractions should not depend on details. Details (concrete implementations) should depend on abstractions.

Classes should depend on interfaces instead of concrete classes.
Those interfaces should be designed by the class that uses them not by the classes that will implement them.

Prefer type-hinting interfaces and allow each interface to be designed for the high level class that will use it. 


Other Principles:
 - Design patterns
 - Composition over inheritance 
 - The law of demeter

[1]: https://127.0.0.1:8000
[2]: https://dannorth.net/cupid-the-back-story/