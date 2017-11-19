<? 
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
$email = @ trim ($_POST['email']);


//mailchimp add subscrible
include_once 'MailChimp.php';
$MailChimp = new \Drewm\MailChimp('e1b129eb55bee6479c176f15e21e78c1-us17');
$result = $MailChimp->call('lists/subscribe', array(
                'id'                => 'cebbf19715',
                'email'             => array('email' => $email),
                'merge_vars'        => false,
                'double_optin'      => true,
                'update_existing'   => true,
                'replace_interests' => false,
                'send_welcome'      => false,
            ));
//print_r($result);
header ("Location: https://github.com/hustlemore/dev/edit/master/thanks_sub.html");
?>
