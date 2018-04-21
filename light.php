<?php
    if(isset($_GET['action']))
           {
             exec('sudo python /home/pi/Desktop/Lights.py');
           }
 ?>


 <form id="frm" method="post"  action="?action" >
 <input type="submit" value="Power" id="submit" />
 </form>




