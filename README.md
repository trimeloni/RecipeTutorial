RecipeTutorial
==============

Tutorial using many PHP technologies


Getting Started
---------------
(All commands and paths listed should be performed via Git Bash)

If you don't have your own instance of php already setup then it will be easiest to add php to your windows path.

In Git Bash, you can do this temporarily by running the following command:
  export PATH="$PATH:/c/RecipeTutorial/UniServer/usr/local/php"
  
After pulling down the project for the first time you will need to load the dependant projects:
  cd /c/RecipeTutorial/Project
  composer update
  
To run the project run the program C:\RecipeTutorial\UniServer\Start_as_program.exe as an Administrator and Start both Apache and MySql.

If you have problems running on Port 80 you SHOULD be able to update the Apache port.
  Uniform Server
  ->Server Configuration
    ->General
      ->Change Ports. Apache and MySQL
      
      
      
