@extends('layout')
@section('title','Reflections')
<head>
    <link href="{{asset('css/homeStyle.css')}}" rel="stylesheet">
</head>
@section('nav')


<h1>Reflections</h1>
<hr>
<div class="reflection-text">
    <h2>Week 01 - 06/07/2020 & 09/07/2020</a></h2>
    
</div>
<div class="reflection-text">
    <h2>Week 02 - 13/07/2020 & 16/07/2020</a></h2>
    We were tasked with starting our portfolio and studying the Agile Manifesto. I didn't really do either and was very ineffective with my time at the start of the semester.
    We were given some videos to watch about the 12 Agile Principles, however during the class I wasted a lot of time and didn't end up watching them. I watched some a few days later, and finished it much later in the semester. The principles I learnt in them were quite helpful and I gained a lot from using them in my project. The main ones we used in our project were to only deploy 100% working code, accept change in requirements, and having regular team meetings.
</div>
<div class="reflection-text">
    <h2>Week 03 - 20/07/2020 & 23/07/2020</a></h2>
    Worked on Laragon CRUD app, I mainly worked on problem solving, figuring out how to launch the app etc. I still need to work on update section. During the time after my Thursday class I finally watched through the agile content.
    
</div>
<div class="reflection-text">
    <h2>Week 04 - 27/07/2020 & 30/07/2020</a></h2>
    I don't have much to write about for this class as I didn't write anything at the time, other that I was away working at OGL for the class on the 30th. 
</div>
<div class="reflection-text">
    <h2>Week 05 - 03/08/2020 & 06/08/2020</a></h2>
    This week I started my long journey or learning about image uploading. I started trying to piece together code without really knowing how it all worked, and that resultsed in code that sat commented out for almost 3 months. At this point in the project I didn't know what a controller was, and so my code was very far from working.
</div>
<div class="reflection-text">
    <h2>Week 06 - 10/08/2020 & 13/08/2020</a></h2>
    
    On the 13th I worked a lot with trying to learn how to let a user insert their own images and upload them website.<br>
    <img src="{{asset('images/imageInsertion.png')}}" alt="Evidence of Image Insertion" width="100%"> 
</div>
<div class="reflection-text">
    <h2>Week 07 - 17/08/2020 & 20/08/2020</a></h2>
    I was away sick on the 17th. I didn't inform my group which was a huge mistake on my part, however I learnt from my mistake and always discussed with my group if any of us thought we were going to miss a day. The 20th was Dale's day so our group agreed to stay at home and work rather than to come in. I have no commits to prove I did work since I'm on my laptop, however I did ask for help in our team chat.<br>
    <img src="{{asset('images/help.png')}}" alt="Asking for help from home" width="100%"> 
</div>
<div class="reflection-text">
    <h2>Week 08 - 24/08/2020 & 27/08/2020</a></h2>
    I worked on getting the images page running. I started using a separate Controller for images and fixing routes. Using controllers was new to me, so I was quite slow at first, and spent a lot of time studying the Intro App Dev powerpoints. On the 27th Adon wasnt in class, and so we got together and agreed to leave class an hour early to deal with other commitments
</div>
<div class="reflection-text">
    <h2>Week 09 - 31/08/2020 & 03/09/2020</a></h2>
    To prepare for the work presenting due on the 3rd, I started looking at another approach to the image problem I was having by using configuration settings and multiple forms, however it turned out to not be helpful, although it did help me learn moer about how controllers can be used, as well as other ways of writing thr same code. On the 3rd we presented our project so far to the class.
</div>
<div class="reflection-text">
    <h2>Week 10 - 07/09/2020 & 10/09/2020</a></h2>
    The Client, Adon, decided that he wanted a Car website and database rather than a games website. We subsequently changed to cars. Following the 2nd Agile principle, we accepted this change and worked on changing the website to be more car centered rather than games. I went through all our files and changed variables, file names, and formatting to account for what the client wanted. A majority of the first class this week was dedicated towards planning out our new approach as a group, and questioning Adon about what specifications he wanted. 
</div>
<div class="reflection-text">
    <h2>Week 11 - 14/09/2020 & 17/09/2020</a></h2>
    As a group we didn't get much work done as 2 of us had other assignments with a due date coming up. Looking back, we shouldn't have cut time out of Software Engineering time to do this. We decided as a group to take the day off on the 14th to work on those assigments.
</div>
<div class="reflection-text">
    <h2>Week 12 - 21/09/2020 & 24/09/2020</a></h2>
    I worked a little on the database side of the listings, focusing on the models. I had finally figured out a way to get images uploading, however they would get lost in the local files, and I needed a break from the same code. This is what sparked me starting to work on the addListing page gradually.
    I decided to go over some agile principles to see how I could effectively implement them into our project. I was reminded of this by the change in website twist, as I remember a principle about being open to change.
</div>
<div class="reflection-gap">
    <h2>Mid semester break - 28/09/2020 & 01/10/2020</a></h2>
</div>
<div class="reflection-gap">
    <h2>Mid semester break - 05/10/2020 & 08/10/2020</a></h2>
</div>
<div class="reflection-text">
    <h2>Week 13 - 12/10/2020 & 15/10/2020</a></h2>
    This week, being the first week back from mid semester break, we eased into the work, finishing off some features that needed worked on. I merged some work that Lucas did with my current stuff, as well as working on merging stuff into an addListing page rather than the addCars page. Working on a joining table between the images table and the listings table to allow for 1 listing to have multiple images of the car.
</div>
<div class="reflection-text">
    <h2>Week 14 - 19/10/2020 & 22/10/2020</h2>
    I started off this week working on my joining table, creating a relationship so that an article can have multiple images. I did a lot of research into getting image uploading working and pushing to the database. Unfortunately Lucas told me that mariadb doesn't support image uploading because of security risks, which was a huge motivation drain as it is what I've been working on for a long time. One way we found was a possible alternative was to have a single image uploaded, and store it in the public folder, then store the image name and file path in the database. Because I found this out on the 22nd, I spent that class removing my joining tables and links since they had become redundant. 
</div>
<div class="reflection-text">
    <h2>Week 15 - 26/10/2020 & 29/10/2020</h2>
    I didn't write a reflection for this week, and our github is empty.  
</div>
<div class="reflection-text">
    <h2>Week 16 - 2/11/2020 & 5/11/2020</h2>
    After a major breakthorugh, I discovered I could store the images locally to the STORAGE folder, rather than locally to the public folder. I toyed with the idea of autogenerated names with timestamps so that all names are unique, however I decided to keep it so that names were normal.<br>
    <img src="{{asset('images/Autonames.png')}}" alt="Autogenerated names for images" width="300px">
</div>
<div class="reflection-text">
    <h2>Week 17 - 9/11/2020 & 12/11/2020</h2>
    During our first class I was once again stuck on getting image uploading from a user working properly, and displaying onto the page. Adon gave me some advice for logging messages within the code to find what code runs and doesn't run
    Got image working completely done, got some troubleshooting tips from Adon regarding adding log outputs mid code to see what stops working.<br>
    <img src="{{asset('images/Break.png')}}" alt="Break Output" width="300px"> 
    <img src="{{asset('images/Break1.png')}}" alt="Break Code" width="300px"><br>
    As you can see, it shows a "BREAK" in the code when it runs successfully past that part of the code, so it makes it easy to see where and when code stops working.Having multple breaks, let me figure out that I was having an error in my if statement.<br>
    <img src="{{asset('images/imageController.png')}}" alt="Image Controller" width="300px"> 
</div>
<div class="reflection-text">
    <h2>Week 18 - 16/11/2020 & 19/11/2020</h2>
    This week was all about finishing touches. We had already gotten every feature we could working, and decided it was time to tidy up our css, code comments, and general tidyness of our website. We also worked on testing the search and addListing features a lot to make sure there were no bugs, which turned out to be a good idea as in the presentation on the 19th, we never had any errors, compared to other groups who were having a few. After recieving feedback from Adon and Grayson, we decided to do some minor touchups to satisfgy the client's final wishes, however we didn't start anything new as we didn't want to hand it in with an unfinished feature.
</div>
<br>
<hr>
<br>
<div class="reflection-text">
    <h1><strong>Final Reflection</strong></h1>
    Looking back throughout this whole project, I think we incorporated the agile principles we learnt about well, but really required some nudging in the right direction at times. Early on in the project we didn't do standups, we didn't work much outside of class, and we didn't talk to the client frequently. By the time we reached the final sprint, we were having a standup before every class, communicating frequently through messenger about our progress outside of class, and started involving the client more in our process. 
    Throughout the whole project we never pushed unfinished work to the master branch, or deployed it, so we followed that principle consistently, however we didn't push to master at the end of every sprint. We were always partially through a task at the end of the sprint so we didn't push, which was very poor practice.
    Personally, I know I spent way too much time working on my feature, which I'm happy to finally get done, especially seeing as no other group was able to get it working fully. My main focus was with article listings and image uploading, which proved to be much more complex than I originally thought. My pace during this project was quite poor. I started very slowly, working away at learning how the input features work etc, however once I figured that out my pace picked up with my new understanding of it, and I got a lot more work to show for it in the 2nd half of the project. 
    The twist in the middle of the project where the site requirements and theme were changed really changed our group's outlook on this project, and it motivated us to work harder, and although much of the core functionality was very similar, if not the same, it felt like a fresh new project to work on, and it really motivated our group to work hard.
</div>
<br>

@endsection
