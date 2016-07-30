#1.How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.
 - It took about 8 hours to build up this test code.
 - If I have more time, I would like to add below functions into the test code. 
   1. "the validation of postcode for UK."
   2. "lazy image loading".
   3. "applying requirejs".
   4. "unit test for the implementation of respository interface".

#2.What was the most useful feature that was added to the latest version of your chosen language? Please include a snippet of code that shows how you've used it.
 - The latest verion of php is 7.0. But I built up based on php5.6, so I could not use the new features.

#3.How would you automate the testing of the solution you built?
 - With PHPUnit, after making Unit Test for a fucntion, whenenver I add up some modules, I run "phpunit" before git commit.
 - I am using Travis CI to deploy source code to Heroku after commiting source code to Github as well.

#4.What's your favourite library? Why?
 - My favorite front end library is requirejs and bootstrap.
   I had some problems because of the order of loading JavaScript in my past project. So I usually trying to apply requirejs to protect the system.
   Before bootstrap, it was very hard to make the system pretty without desinger. But after using bootstrap, it is very easy to make the system pretty and   reponsive as well.

#5.How would you improve the customer experience on Menulog?
 - how about if you introduce a royalty system like stamp?
   In one of my project in the creative shop, we suggested a convinient stamp system to one client. At that time, if we used iBeacon with mignetic field, we found the fast way to give a stamp to a user.

#6.How would you improve the JUST EAT APIs that you just used?
 - "paging funcition". 
   When I implemented the test code, I came to know I could not find the way to search the restaurant by page.
  
#7.How would you track down a performance issue in production? Have you ever had to do this?
 - When I came to know the system was getting slow, I usually checked the structrue of database first of all. I checked the frequent SQLs and the tables related to the SQLs.  I tried to improve the speed with checking the indexes of the tables and changing the driving table. 

#8.Please describe yourself using JSON.
{
    "FirstName" : "Hoyoul",
    "LastName" : "YOUN",
    "JobTitle" : "PHP Full Stack Developer",
    "Objective" : [
        "finish the task on time",
        "follow the company culture and policy"
    ],
    "WorkedCompany: [
        "Samsung SDS",
        "DMD Can",
        "The Createive Shop"
    ],
    "Skills" : [
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
