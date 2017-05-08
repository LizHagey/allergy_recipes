<!DOCTYPE html>
<!--
Teaching Presentation
-->
<html lang="en-us">
    <head>
        <title>Site Plan | topallergyfreerecipes.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/head.php'; ?>
    </head>
    <body id="home">
        <?php include_once("analyticstracking.php") ?>
        <div>
            <header id="pageHeader">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/header.php'; ?>
            </header>
            <nav>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/navigation.php'; ?>           
            </nav>
            <main>
               
                    <h1>Teaching Presentation</h1>
                    <h1>Links to sub-pages</h1>
                    <h3>Elizabeth Hagey</h3><br>
                    
                    <h2>Links</h2>
                    <ul>
                        <li>We have grown accustomed to finding what we want at the click of a button.
</li>
<li>We want people to come to our site and visit all the pages. 
</li>
<li>So the most important links on our website are the links to other pages of our website. 
</li>
                    </ul>
                    <img class = "linkPict" src="media/linkPict.png" alt="Link Button">
                    <h2>How to link our internal pages</h2>
                    <table>
                        <tr>
                            <td>The code is:</td>
                            <td><img src="media/CodeOne.jpg" alt = "code to link pages"></td>
                        </tr>
                    </table>
                    
                    <br>
                    <p>Etc...</p>
                    <p>Green is what the user will see as the link.</p>
                    <br>
                    <h2>I will show you how</h2>
                    <table>
                        <tr>
                            <td>First I created a new page and called it page one.</td>
                            <td><img src="media/codeTwo.jpg" alt="Create new page"></td>
                        </tr>
                        <tr>
                            <td>Then I added the code to the body of my sandbox file to link to this page.</td>
                            <td><img src="media/codeThree.jpg" alt="Code in body"></td>
                        </tr>
                        <tr>
                            <td>Now when I go to my sandbox file the link is there.  When I click ont he link it will take me to page one of my website.</td>
                            <td><img src="media/codeFour.jpg" alt="picture of webpage with link"></td>
                        </tr>
                    </table>
   
                    <br>
                    <h2>Conclusion</h2>
                    <ul>
                        <li>We often have several pages that we want to link to that are usually placed on the navigaton bar.</li>
                        <li>There are other places on the page that can also be links to our sub-pages such as pictures or text that is elsewhere on the home page.</li>
                        <li>Always make sure that there is a way to click back to the home page from every page.</li>
                    </ul>
  
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/Modules/footer.php'; ?>               
            </footer>
        </div>   
    </body>
</html>
