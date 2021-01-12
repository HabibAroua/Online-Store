<!DOCTYPE html>
<html lang="en">
	<?php
		require_once('../app/views/Admin/header.php');
	?>
	<body>
		<?php
            if(isset($_GET['page']))
            {
                switch($_GET['page'])
                {
                    case 'login' : require_once('../app/views/Admin/login.php');
                    break;
                    case 'register' : require_once('../app/views/Admin/register.php');
                    break;
                }
            }
            else
            {
                
            }
        ?>
	</body>
</html>