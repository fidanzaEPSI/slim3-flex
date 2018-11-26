# Slim 3 Flex

A Slim 3 starter structure inspired from Laravel. 

The architecture is about using phpleague's Container package rather than the original Container of Slim. That way, it offers a tidy and clean way to import additionnal bricks/features for your next Slim webapp or rest API

## Features

- Data access using Laravel's **Eloquent ORM**
- Rendering views and paginating with **Twig**. Also supports sharing services globally.
- **Basics of authentication workflow** : user registration, login, logout, remember me, authorizations for routes through middlewares 
- **Services and dependencies** loaded using Providers, allows autoloading exposed classnames/aliases inside other classes.
- Separated, easy to setup app configuration files inside config/ folder 

Various already implemented features : form validation, password hashing, session storage, csrf protection, ...

## Upcoming 

- Seeds and migrations using Phinx
- A Mail service using Mailable classes
- Events and listeners
- A logger service using Monolog
- Filesystem service