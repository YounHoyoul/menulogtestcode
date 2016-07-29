#1.How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.
 - It took about 8 hours to build up this test code.
 - If I have more time, I would like to add below functions into the test code. 
   - "the validation of postcode for UK."
   - "lazy image loading".
   - "applying requirejs".
   - "unit test for the implementation of respository interface".

#2.What was the most useful feature that was added to the latest version of your chosen language? Please include a snippet of code that shows how you've used it.
 - php 7.0
 - php 5.6 trait 

#3.How would you automate the testing of the solution you built?
 - With PHPUnit, after making Unit Test for a fucntion, whenenver I add up some modules, I run "phpunit" before git commit.
 - I am using Travis CI to make test automated and deploy source code to Heroku after commiting source code to Github.

#4.What's your favourite library? Why?
 - My favorite front end library is requirejs and bootstrap.
   I had some problems because of the order of loading JavaScript in my past project. So I usually trying to apply requirejs to protect the system.
   Before bootstrap, it was very hard to make the system pretty without desinger. But after using bootstrap, it is very easy to make the system pretty and   reponsive as well.

#5.How would you improve the customer experience on Menulog?
 - introducing a royalty system like stamp.
 - In one of my project in the creative shop, we suggested a convinient stamp system to one client. At that time, if we use iBeacon and mignetic field, we found the fast way to give a stamp to a user.

#6.How would you improve the JUST EAT APIs that you just used?
 - paging funcition. 
   When I implemented the test code, I came to know I could find the way to search the restaurant by page.
  
#7.How would you track down a performance issue in production? Have you ever had to do this?
 - When I came to know the system is getting slow, I checked the structrue of db first of all.
   I checked the frequent SQL and the tables related to the frequent SQL. If possible, I consider making table index.
   If I can find slow SQL, I usually try to remove full scan table first.

#8.Please describe yourself using JSON.
{
    "firstName" : "Hoyoul",
    "lastName" : "YOUN",
    "jobTitle" : "PHP Full Stack Developer",
    "objective" : [
        "finish the task on time",
        "follow the company culture and policy"
    ],
    "workedCompany: [
        "Samsung SDS",
        "DMD Can",
        "The Createive Shop"
    ],
    "skills" : [
        { 
           "language" : "PHP", 
           "years" : 6
        },
        { 
           "language" : "SQL", 
           "years" : 10 
        },
        { 
            "language" : "HTML", 
            "years" : 10 
        },
        { 
            "language" : "CSS", 
            "years" : 10 
        },
        { 
            "language" : "JavaScript", 
            "years" : 10 
        },
        { 
            "language" : "JAVA", 
            "years" : 8
        },
        { 
            "language" : "C++", 
            "years" : 2
        },
        { 
            "language" : "Android", 
            "years" : 6
        },
        { 
            "language" : "iPhone", 
           "years" : 4
        }
    ]
}

