<?php
header("Access-Control-Allow-Origin: *");

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if (!$_POST)
    exit;

function isEmail($email)
{
    return (preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}

if (!defined("PHP_EOL"))
    define("PHP_EOL", "\r\n");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

if (trim($name) == '') {
    echo '<div class="alert alert-error">Anda harus mengetikan nama anda.</div>';
    exit();
} else if (trim($email) == '') {
    echo '<div class="alert alert-error">Anda harus mengetikan alamat email anda.</div>';
    exit();
} else if (!isEmail($email)) {
    echo '<div class="alert alert-error">Alamat email tidak valid.</div>';
    exit();
} else if (trim($phone) == '') {
    echo '<div class="alert alert-error">Anda harus mengetikan nomer telpon/HP anda!</div>';
    exit();
} else if (trim($comments) == '') {
    echo '<div class="alert alert-error">Penting bagi kami mengetahui apa kebutuhan, ide dan pertanyaan anda.</div>';
    exit();
}

$comments = stripslashes($comments);
$comments = "Email: {$email}<br/>Name: {$name}<br/>Phone: {$phone}<br/><hr/>Message:<hr/>{$comments}<br/>";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Host = 'mail.masuk.email';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'info@dikakaryatech.com';
$mail->Password = 'dB_c0d3.hack';
$mail->setFrom('info@dikakaryatech.com', 'Dika Karya Tech');
$mail->addReplyTo('info@dikakaryatech.com', 'Dika Karya Tech');
$mail->addAddress('debipraharadika@gmail.com', 'Debi Prahra Dika');
$mail->Subject = "Let's talk about your idea";
$mail->Body = $comments;
//$mail->msgHTML(file_get_contents('message.html'), __DIR__);
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<br/><div class='alert alert-success'>";
    echo "<h3>Email telah terkirim.</h3>";
    echo "<p>Terima kasih <strong>$name</strong>, pesan anda akan segera kami respon.</p>";
    echo "</div>";
}
?>