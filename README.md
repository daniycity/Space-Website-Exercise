# Space website
## Summary
- #### [Introduction](#introduction)  

- #### [Usage](#usage)  
- #### [Configuration and technical characteristics](#configuration)  
- #### [Files and project structure](#files)
- #### [Feature delivered](#feature)
- #### [Bonus delivered](#bonus)
- #### [Browser compatibility](#compatibility)
- #### [External resources](#external)
- #### [License and contact information](#license)
- #### [Authors](#autors)
- #### [Changelog and version history](#external)
- #### [Other information](#other)

## Introduction <a id="introduction"></a>
This website it's a school assignment during the course "Front-end development" in [ITS ICT Piemonte](https://www.its-ictpiemonte.it/) (situated in Turin, Italy) durign 2020/2021. Rappresent the website of a space agency it's been written by students so probably it's not polished yet with the hope it's enough appealing. For further information keep reading this readme.
## Usage (how to set up, run and use the application) <a id="usage"></a>
1. Install and open [XAMPP](https://www.apachefriends.org/it/index.html)
2. Copy and paste all the file in the directory **c:xampp/htdocs**
3. Start XAMPP in detail:
    - Apache 
    - MySql
4. Open a browser and in the URL type **localhost/homepage.html**
5. Explore the website.
## Configuration and technical characteristics <a id="configuration"></a>
For this project we use this programming languages:
- Front-end
    - HTML
    - CSS
    - JAVASCRIPT with the additional feature of external library JQUERY**
- Back-end
    - PHP

**Used only for Navbar
## Files and project structure <a id="files"></a>
* Folder **design**: Contains all the graphic element for prototype purpose and some useful information in detail:
    * **front-end.xd** : Created thanks to [Adobe XD](https://www.adobe.com/products/xd.html) allow us to make the layout, element positioning general prototyping of web-page.
    * **colori.md** : Simple pallet of color.
    * **fonts.md** : Simple list of all the fonts that we used.
* Folder **assignment**: Contains the exercise and some guide line on how to do the website and comments.
    * **proj-01-space**: All the information that we need to create the website
    * **appendix-01-comments-and-documentation.pdf**: Usefull information for do code comments and documentation
* Folder **img**: Contains all the image used in the website suddvided in   subfolders. The type of image are:
    * .SVG 
    * .JPG
    * .PNG
    * .GIF
* Folder **js**: Contains all the javascript file used in the project
    - main.js Used in the navbar
    - mission.js Used for animation and dropdown of the elements 
    - gallery.js Used for carousel
    - join-us.js Used for display/hide the Form
* Folder **posts**: Contains html pages relative to news posts
    - challenger-tragedy.html
    - curiosity-selfie.html
    - grow-space.html
    - mars.html
* Folder **sql** Contains sql script for create the right table in the database
* All the other **pages.html**:
## Feature delivered <a id="feature"></a>
- ### Feature 1: Collapsible navbar
- ### Feature 2: Dropdown buttons in missions.html
- ### Feature 3: Modify scrollbar (using css pseudo-class)
- ### Feature 4: Parallax effect (using backgroud-attachment) in homepage.html and aboutus.html
- ### Feature 5: In join-un.html Hide and Display form
- ### Feature 6: Embedded YouTube video
## Bonus delivered <a id="bonus"></a>
- ### Bonus 1:
    - Scroll-behavior smooth for anchor elements 
    - Hover effect (using pseudo-class)
    - Selection color (using css pseudo-class) changed in homepage.html and aboutus.html
    - Keyframe animations
        - In missions.html for rotate the arrow on buttons press (roll)
        - In homepage.html and about.html for buttons pulse effect (pulse)
        - In gallery.html for translate from an image to another (fade)
- ### Bonus 2:
    - Beckend server, in local, done with PHP language for used and technical details see above or [click here](#usage)
## Browser compatibility <a id="compatibility"></a>
- Chrome v90.0.4430.93: tested and fully compatible
- Chrome v90.0.4430.94: tested and fully compatible
- Chrome mobile v90.0.4430.66 tested and fully compatible
- IE v1909 (build SO 18363, 1440) tested functional but with some design changes
    - propriety **object-fit:cover;** doesn't work 
    - propriety for make scrollbar in another color doesn't work
    - propriety **scroll-behvior** doesn't work
    - input type color and number on the form doesn't work 
- Opera v75.0.3969.218 tested and fully compatible
- Edge v90.0.818.46 tested and fully compatible
- Firefox v87.0 tested and fully compatible

## External resources <a id="external"></a>
* All the **images.svg** are taken from the website [Flaticon](https://www.flaticon.com/). Huge thanks to this artist.
* [Deep-image](https://deep-image.ai/) a really useful tool for resize the image without lose the quality thanks to the AI free for only 5 times. Use for the background image.
* [Crop-circle](https://crop-circle.imageonline.co/) allow you to upload any type of image file and crop with circle shape and convert in png. Used for the astronauts image.
* Information and image from [NASA](https://www.nasa.gov/).
* Some code and image are taken (and re-adapt) from the internet.

## License and contact information <a id="license"></a>
All the information and images from this website can be protected by copyright, used only for educational purpose and not for commmercial scope and not for profit. All the code information  are copyright free and can be used with no authorization. We don't assume no responsability for the illegal use of this code.
- Contact information
    - Daniele Pagano: daniele.pagano@edu.itspiemonte.it
    - Matteo Fasano: matteo.fasano@edu.itspiemonte.it
    - Oliver Terzo: oliver.terzo@edu.itspiemonte.it
## Authors <a id="authors"></a>
1. ### Author
    - **name:** Daniele Pagano
    - **role:** Developer
2. ### Author
    - **name:** Oliver Terzo
    - **role:** Developer (siciliano)
3. ### Author
    - **name:** Matteo Fasano
    - **role:** Developer
## Changelog and version history *<a id="changelog"></a>
1. Created the file structure with no content,the design and basic readme file. 30/03/21 
2. Created the element in common of the page footbar and navbar. 31/03/21
3. Completed the page join-us.html. 31/03/21
4. Homepage.html completed. 03/04/21
5. Gallery.html completed. 03/04/21
6. Completed the page missions.html created the file fonts.md. 04/04/21
7. About-us.html completed 21/04/21
8. Final testing, debugging and owerall finishes 27/04/2021 27/04/21
#### * **Date** format dd MM YY
## Other Information <a id="other"></a>
- For versioning and code-sharing purpose we used [GitHub](https://github.com/).
- For code development we used [VisualStudioCode](https://code.visualstudio.com/)
- For virtual meeting and voice chat we used [Discord](https://discord.com/)
- For Messaging and written comunication we used [Telegram](https://web.telegram.org/)