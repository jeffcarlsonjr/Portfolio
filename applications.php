<?php
include 'functions/globalClass.php';
$tools = new tools();


if(empty($_SESSION['id']))
{
    
    $tools->metaRedirect('0', '/Portfolio/#/login');
}
else {}

?>

<div class="application col-lg-9">
 <!-- Start of Week at a Glance -->
 <!-- Very long script so just using a jQuery .load to call it-->
 <script>
 $('#waag').load('./applications/weekataglance.html');
 </script>
 <div id="waag"></div>
 
 <!--End of Week and a Glance -->  
 <!--Start of Latest News -->
 <hr width="100%" align="center"/>

 <div style="width: 100%; height: 450px; margin-top: 45px;">
      <h2>Add Latest News Stories</h2>
       <h4>This was a small application that I build for a client that wanted to be able to change the "Latest News" on their website with out having to change the HTML all the time. This form is loaded with PHP and then obviously displayed on the clients website. They had some trouble because they wanted to know what it looked like before we uploaded it. So with AngularJs and CSS, I recreated the spot from the website exactly and when they type in to the Title and the Description boxes it appears in the Latest News section so they have an exact idea of how it will look for they upload. Feel free to type something in.</h4>
     <div style="width:600px; height: auto; float: left; ">
      
        <form method="post">
            <table class="table">
                
                <tr>
                    <td width="33%"><strong>Title</strong></td> 
                    <td><input type="text" name="title" class="form-control" ng-model="title" placeholder="Type in here"/></td>
                </tr>
                <tr>
                    <td><strong>Description</strong></td>
                    <td><textarea name="description" ng-model="description" class="form-control" placeholder="Type in here"></textarea></td>
                </tr>
                <tr>
                    <td><strong>Link</strong></td>
                    <td><input type="text" name="link" class="form-control"/></td>
                </tr>
                <tr>
                    <td><strong>Upload PDF</strong></td>
                    <td><input type="file" name="files" class="form-control"/></td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                    <td align="right"><input type="submit" name="addNews" class="btn-primary" disabled/></td>
                </tr>
            </table>
        </form>
       
    </div>
    <div class="news">
        <div class="newsHeader">Latest News</div>
        <div class="newsBox">
            <p>
                <span style="font-size: 13px"><strong>{{title}}</strong></span> 
                <br/>
                <span style="font-size: 12px; font-weight: lighter">{{description}} >>></span>
            </p>
       
        </div>
    </div>
     
 </div>
 <!--End of Latest News -->
 <hr width="100%" align="center"/>
 <!--UPS-->
 <h2>Shipping Calender</h2>
 <h4>My customer wanted me to create a way to show when a customer purchased by 3pm that day, which was the cut off time for orders to ship that day, when there package should arrive based on UPS ground shipping. This was easy enough until it dawned on me that we needed a script that skipped the weekends being that UPS did not ship on weekends.</h4>
 <div style="width: 100%; height: 500px; margin: 25px 0px">
    <div id="countbox"></div>
       <br/>
       <div><img src="./img/map-0055-1-.png"/></div>
        <div style="float: left; margin-right: 25px; font-size: 12px">
            <img src="./img/1Day.png" width="50" alt="1 Day of shipping" title="1 Day of shipping"/>
            <div id="date0"></div>
            <span><script>displayDate(0,0)</script></span>
        </div>
        <div style="float: left; margin-right: 25px; font-size: 12px">
            <img src="./img/2Day.png" width="50" alt="2 Day of shipping" title="2 Day of shipping"/>
            <div id="date1"></div>
                <span><script>displayDate(1,1)</script></span>
        </div>
        <div style="float: left; margin-right: 25px; font-size: 12px">
            <img src="./img/3Day.png" width="50" alt="3 Day of shipping" title="3 Day of shipping"/>
            <div id="date2"></div>
                <span><script>displayDate(2,2)</script></span>
        </div>
        <div style="float: left; margin-right: 25px; font-size: 12px">
            <img src="./img/4Day.png" width="50" alt="4 Day of shipping" title="4 Day of shipping"/>
            <div id="date3"></div>
                <span><script>displayDate(3,3)</script></span>
        </div>
        <div style="float: left; margin-right: 25px; font-size: 12px">
            <img src="./img/5Day.png" width="50" alt="5 Day of shipping" title="5 Day of shipping"/>
            <div id="date4"></div>
                <span><script>displayDate(4,4)</script></span>
        </div>
        <div style="float: left; margin-right: 25px; font-size: 12px">
            <img src="./img/6Day.png" width="50" alt="6 Day of shipping" title="6 Day of shipping"/>
            <div id="date5"></div>
                <span><script>displayDate(5,5)</script></span>
        </div> 
     
 </div>
 
 
</div>
    
