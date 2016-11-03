## phpmyadmin

db - php-academy  
* innodb
* collation
* charset

table 1 - attendee  
* id - int, length, primary, autoincrement, unsigned; why we need ID?
* submited_at - timestamp (why using time formats)
* name - varchar, length, null vs default vs none
* email
* academy_major
* academy_year - tinyint, unsigned
* motivation - varchar length vs text
* prior_knowledge
* prior_languages
    - "flat" column (comma seperated, json, text index) vs 2 additional tables (prior_languages table + relation table)
  
Why we need indexes?  
What would we index here?  

## PDO
* insert at least 2 dummy values in table
* pdo examples
* bind (injection example would be good)

http://php.net/manual/en/class.pdo.php  
http://php.net/manual/en/pdostatement.fetch.php  

## MVC - part 2

Now we have config and fully working example, examine, show.  
Everyone needs to edit their /app/config.php for urls to work !!  
  
TODO: Implement saving to database table  
TODO: Implement file upload to /private  
  
TODO: Explain and show flash messages?  
  
## Homework

Try to install Laravel (with Composer), go through documentation
  
https://laravel.com/  
https://laravel.com/docs/5.3  
https://laracasts.com/  


