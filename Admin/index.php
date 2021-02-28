<!DOCTYPE html>
<html lang="en">
	<?php
		require_once('../app/security/session.php');
		$s = new Session();
		require_once('../app/views/Admin/header.php');
	?>
	<body>
		<script src="/Online-Store/Admin/javascript/login.js"></script>
		<?php
            if(isset($_GET['page']))
            {
                switch($_GET['page'])
                {
                    case 'login' : require_once('../app/views/Admin/login.php');
                    break;
                    case 'register' : require_once('../app/views/Admin/register.php'); //template : https://athemes.com/collections/free-bootstrap-admin-templates/
                    break;
					case 'profile' : $s->afterConnection(); require_once('../app/views/Admin/profile.php');
					break;
                }
            }
            else
            {
				require_once('../app/views/Admin/login.php');
            }
        ?>
	</body>
</html>