# Registry-Pattern-PHP
The registry pattern is a design pattern that provides a global object storage mechanism. Its allow you to storae and retrieve objects (or values) in a centralized manner. This is useful for managing shared resources or objects across different part of application without directly coupling components.

# Key Concepts of the Registry Pattern:

1. Gloabl Access: Provides a central accessized location to store objects or data
2. Static Methods: A static array is often used to hold registered objects or values.
3. Loose coupling: Components can access shared resources without knowing their creation logic or lifecycle.

# How It Works:

1. Centralized Storage:
 The static $objects array holds registered objects or values by their keys.
2. Registering (set):
 Objects or values are stored in the registry using a key.
3. Retrieving (get):
 You can retrieve stored items using their corresponding key.
4. Removing (remove):
    Items can be removed from the registry when no longer needed.
Error Handling:

If you try to access an unregistered key, an exception is thrown.

# Advantages:
1. Centralized management
  Provide a single point of access for shared resources
2. Loose Coupling
  Reduces direct dependencies between components
3. Flexibility:
 Objects can be swapped or re-registered without changing the code

 # When to Use the Registry Pattern:
 When you need to share configuration data or reusable objects across the application.
 When you want to manage resources like database connections or loggers in a centralized manner.
 Avoid using it as a replacement for dependency injection, as overuse of global patterns can make your code harder to maintain.
