# Project Name: Website FindBetterPlace

## Project Description and objective: 

- This is a website that allows people to share their bad experience in rental housing in the city.  

- The website can show all the cases saved in the database, and show them on the google map.  When the user clicks the marker on the map, more detail information will pop-up.

- People who want to rent a house in the city can search on the website to see if there were some bad comments about the house.
- By knowing the stories shared by other lessees, people will have another way to get comprehensive information about the house which they are going to rent.

- Instead of the information provided by the house lord/ agency, By knowing the stories shared by other lessees, people will have another way to get comprehensive information about the house which they are going to rent.  

- I believe this is a great way to help people get away from the bad house lord.

## Tech Stack:
- HTML, CSS, JavaScript, PHP, Bootstrap, Jquery, Google Map API, Goole Could Storage, relational database: Mysql/MariaDB, Apache, ajax/json, Github.

- Hot I build this application and how to use the website:
- The idea of building this website came from my personal experience. The first place I lived after I moved to Wellington gave me a terrible memory because of the house lord is neither honest nor friendly. 
- After that, this idea came to my mind, if we have a website allows people to share their bad rental experience, that might be helpful for the people who have a plan to move in. 

- I used google map API on the website. With the google cloud API, It gives the user permission to show multiple markers on the same map. Detail of case could be shown on the map when the user clicks the marker. The physical address is converted to longitude and latitude using GOOGLE API. Therefore, the user can only input the physical address in their case. 

- Also, the user can see the detail of the case other user shared by clicking the marker on the map.  Each mark has it's address and detail description of the case, and misery index is also listed on it as well. 

I used Bootstrap to build the basic structure of the website. The Bootstrap provides an easy way for the user to use its build-in CSS library by specifying the class name. 
Javascript code was included in the HTML file. Some PHP code is embedded into JavaScript code used for showing the case list which is from the database.

I used Google Cloud Storage for the deployment of the website. 

The website also provides the function that people can access to the page that lists all the cases other user shared. The website also has the function that allows user to share their own experience if they click the "Post Case" on navigator or "Share My Experience" on the header.

The website is responsive according to the size of the screen.

How to test the application:
The website is tested by printing out the JSON file then compare with the data in the database, to ensure all the code shows on the website matching with database.

Software tools used:
PHPStorm, DataGrip, WebStorm, Apache HTTP Server.
Main Page and View All Cases
![alt text](https://github.com/Jasonshi83/FindBetterPlace/blob/master/Main_ViewAllCases.gif)

Post your own experience:
![alt text](https://github.com/Jasonshi83/FindBetterPlace/blob/master/Share_Own_experience.gif)
