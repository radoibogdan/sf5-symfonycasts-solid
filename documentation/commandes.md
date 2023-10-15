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

## Cohesion
Keep things together that are related

## Open Closed Principle
A module should be open for extension, but closed for modification.
You should be able to change what a class does without changing its code.  
Similar to :
 - Strategy Pattern
 - Template Method Pattern

## Liskov substitution principle
Subtypes must be substitutable for their base types
Subtypes : class that extends a base class or implements an interface

On a subclass (extends another class) :
 - You can change the return type if you make it more narrow / more specific type
 - You can change the argument type hint if you make it more wider / less specific type


Look at :
    Decorator Pattern

# Interface Segragation Principle
Clients should not be forced to depend on interfaces that thet do not use.
Interfaces = the public "stuff" (e.g. methods) of a class

[1]: https://127.0.0.1:8000
[2]: https://dannorth.net/cupid-the-back-story/