# SOLID Principles

* S: Single Responsibility Principle (Принцип единственной ответственности).
* O: Open-Closed Principle (Принцип открытости-закрытости).
* L: Liskov Substitution Principle (Принцип подстановки Барбары Лисков).
* I: Interface Segregation Principle (Принцип разделения интерфейса).
* D: Dependency Inversion Principle (Принцип инверсии зависимостей).


### Single Responsibility Principle
A class should have just one reason to change.

### Open-Closed Principle
Classes should be open for extension but closed for modification.
The main idea of this principle is to keep existing code from
breaking when you implement new features. 

### Liskov Substitution Principle
When extending a class, remember that you should be able to pass objects of the subclass in place of objects of the parent class without breaking the client code.

### Interface Segregation Principle
Clients shouldn`t be forced to depend on methods they do not use.
Try to make your interfaces narrow enough that client classes
don’t have to implement behaviors they don’t need. 

### Dependency Inversion Principle
High-level classes shouldn`t depend on low-level classes. Both should depend on abstractions. Abstractions shouldn’t depend on details. Details should depend on abstractions.