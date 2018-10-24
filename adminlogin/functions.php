
<?php
 if(isset($_POST["Export"])){
	  $con = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System"); 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id','Scouter', 'Team Number', 'Match Number', 'Alliance Color', 'Alliance Teams', 'Starting Position', 'Start Config',
       'Auto... what did they do?', 'Capabilities', 'Number in Scale', 'Number In Switch', 'Number in Exchange', 'Fouls', 'Tech Fouls',
        'Powerups', 'Alliance Total in Scale', 'Alliance total in Switch', 'Alliance Total in Exchange', 'Enemy got in this robots switch',
         'Enemy got in this robots scale', 'Defense', 'Climb', 'Total Alliance Score', 'Total Opponent Score', 'Red Car', 'Yellow Card',
          'FMS problems', 'AOG problem', 'Sat Entire Match Problem', 'Won', 'Notes'));  
      $query = "SELECT * from scouting_data ORDER BY TeamNumber DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }
 ?>